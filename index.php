<?php
// index.php (v8.3 - Reemplazado widget Elfsight por versión estática)

// --- Configuración de la Página ---
$currentPage = 'inicio';
$pageTitle = 'SRweb - Agencia de Diseño Web Profesional en Chile';
$pageDescription = 'Diseñamos páginas web profesionales en Chile enfocadas en atraer clientes y aumentar ventas. Expertos en SEO y Google Ads.';

// Incluir Cabecera (Usa la versión corregida)
include 'includes/header.php'; // Asegúrate que header.php define BASE_URL

// Requerir función auxiliar si no existe (aunque debería estar en header.php)
if (!function_exists('base_url_path')) {
   function base_url_path($path = '') {
       $base = rtrim(BASE_URL, '/') . '/';
       $path = ltrim($path, '/');
       return htmlspecialchars($base . $path);
   }
}
?>
    <section id="hero" class="relative overflow-hidden text-white pt-24 pb-15 md:pt-30 md:pb-15">
        <div id="particles-js-hero" class="absolute inset-0 -z-9 h-full w-full [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)]"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
             <p class="text-sm md:text-base font-semibold uppercase tracking-wider text-[#e2c32b] mb-2 opacity-0 hero-element"> Para Empresas, Profesionales y Especialistas en Servicios
            </p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 opacity-0 hero-element">
                Diseño de <span class="bg-gradient-to-r from-[#2f44ab] via-[#2baee2] to-[#2ba2e2]  text-transparent bg-clip-text">Páginas Web Profesionales</span> en Chile
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 opacity-0 hero-element">
                Desarrollamos <span class="underline decoration-sky-500 font-semibold text-[#e2c32b]">páginas web profesionales</span> que aumentan las ventas de tu negocio. Nuestras páginas web se enfocan en la conversión y son diseñadas especialmente para atraer <span class="underline decoration-sky-500 font-semibold  text-[#e2c32b]">clientes calificados desde Google.</span>
            </p>
            <div class="opacity-0 hero-element">
                <a href="<?php echo base_url_path('contacto.php#formulario-contacto'); ?>" class="inline-block bg-blue-600 hover:bg-[#29235c] text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                    Agenda una videollamada
                </a>
            </div>
        </div>


        <div class="relative z-10 py-12 md:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-block bg-gray-800 bg-opacity-80 backdrop-blur-sm rounded-lg shadow-lg p-4 max-w-xs mx-auto text-center text-white border border-gray-700">

                    <img src="<?php echo base_url_path('assets/img/g.webp'); // O usa .png si tienes ese formato ?>" alt="Google Logo" class="h-6 w-auto mx-auto mb-2">
                    <p class="text-sm font-medium text-gray-300 mb-1">Calificación de Google</p>

                    <div class="flex items-center justify-center space-x-2 mb-1">
                        <span class="text-3xl font-bold text-white">4.9</span>
                        <div class="flex text-yellow-400">
                            <?php for ($i = 0; $i < 5; $i++): // Genera 5 estrellas. Ajusta si necesitas media estrella ?>
                                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <a href="https://g.co/kgs/Y7FTn9Z" target="_blank" rel="noopener noreferrer" class="text-sm text-blue-400 hover:text-blue-300 hover:underline">
                        Lee nuestras 16 reseñas
                    </a>

                </div>
                </div>
        </div>
    </section>

    <section id="clientes" class="py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-blue-900 font-semibold tracking-wide uppercase">Confianza Comprobada</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Clientes que Han Elegido Nuestra Experiencia
            </p>
             <p class="mt-4 max-w-2xl text-xl text-gray-700 lg:mx-auto">
                Desde empresas consolidadas hasta profesionales independientes, diversos clientes en Chile han depositado su confianza en nuestra agencia para desarrollar su presencia online. Creamos sitios web profesionales que no solo lucen bien, sino que están estratégicamente diseñados para convertir visitantes en clientes.
            </p>

            <div class="mt-10 w-full overflow-hidden relative
                        mask-image-[linear-gradient(to_right,transparent_0%,#000_12.5%,#000_87.5%,transparent_100%)]
                        md:mask-image-[linear-gradient(to_right,transparent_0%,#000_10%,#000_90%,transparent_100%)] group">
                <div class="flex animate-infinite-scroll group-hover:pause-animation">
                    <?php
                    $logos = [
                        'Autodealer.webp', 'Bride Producciones.webp', 'Carmona y Cia.webp',
                        'Carpinteras del Elqui.webp', 'Centro Mediluz.webp', 'Cofer.webp',
                        'Constructora Rio Cristal.webp', 'Elqui Rental.webp', 'Fettyna Gocha.webp',
                        'Grupo Cle.webp', 'Hans Protec Cars.webp', 'Lavcenter.webp',
                        'Terra Solaris.webp', 'Touru.webp', 'Viña-Ochotierras.webp',
                         'Autodealer.webp', 'Bride Producciones.webp', 'Carmona y Cia.webp', // Duplicar los logos para el efecto infinito
                        'Carpinteras del Elqui.webp', 'Centro Mediluz.webp', 'Cofer.webp',
                        'Constructora Rio Cristal.webp', 'Elqui Rental.webp', 'Fettyna Gocha.webp',
                        'Grupo Cle.webp', 'Hans Protec Cars.webp', 'Lavcenter.webp',
                        'Terra Solaris.webp', 'Touru.webp', 'Viña-Ochotierras.webp'
                    ];
                    // Ya tienes la lista de logos duplicada en el array directamente para asegurar que haya suficiente contenido para el loop infinito CSS
                    // $logosDuplicados = array_merge($logos, $logos); // No es necesario este array adicional si ya duplicaste arriba

                    foreach ($logos as $logo) { // Iterar sobre el array de logos (ya duplicado)
                        $alt = pathinfo($logo, PATHINFO_FILENAME);
                        echo '<div class="flex-shrink-0 mx-4 p-2 border border-gray-300 rounded-lg">'; // Añadir contenedor con borde y padding
                        // Efecto hover gris -> color
                        echo '<img class="h-12 w-auto max-w-none filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-in-out" src="' . base_url_path('assets/img/clientes/' . $logo) . '" alt="Logo Cliente ' . htmlspecialchars($alt) . '" title="' . htmlspecialchars($alt) . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <div class="mt-8 w-full overflow-hidden relative
                        mask-image-[linear-gradient(to_right,transparent_0%,#000_12.5%,#000_87.5%,transparent_100%)]
                        md:mask-image-[linear-gradient(to_right,transparent_0%,#000_10%,#000_90%,transparent_100%)] group">
                <div class="flex animate-infinite-scroll-reverse group-hover:pause-animation"> <?php
                     // Usamos el mismo array de logos duplicado para el segundo carrusel
                    foreach ($logos as $logo) {
                        $alt = pathinfo($logo, PATHINFO_FILENAME);
                        echo '<div class="flex-shrink-0 mx-4 p-2 border border-gray-300 rounded-lg">'; // Añadir contenedor con borde y padding
                        // Efecto hover gris -> color
                        echo '<img class="h-12 w-auto max-w-none filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-in-out" src="' . base_url_path('assets/img/clientes/' . $logo) . '" alt="Logo Cliente ' . htmlspecialchars($alt) . '" title="' . htmlspecialchars($alt) . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>

    <section id="servicios" class="py-16 lg:py-24 bg-gradient-to-r from-[#0b1025] via-[#01176d] to-[#29235c]"> <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-base text-[#e2c32b] font-semibold tracking-wide uppercase">Nuestros Servicios</h2>
            <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl">
                Tu Negocio Necesita más Clientes. Creamos Páginas Web Para Conseguirlos.
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-400 lg:mx-auto">
                La mayoría de las páginas web no están realmente hechas para atraer clientes. Se quedan en lo bonito, pero no funcionan como herramienta de negocio. En SRweb nos enfocamos en construir páginas web estratégicas para posicionarse en Google y transformar visitas en clientes reales.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 rounded-lg border border-slate-200 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                <div class="mb-4 h-16 flex items-center justify-center">
                     <div class="lottie-icon h-full w-full" data-path="<?php echo base_url_path('assets/icon/diseno-web.json'); ?>"></div>
                </div>
                <h3 class="text-lg font-medium text-[#fff] mb-2">Diseño de Páginas Web</h3>
                <p class="text-gray-400 text-sm">
                    Hacemos páginas web profesionales que te ayudan a aparecer en Google y conseguir más clientes para tu servicio.
                </p>
                <a href="<?php echo base_url_path('paginas-web.php'); ?>" class="mt-4 inline-block text-[##3140b0] hover:text-[#e2c32b] text-sm font-medium">Ver más &rarr;</a>
            </div>

            <div class="p-6 rounded-lg border border-slate-200 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                <div class="mb-4 h-16 flex items-center justify-center">
                    <div class="lottie-icon h-full w-full" data-path="<?php echo base_url_path('assets/icon/google-ads.json'); ?>"></div>
                </div>
                <h3 class="text-lg font-medium text-[#fff] mb-2">Campañas de Google Ads</h3>
                <p class="text-gray-400 text-sm">
                    Con Google Ads, logramos que te contacten clientes realmente interesados que buscan tus servicios justo ahora.
                </p>
                 <a href="<?php echo base_url_path('google-ads.php'); ?>" class="mt-4 inline-block text-[##3140b0] hover:text-[#e2c32b] text-sm font-medium">Ver más &rarr;</a>
            </div>

            <div class="p-6 rounded-lg border border-slate-200 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                <div class="mb-4 h-16 flex items-center justify-center">
                     <div class="lottie-icon h-full w-full" data-path="<?php echo base_url_path('assets/icon/desarrollo-web.json'); ?>"></div>
                </div>
                <h3 class="text-lg font-medium text-[#fff] mb-2">Mantención Web</h3>
                <p class="text-gray-400 text-sm">
                    Cuidamos tu página web (actualizaciones, seguridad) para que funcione siempre bien y tú no te preocupes por la tecnología.
                </p>
                 <a href="<?php echo base_url_path('contacto.php'); ?>" class="mt-4 inline-block text-[##3140b0] hover:text-[#e2c32b] text-sm font-medium">Ver más &rarr;</a>
            </div>

            <div class="p-6 rounded-lg border border-slate-200 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                 <div class="mb-4 h-16 flex items-center justify-center">
                    <div class="lottie-icon h-full w-full" data-path="<?php echo base_url_path('assets/icon/diseno-responsivo.json'); ?>"></div>
                </div>
                <h3 class="text-lg font-medium text-[#fff] mb-2">Rediseño Web</h3>
                <p class="text-gray-400 text-sm">
                    Modernizamos tu página web si está antigua o no funciona, para que atraiga más clientes y se vea profesional.
                </p>
                 <a href="<?php echo base_url_path('contacto.php'); ?>" class="mt-4 inline-block text-[##3140b0] hover:text-[#e2c32b] text-sm font-medium">Ver más &rarr;</a>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-xl text-gray-300 mb-4">¿Listo/a para tener una web que trabaje para ti?</p>
            <a href="<?php echo base_url_path('contacto.php#formulario-contacto'); ?>" class="inline-block bg-blue-600 hover:bg-[#29235c] text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                Agenda una videollamada
            </a>
        </div>
    </div>
    </section>

    <section id="sobre-nosotros-home" class="py-16 lg:py-24 bg-gradient-to-r from-[#000000] via-[#020614] to-[#29235c]"> <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
        <div>
                 <h2 class="text-base text-[#e2c32b] font-semibold tracking-wide uppercase">Sobre SRweb</h2>
                 <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl">
                    Más de 10 años creando páginas web efectivas
                 </p>
                 <p class="mt-4 text-lg text-gray-400">
                    En SRweb llevamos más de 10 años creando páginas web efectivas para negocios y profesionales en todo Chile. Hemos potenciado cientos de empresas de servicios con nuestros servicios de construcción de Páginas Web Profesionales y Campañas de Google Ads.
                 </p>
                  <div class="mt-6">
                     <a href="<?php echo base_url_path('nosotros.php'); ?>" class="text-purple-400 hover:text-purple-300 font-medium">Conoce más sobre nosotros &rarr;</a>
                 </div>
            </div>
            <div class="mt-10 lg:mt-0">
                <img src="<?php echo base_url_path('assets/img/pagina-web-corporativa-header.jpg'); ?>" alt="Reseñas de Clientes de SRweb en Google" class="rounded-lg shadow-xl mx-auto">
                 <p class="mt-4 text-center text-sm text-gray-500">Nuestros clientes hablan por nosotros.</p>
            </div>
        </div>
    </div>
    </section>
<?php
// Incluir Pie de Página
include 'includes/footer.php';
?>