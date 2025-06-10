<?php
// google-ads.php (CORREGIDO v3 - Sin Citas) - Servicio: Campañas de Google Ads

// --- Configuración de la Página ---
$currentPage = 'google-ads';
$pageTitle = 'Campañas de Google Ads para Servicios en Chile | SRweb';
$pageDescription = 'Atrae clientes calificados con nuestras campañas de búsqueda en Google Ads. Gestión experta para negocios de servicios en Chile.'; 

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

<section id="hero-google-ads" class="relative overflow-hidden text-white pt-24 pb-16 md:pt-32 md:pb-24">
    <div id="particles-js-hero" class="absolute inset-0 -z-10 h-full w-full items-center [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#1a73e8_100%)]"></div> 

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
         <span class="inline-block bg-yellow-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full uppercase mb-3">
            ¡Contrata Ahora y te Regalamos una Landing Page Optimizada!
         </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 opacity-0 hero-element">
            Campañas de Búsqueda en <span class="text-blue-400">Google Ads</span>
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 opacity-0 hero-element">
           Atrae Clientes Calificados Justo Cuando Buscan Tus Servicios. Conectamos tu negocio con personas que tienen la intención real de contratar ahora.
        </p>
        <div class="opacity-0 hero-element">
            <a href="#contacto-google-ads" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
                Impulsar mi Negocio con Ads
            </a>
        </div>
    </div>
</section>
<section id="beneficios-ads" class="py-16 lg:py-24 bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">¿Por Qué Google Ads Para Tu Servicio?</h2>
            <p class="mt-4 text-xl text-gray-400 max-w-3xl mx-auto">La forma más directa y medible de conseguir clientes realmente interesados.</p>
        </div>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                 <div class="inline-block text-blue-400 mb-4"> <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0c-1.11 0-2.08-.402-2.599-1M15 8a3 3 0 10-6 0M12 14a3 3 0 00-3-3H5m14 0h-4" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Clientes con Intención Real</h3>
                <p class="text-gray-400 text-sm">Llega a usuarios que están buscando activamente una solución como la tuya en este preciso momento.</p>
            </div>
             <div class="text-center p-6">
                <div class="inline-block text-blue-400 mb-4"> <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Visibilidad y Consultas Inmediatas</h3>
                <p class="text-gray-400 text-sm">Aparece en los primeros resultados de Google y empieza a recibir consultas calificadas rápidamente.</p>
            </div>
             <div class="text-center p-6">
                 <div class="inline-block text-blue-400 mb-4"> <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg> </div>
                <h3 class="text-lg font-medium text-white mb-2">Resultados Medibles y ROI Claro</h3>
                <p class="text-gray-400 text-sm">Mide exactamente el retorno de tu inversión y optimiza tu presupuesto para máxima eficiencia.</p>
            </div>
        </div>
    </div>
</section>
<section id="servicio-ads" class="py-16 lg:py-24 bg-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
             <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Nuestra Gestión Experta de Google Ads Incluye:</h2>
             <p class="mt-4 text-xl text-gray-400">Un servicio completo para maximizar tus resultados.</p>
        </div>
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="flex items-start space-x-4">
                 <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">1</div>
                <div>
                    <h3 class="text-lg font-medium text-white">Análisis y Estrategia Inicial</h3>
                    <p class="text-gray-400">Estudiamos tu negocio, competencia y definimos la mejor estrategia con palabras clave y anuncios efectivos.</p>
                </div>
            </div>
             <div class="flex items-start space-x-4">
                 <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">2</div>
                <div>
                    <h3 class="text-lg font-medium text-white">Creación y Configuración Profesional</h3>
                    <p class="text-gray-400">Diseñamos y configuramos tus campañas de búsqueda desde cero, aplicando las mejores prácticas.</p>
                </div>
            </div>
             <div class="flex items-start space-x-4">
                 <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">3</div>
                <div>
                    <h3 class="text-lg font-medium text-white">Optimización Continua y Permanente</h3>
                    <p class="text-gray-400">Ajustamos constantemente palabras clave, anuncios y configuraciones para mejorar el rendimiento y aprovechar tu presupuesto.</p>
                </div>
            </div>
             <div class="flex items-start space-x-4">
                 <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">4</div>
                <div>
                    <h3 class="text-lg font-medium text-white">Reportes Claros y Seguimiento</h3>
                    <p class="text-gray-400">Te enviamos informes fáciles de entender para que veas cómo van tus campañas y cuántas consultas generan.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                 <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">5</div>
                <div>
                    <h3 class="text-lg font-medium text-white">Asesoría Estratégica Constante</h3>
                    <p class="text-gray-400">Te acompañamos con recomendaciones y respondemos tus dudas para maximizar el potencial de tus anuncios.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="inversion-ads" class="py-16 lg:py-24 bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
         <div class="max-w-3xl mx-auto text-center">
             <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Paquete Lanzamiento Google Ads</h2>
             <p class="mt-4 text-xl text-gray-400">Resultados Visibles Desde el Primer Mes. Un plan mensual claro y completo.</p>
        </div>

         <div class="mt-12 max-w-md mx-auto bg-gray-800 rounded-lg shadow-xl overflow-hidden border border-blue-500">
             <div class="p-8">
                 <h3 class="text-lg font-semibold text-blue-300 uppercase tracking-wider text-center">Inversión Mensual Todo Incluido</h3>
                 <div class="mt-4 flex items-baseline justify-center">
                     <span class="text-5xl font-extrabold text-white">$129.990</span>
                     <span class="ml-1 text-xl font-medium text-gray-400">+ IVA</span>
                 </div>
                 <p class="text-gray-400 text-center mt-1">(Total: $154.688 IVA incluido)</p>

                 <div class="mt-6 text-sm text-gray-300">
                     <p class="font-medium text-white mb-2">¿Qué cubre esta inversión mensual?</p>
                     <ul class="list-disc space-y-2 pl-5 text-gray-400">
                        <li><strong class="text-white">Nuestra Gestión Experta Completa:</strong> Análisis, creación, optimización continua, seguimiento y reportes.</li>
                        <li><strong class="text-white">Tu Inversión Base en Anuncios:</strong> Cubre la inversión inicial recomendada en Google Ads (aprox. $2.000 CLP diarios) para asegurar visibilidad.</li>
                     </ul>
                 </div>

                <div class="mt-8">
                     <a href="/contacto.php" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out">
                        Contratar Gestión Ads
                    </a>
                </div>
             </div>
             <div class="px-8 py-4 bg-gray-700 text-center">
                 <p class="text-sm font-medium text-white">¿Quieres acelerar el crecimiento?</p>
                 <p class="text-xs text-gray-400 mt-1">Si decides aumentar tu inversión directa en anuncios, ajustamos el plan. ¡Tú tienes el control!</p>
             </div>
         </div>
          <div class="text-center mt-10">
             <span class="inline-block bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-full">
                ¡Promo! Contrata Ads y llévate una Landing Page GRATIS.
             </span>
         </div>
    </div>
</section>
<?php
// Incluir Pie de Página (Asegúrate de usar la versión corregida de footer.php)
include 'includes/footer.php';
?>