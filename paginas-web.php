<?php

// --- Configuración de la Página ---
$currentPage = 'paginas-web';
$pageTitle = 'Diseño de Páginas Web Profesionales en Chile | SRweb';
$pageDescription = 'Servicio de diseño de páginas web profesionales y optimizadas para SEO en Chile. Creamos sitios web autoadministrables enfocados en atraer clientes.'; 

// Incluir Cabecera (Asegúrate de usar la versión corregida de header.php)
include 'includes/header.php'; 

// Requerir función auxiliar (si no se incluyó globalmente en header.php)
if (!function_exists('base_url_path')) {
   function base_url_path($path = '') {
       $base = rtrim(BASE_URL, '/') . '/';
       $path = ltrim($path, '/');
       return htmlspecialchars($base . $path); 
   }
}
?>

<section id="hero-paginas-web" class="relative overflow-hidden text-white pt-24 pb-16 md:pt-32 md:pb-24">
    <div id="particles-js-hero" class="absolute inset-0 -z-10 h-full w-full items-center [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)]"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
         <span class="inline-block bg-yellow-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full uppercase mb-3">
         🌟¡Contrata Ahora y Obtén tu Primera Campaña Google Ads GRATIS!🌟
         </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 opacity-0 hero-element">
            Diseño de <span class="text-blue-400">Páginas Web</span> Profesionales
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 opacity-0 hero-element">
            Creamos tu sitio web profesional: una herramienta 100% funcional y optimizada para atraer clientes y potenciar tu negocio online. Diseñada para posicionar en Google y convertir visitas.
        </p>
        <div class="opacity-0 hero-element">
            <a href="<?php echo base_url_path('contacto.php'); ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                Cotizar mi Página Web
            </a>
        </div>
    </div>
</section>
<section id="caracteristicas-web" class="py-16 lg:py-24 bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Nuestro Servicio de Diseño Web Incluye:</h2>
            <p class="mt-4 text-xl text-gray-400">Todo lo necesario para una presencia online profesional y efectiva.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h.5A2.5 2.5 0 0018.5 5.5V3.935m-8 0A9 9 0 1018.5 11" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Dominio .CL Propio (1 año)</h3>
                <p class="text-gray-400 text-sm">Tu dirección web única y profesional (ej. www.tuempresa.cl).</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Hosting Optimizado (1 año)</h3>
                <p class="text-gray-400 text-sm">Alojamiento web rápido y seguro para el óptimo rendimiento de tu sitio.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Diseño Profesional y Personalizado</h3>
                <p class="text-gray-400 text-sm">Estética atractiva y moderna, adaptable a móviles, tablets y computadores.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Sitio Web Autoadministrable</h3>
                <p class="text-gray-400 text-sm">Plataforma intuitiva (ej. WordPress) para que actualices tu contenido fácilmente.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Formulario de Contacto Estratégico</h3>
                <p class="text-gray-400 text-sm">Fácil de usar para recibir consultas, con protección anti-spam (Google Captcha).</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Certificado de Seguridad SSL</h3>
                <p class="text-gray-400 text-sm">Conexión segura (HTTPS) esencial para confianza y posicionamiento Google.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> </div> 
                <h3 class="text-lg font-medium text-white mb-2">Optimización SEO Inicial</h3>
                <p class="text-gray-400 text-sm">Configuraciones técnicas base para ayudar a Google a indexar y mejorar tu visibilidad.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.79 4 4s-1.79 4-4 4c-1.742 0-3.223-.835-3.772-2M12 12H4m4 8H4m16-4a8 8 0 01-14.472 5.345" /></svg> </div> 
                <h3 class="text-lg font-medium text-white mb-2">Integración Social y WhatsApp</h3>
                <p class="text-gray-400 text-sm">Conectamos tu web con redes sociales e incluimos botón de WhatsApp.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg> </div> 
                <h3 class="text-lg font-medium text-white mb-2">Google Analytics Configurado</h3>
                <p class="text-gray-400 text-sm">Instalamos Google Analytics 4 para que monitorees el tráfico y entiendas a tus visitantes.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg> </div> 
                <h3 class="text-lg font-medium text-white mb-2">Capacitación Personalizada</h3>
                <p class="text-gray-400 text-sm">Te ofrecemos una sesión práctica para que aprendas a manejar tu nueva web.</p>
            </div>
             <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                 <div class="text-purple-400 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" /></svg> </div> 
                <h3 class="text-lg font-medium text-white mb-2">Soporte Técnico (1 año)</h3>
                <p class="text-gray-400 text-sm">Cuentas con nuestro respaldo para resolver dudas o incidencias menores.</p>
            </div>
        </div>
    </div>
</section>
<section id="inversion-web" class="py-16 lg:py-24 bg-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Inversión en Tu Página Web Profesional</h2>
            <p class="mt-4 text-xl text-gray-400">
                Un valor transparente por una solución completa y lista para generar resultados.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-gray-700 p-8 rounded-lg shadow-xl text-center border border-blue-500 flex flex-col justify-between">
                 <div>
                    <h3 class="text-lg font-semibold text-purple-300 uppercase tracking-wider">Valor Completo</h3>
                    <p class="mt-4 text-5xl font-extrabold text-white">$150.000 <span class="text-xl font-medium text-gray-400">+ IVA</span></p>
                    <p class="text-gray-400 mt-1">(Total: $178.500 IVA incluido)</p>
                    <p class="mt-4 text-gray-300">Incluye todas las características mencionadas anteriormente.</p>
                 </div>
                 <a href="#contacto-paginas-web" class="mt-8 w-full inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out">
                    Comenzar Proyecto
                </a>
            </div>

            <div class="bg-gray-900 p-8 rounded-lg shadow-lg text-center flex flex-col justify-center">
                 <h3 class="text-lg font-semibold text-gray-300 uppercase tracking-wider mb-4">Flexibilidad de Pago</h3>
                 <div class="space-y-4">
                    <div>
                        <p class="text-white font-medium">Opción 1 (Dos Cuotas):</p>
                        <p class="text-gray-400 text-sm">Paga $89.250 IVA incl. al iniciar y $89.250 IVA incl. al finalizar.</p>
                    </div>
                    <div class="border-t border-gray-700 my-4"></div>
                     <div>
                        <p class="text-white font-medium">Opción 2 (Pago Único con Descuento):</p>
                        <p class="text-gray-400 text-sm">Aprovecha un valor especial pagando $154.700 IVA incluido al comenzar ($130.000 + IVA).</p>
                    </div>
                 </div>
                  <p class="mt-6 text-xs text-gray-500">*Valores referenciales, sujetos a confirmación.</p>
            </div>
        </div>
         <div class="text-center mt-10">
             <span class="inline-block bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-full">
                ¡Recuerda la promo! Tu primera campaña de Google Ads GRATIS al contratar tu web.
             </span>
         </div>
    </div>
</section>
<section id="proceso-web" class="py-16 lg:py-24 bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
             <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Nuestro Proceso en 4 Pasos Claros</h2>
             <p class="mt-4 text-xl text-gray-400">Simple, transparente y enfocado en tus objetivos.</p>
        </div>

        <div class="relative max-w-3xl mx-auto">
            <div class="hidden md:block absolute top-8 bottom-8 left-1/2 w-px bg-gray-700 -ml-px z-0"></div> 

            <div class="relative md:flex md:items-start md:mb-12">
                <div class="hidden md:block absolute top-1/2 -translate-y-1/2 left-1/2 w-1/2 border-t border-gray-700 -ml-px z-0"></div>
                <div class="md:w-1/2 md:pr-8 text-center md:text-right mb-4 md:mb-0 relative z-10">
                    <div class="inline-block bg-purple-500 text-white rounded-full w-12 h-12 items-center justify-center text-xl font-bold mb-2 mx-auto md:mr-0 md:ml-auto">1</div>
                    <h3 class="text-xl font-semibold text-white">Conversación y Planificación</h3>
                    <p class="text-gray-400">Nos reunimos para entender tus metas, definir la estructura y el estilo visual inicial de tu sitio.</p>
                </div>
                <div class="hidden md:block md:w-1/2 md:pl-8"></div> 
            </div>

             <div class="relative md:flex md:items-start md:mb-12">
                 <div class="hidden md:block absolute top-1/2 -translate-y-1/2 right-1/2 w-1/2 border-t border-gray-700 -mr-px z-0"></div>
                <div class="hidden md:block md:w-1/2 md:pr-8"></div> 
                 <div class="md:w-1/2 md:pl-8 text-center md:text-left mb-4 md:mb-0 relative z-10">
                    <div class="inline-block bg-purple-500 text-white rounded-full w-12 h-12 items-center justify-center text-xl font-bold mb-2 mx-auto md:ml-0">2</div>
                    <h3 class="text-xl font-semibold text-white">Diseño y Propuesta Visual</h3>
                    <p class="text-gray-400">Te presentamos una maqueta o diseño para que visualices tu futura web y nos des tu feedback.</p>
                </div>
            </div>

             <div class="relative md:flex md:items-start md:mb-12">
                <div class="hidden md:block absolute top-1/2 -translate-y-1/2 left-1/2 w-1/2 border-t border-gray-700 -ml-px z-0"></div>
                <div class="md:w-1/2 md:pr-8 text-center md:text-right mb-4 md:mb-0 relative z-10">
                     <div class="inline-block bg-purple-500 text-white rounded-full w-12 h-12 items-center justify-center text-xl font-bold mb-2 mx-auto md:mr-0 md:ml-auto">3</div>
                    <h3 class="text-xl font-semibold text-white">Construcción y Desarrollo</h3>
                    <p class="text-gray-400">Con tu aprobación del diseño, construimos el sitio web completo y cargamos el contenido inicial.</p>
                </div>
                <div class="hidden md:block md:w-1/2 md:pl-8"></div> 
            </div>

             <div class="relative md:flex md:items-start">
                 <div class="hidden md:block absolute top-1/2 -translate-y-1/2 right-1/2 w-1/2 border-t border-gray-700 -mr-px z-0"></div>
                <div class="hidden md:block md:w-1/2 md:pr-8"></div> 
                <div class="md:w-1/2 md:pl-8 text-center md:text-left mb-4 md:mb-0 relative z-10">
                    <div class="inline-block bg-purple-500 text-white rounded-full w-12 h-12 items-center justify-center text-xl font-bold mb-2 mx-auto md:ml-0">4</div>
                    <h3 class="text-xl font-semibold text-white">Revisión Final y Lanzamiento</h3>
                    <p class="text-gray-400">Revisamos cada detalle (funcionamiento, seguridad, adaptación a móviles) y, con tu visto bueno, ¡lanzamos tu nueva web!.</p>
                </div>
            </div>
        </div> </div>
</section>
<section id="cta-final-web" class="py-16 lg:py-24 bg-purple-900 text-center">
     <div class="container mx-auto px-4 sm:px-6 lg:px-8">
         <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Una Solución Web Completa y de Alta Calidad</h2>
         <p class="mt-4 text-xl text-purple-200 max-w-2xl mx-auto">
            Lista para fortalecer tu presencia digital de manera profesional y efectiva.
         </p>
         <div class="mt-8">
            <a href="/contacto.php" class="inline-block bg-white hover:bg-gray-100 text-purple-700 font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                ¿Comenzamos con tu Nueva Web?
            </a>
         </div>
     </div>
</section>
<?php
// Incluir Pie de Página (Asegúrate de usar la versión corregida de footer.php)
include 'includes/footer.php';
?>