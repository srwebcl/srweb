<?php
// contacto.php (v4.1 - Corregido: Sin duplicados, typo SMTPSecure arreglado, con logs)

$currentPage = 'contacto';
$pageTitle = 'Contacto - SRweb | Hablemos de tu Proyecto';
$pageDescription = 'Contáctanos para cotizar tu proyecto web.';

include 'includes/header.php'; // Asegúrate que header.php define BASE_URL correctamente

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Asegúrate que la ruta al autoload.php sea correcta desde contacto.php
require 'vendor/autoload.php';

$formMessage = '';
$formError = false;

// Lógica principal solo si se envía el formulario (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. Validación reCAPTCHA v3 ---
    $recaptcha_secret = '6Ld2BJoqAAAAAAX2oHR6yTXhRdySxaHGYSzsnBOX'; // Tu Clave Secreta
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? ''; // Token enviado por el formulario
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR'] // IP del usuario
    ];

    // Opciones para file_get_contents
    $recaptcha_options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($recaptcha_data)
        ],
        // Considera añadir un timeout si file_get_contents se demora
        // 'timeout' => 5 // 5 segundos
    ];
    $recaptcha_context  = stream_context_create($recaptcha_options);

    // Llamada a la API de Google y logging para depuración
    $recaptcha_response_raw = file_get_contents($recaptcha_url, false, $recaptcha_context);

    $recaptcha_result = json_decode($recaptcha_response_raw);

    // --- Comprobación del resultado de reCAPTCHA ---
    // Falla si: no hay resultado O el resultado no indica éxito O (si existe la puntuación) la puntuación es menor a 0.5
    if (!$recaptcha_result || !$recaptcha_result->success || (isset($recaptcha_result->score) && $recaptcha_result->score < 0.5) ) {
        $formMessage = 'Error: Por favor, verifica que no eres un robot.';
        // Añadir más detalle al mensaje para depuración (visible en el formulario)
        if ($recaptcha_result) {
             $formMessage .= " (Success: " . ($recaptcha_result->success ? 'Si' : 'No') . ", Score: " . ($recaptcha_result->score ?? 'N/A') . ")";
        } else {
             $formMessage .= " (No se pudo validar con Google o decodificar la respuesta)";
        }
        $formError = true;

    } else {
        // --- reCAPTCHA VÁLIDO - Procesar y Enviar Correo ---

        // 2. Sanitización y Validación de Datos del Formulario
        $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
        $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
        $telefono = htmlspecialchars(trim($_POST['telefono'] ?? '')); // Teléfono es opcional aquí
        $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

        // Validar campos obligatorios
        if ($nombre && $email && $mensaje) {

            // 3. Enviar Correo con PHPMailer
            $mail = new PHPMailer(true); // Habilitar excepciones
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Descomentar SOLO para depuración detallada de SMTP en pantalla/log

            try {
                // Configuración del servidor SMTP (Gmail vía SSL en puerto 465)
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'contacto@srweb.cl';          // Tu dirección de correo completa
                $mail->Password = 'daihasauaeqqirre';          // **USA UNA CONTRASEÑA DE APLICACIÓN si tienes 2FA**
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ¡Corregido! Usar SSL
                $mail->Port = 465;                              // Puerto para SSL

                // Charset
                $mail->CharSet = 'UTF-8'; // Asegurar codificación correcta para tildes, etc.

                // Remitente y Destinatario(s)
                // Es buena práctica usar tu propio correo como 'From', y el correo del usuario como 'ReplyTo'
                $mail->setFrom('contacto@srweb.cl', 'SRweb'); // Remitente (tu correo)
                $mail->addAddress('contacto@srweb.cl', 'SRweb'); // Destinatario principal (tú)
                // $mail->addCC('otrocorreo@ejemplo.com'); // Añadir copia si es necesario
                $mail->addReplyTo($email, $nombre); // Para que al responder, vaya al usuario

                // Contenido del Correo
                $mail->isHTML(true); // Enviar como HTML
                $mail->Subject = 'Cotización Web - ' . $nombre; // Asunto más descriptivo
                $mail->Body    = "
                    <html><body>
                    <h2>Nueva solicitud de Cotización:</h2>
                    <p><strong>Nombre:</strong> " . nl2br($nombre) . "</p>
                    <p><strong>Email:</strong> " . nl2br($email) . "</p>
                    <p><strong>Teléfono:</strong> " . ($telefono ? nl2br($telefono) : 'No proporcionado') . "</p>
                    <hr>
                    <p><strong>Mensaje:</strong></p>
                    <p>" . nl2br($mensaje) . "</p>
                    <hr>
                    <p><small>Enviado desde el formulario de contacto de srweb.cl</small></p>
                    </body></html>
                ";
                // Cuerpo alternativo para clientes de correo que no soportan HTML
                $mail->AltBody = "Nueva solicitud de Cotización:\n\n" .
                                 "Nombre: $nombre\n" .
                                 "Email: $email\n" .
                                 "Teléfono: " . ($telefono ? $telefono : 'No proporcionado') . "\n\n" .
                                 "Mensaje:\n$mensaje\n\n" .
                                 "Enviado desde el formulario de contacto de srweb.cl";

                // Enviar
                $mail->send();
                $formMessage = '¡Mensaje enviado con éxito! Te contactaremos pronto.';
                $formError = false;

            } catch (Exception $e) {
                // Error al enviar el correo
                $formMessage = 'Error al enviar el mensaje. Por favor, intenta de nuevo más tarde o contáctanos directamente.';
                $formError = true;
                // Registrar el error detallado de PHPMailer en el log de errores de PHP
                error_log("PHPMailer Error: {$mail->ErrorInfo}");
            }

        } else {
            // Error en la validación de campos del formulario
            $formMessage = 'Error: Por favor, completa todos los campos obligatorios (*).';
            $formError = true;
        }
    } // Fin del else (reCAPTCHA válido)

} // Fin del if ($_SERVER["REQUEST_METHOD"] == "POST")

?>

<section id="hero-contacto" class="relative overflow-hidden text-white pt-24 pb-16 md:pt-32 md:pb-24">
    <div id="particles-js-hero" class="absolute inset-0 -z-10 h-full w-full items-center [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)]"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 opacity-0 hero-element">
            Hablemos de Tu <span class="text-blue-400">Proyecto</span>
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 opacity-0 hero-element">
            ¿Listo/a para potenciar tu negocio con una presencia online que realmente funcione? Queremos conocer tus ideas y necesidades. Contáctanos usando el medio que te sea más cómodo.
        </p>
    </div>
</section>

<section id="contenido-contacto" class="py-16 lg:py-24 bg-gradient-to-r from-[#000000] via-[#020614] to-[#29235c]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">

            <div id="formulario-contacto">
                <h2 class="text-2xl font-bold text-white mb-4">1. Formulario de Contacto</h2>
                <p class="text-gray-400 mb-6">Completa el siguiente formulario con tus datos y consulta. Te responderemos a la brevedad posible.</p>

                <?php if (!empty($formMessage)): ?>
                    <div class="mb-4 p-4 rounded-md <?php echo $formError ? 'bg-red-500/20 border border-red-500 text-red-300' : 'bg-green-500/20 text-green-300'; ?>">
                        <?php echo $formMessage; // Ya está saneado arriba o es un mensaje nuestro ?>
                    </div>
                <?php endif; ?>

                <form id="form-principal-contacto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#formulario-contacto" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre Completo <span class="text-red-500">*</span></label>
                        <input type="text" name="nombre" id="nombre" required autocomplete="name" value="<?php echo isset($_POST['nombre']) && $formError ? htmlspecialchars($_POST['nombre']) : ''; ?>" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border-gray-600 rounded-md bg-gray-700 text-white" placeholder="Tu Nombre">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo Electrónico <span class="text-red-500">*</span></label>
                        <input id="email" name="email" type="email" required autocomplete="email" value="<?php echo isset($_POST['email']) && $formError ? htmlspecialchars($_POST['email']) : ''; ?>" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border-gray-600 rounded-md bg-gray-700 text-white" placeholder="tu@correo.com">
                    </div>
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-300 mb-1">Teléfono / WhatsApp</label>
                        <input type="tel" name="telefono" id="telefono" autocomplete="tel" value="<?php echo isset($_POST['telefono']) && $formError ? htmlspecialchars($_POST['telefono']) : ''; ?>" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border-gray-600 rounded-md bg-gray-700 text-white" placeholder="+56 9 ...">
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-gray-300 mb-1">Mensaje <span class="text-red-500">*</span></label>
                        <textarea id="mensaje" name="mensaje" rows="5" required class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border-gray-600 rounded-md bg-gray-700 text-white" placeholder="Describe detalles de tu solicitud..."><?php echo isset($_POST['mensaje']) && $formError ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
                    </div>
                    <div class="g-recaptcha-placeholder my-4">
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
                         <p class="text-xs text-gray-500">Este sitio está protegido por reCAPTCHA y se aplica la <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" class="hover:text-blue-300">Política de Privacidad</a> y los <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer" class="hover:text-blue-300">Términos de Servicio</a> de Google.</p>
                    </div>
                    <div>
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enviar Consulta
                        </button>
                    </div>
                </form>
            </div>

            <div id="datos-contacto">
                 <h2 class="text-2xl font-bold text-white mb-4">2. Contacto Directo</h2>
                 <p class="text-gray-400 mb-6">Si prefieres una comunicación más ágil, utiliza estos canales:</p>

                 <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                         <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                         </div>
                         <div>
                            <h3 class="text-lg font-medium text-white">Correo Electrónico</h3>
                            <p class="text-gray-400">Envíanos un email a:</p>
                            <a href="mailto:contacto@srweb.cl" class="text-blue-300 hover:text-blue-200 break-all">contacto@srweb.cl</a>
                         </div>
                    </div>

                    <div class="flex items-start space-x-3">
                         <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                         </div>
                         <div>
                            <h3 class="text-lg font-medium text-white">Teléfono / WhatsApp</h3>
                            <p class="text-gray-400">Llámanos o envíanos un mensaje:</p>
                            <a href="tel:+56953810178" class="text-blue-300 hover:text-blue-200 mr-4"> +56 9 5381 0178</a>
                            <a href="https://wa.me/56983806054" target="_blank" rel="noopener noreferrer" class="text-green-400 hover:text-green-300 inline-flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M13.545 6.455a4.003 4.003 0 00-5.61 0 4.003 4.003 0 000 5.61l.005.005 5.605-5.61-.005-.005zm-5.61 5.61a4.003 4.003 0 005.61 0 4.003 4.003 0 000-5.61l-.005-.005-5.605 5.61.005.005zM10 18a8 8 0 100-16 8 8 0 000 16z"/></svg> WhatsApp (+56 9 8380 6054)
                            </a>
                         </div>
                    </div>

                    <div class="pt-6 border-t border-gray-700 mt-6">
                        <h3 class="text-lg font-medium text-white mb-3">Síguenos en Redes</h3>
                         <div class="flex space-x-4">
                            <a href="https://www.facebook.com/srweb.cl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-150 ease-in-out" aria-label="Facebook de SRweb">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"> <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /> </svg>
                            </a>
                            <a href="https://www.instagram.com/srweb.cl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-150 ease-in-out" aria-label="Instagram de SRweb">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.28-.059-1.688-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/srwebcl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-150 ease-in-out" aria-label="LinkedIn de SRweb">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"> <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/> </svg>
                            </a>
                         </div>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js?render=6Ld2BJoqAAAAAJFh2LxzyLjNbs1Z7pmSSYLm5jiw"></script>
<script>
    // Ejecuta reCAPTCHA al cargar la página y pone el token en el campo oculto
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ld2BJoqAAAAAJFh2LxzyLjNbs1Z7pmSSYLm5jiw', {action: 'enviar_contacto'}) // acción 'enviar_contacto'
            .then(function(token) {
                // Pone el token en el input oculto 'g-recaptcha-response'
                const recaptchaResponse = document.getElementById('g-recaptcha-response');
                if (recaptchaResponse) {
                    recaptchaResponse.value = token;
                } else {
                    console.error("Error: No se encontró el input 'g-recaptcha-response'.");
                }
            })
            .catch(function(error) {
                console.error("Error al ejecutar reCAPTCHA:", error);
                // Considera mostrar un mensaje al usuario o deshabilitar el botón de envío aquí
            });
    });
</script>

<?php include 'includes/footer.php'; ?>