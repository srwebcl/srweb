<?php
// nosotros.php (CORREGIDO v4 - Sin Citas) - Página Sobre Nosotros de SRweb

// --- Configuración de la Página ---
$currentPage = 'nosotros';
$pageTitle = 'Sobre SRweb - Expertos en Diseño Web y Marketing Digital en Chile';
$pageDescription = 'Conoce a SRweb, agencia con más de 10 años ayudando a empresas y profesionales en Chile a crecer online con páginas web estratégicas y Google Ads.'; 

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

<section id="hero-nosotros" class="relative overflow-hidden text-white pt-24 pb-16 md:pt-32 md:pb-24">
    <div id="particles-js-hero" class="absolute inset-0 -z-10 h-full w-full items-center [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)]"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 opacity-0 hero-element">
            <span class="text-purple-400">Más de 10 años</span> Desarrollando Sitios Web
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 opacity-0 hero-element">
           En SRweb nos dedicamos a ayudar a profesionales y empresas de servicios en Chile a conseguir más clientes a través de internet. Sabemos que buscas resultados concretos.
        </p>
    </div>
</section>
<section id="contenido-nosotros" class="py-16 lg:py-24 bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-gray-300">
            <div class="prose prose-lg prose-invert mx-auto"> 
                <p class="lead text-xl text-gray-400">
                    Nuestro enfoque es 100% práctico. Nos especializamos en construir <strong class="text-white">páginas web estratégicas</strong>, planificadas desde el inicio para <strong class="text-white">posicionar bien en Google</strong> y <strong class="text-white">convertir visitas en consultas reales</strong>.
                </p>
                <p>
                    Complementamos esto con <strong class="text-white">campañas de Google Ads eficientes</strong> que potencian tu crecimiento y te conectan con clientes listos para contratar tus servicios.
                </p>
                <figure class="my-8">
                     <img class="w-full rounded-lg shadow-xl" src="<?php echo base_url_path('assets/img/pagina-web-corporativa-header.jpg'); ?>" alt="Equipo de SRweb trabajando en diseño web" >
                     <figcaption class="text-center text-sm text-gray-500 mt-2">El equipo de SRweb enfocado en crear soluciones digitales efectivas.</figcaption>
                 </figure>
                <h2>Nuestro Sello: Profesionalismo y Claridad</h2>
                <p>
                    Nuestro sello es el <strong class="text-white">profesionalismo y el compromiso total</strong> con tus resultados de negocio. Además, nos destacamos por explicarte todo de forma <strong class="text-white">simple y clara</strong>: creemos que es fundamental que entiendas cada paso del proceso y por qué hacemos las cosas.
                </p>
                <blockquote class="border-l-4 border-purple-500 pl-4 italic text-gray-400 my-6">
                    "Queremos ser tu socio tecnológico de confianza, ayudándote a crecer de forma sostenida."
                </blockquote>
                 <h2>¿Por Qué Elegir SRweb?</h2>
                 <ul class="list-disc space-y-2 pl-5">
                    <li><strong class="text-white">Experiencia Comprobada:</strong> Más de 10 años en el mercado chileno.</li>
                    <li><strong class="text-white">Enfoque en Resultados:</strong> Creamos webs que convierten visitantes en clientes.</li>
                    <li><strong class="text-white">Especialistas en Servicios:</strong> Entendemos las necesidades de profesionales y empresas de servicios.</li>
                    <li><strong class="text-white">Optimización SEO y Google Ads:</strong> Maximizamos tu visibilidad online.</li>
                    <li><strong class="text-white">Comunicación Clara:</strong> Te mantenemos informado en cada etapa del proyecto.</li>
                    <li><strong class="text-white">Soporte Confiable:</strong> Estamos aquí para ayudarte incluso después del lanzamiento.</li>
                 </ul>

                 <div class="mt-12 text-center not-prose"> <a href="<?php echo base_url_path('contacto.php'); ?>" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                        Inicia tu Proyecto con Nosotros
                    </a>
                 </div>

            </div> </div>
    </div>
</section>
<?php
// Incluir Pie de Página (Asegúrate de usar la versión corregida de footer.php)
include 'includes/footer.php';
?>