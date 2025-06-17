<?php

if (!function_exists('base_url_path')) {
   function base_url_path($path = '') {
       // *** IMPORTANTE: ASEGURA QUE BASE_URL ESTÁ DEFINIDO EN header.php ***
       $base = rtrim(BASE_URL, '/') . '/';
       $path = ltrim($path, '/');
       return htmlspecialchars($base . $path);
   }
}

?>

        </main> 
        
        <footer id="main-footer" class="bg-gradient-to-r from-[#000000] via-[#0d0369] to-[#0000b3] text-gray-300 border-t border-gray-700">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div>
                        <img class="h-10 w-auto mb-4" src="<?php echo base_url_path('assets/img/srweb_blanco.webp'); ?>" alt="Logo SRweb Blanco">
                        <p class="text-sm text-gray-400">
                            Agencia de Diseño Web Profesional en Chile. Creamos sitios web enfocados en resultados y captación de clientes.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mb-4">Servicios</h3>
                        <ul class="space-y-2">
                            <li><a href="<?php echo base_url_path('paginas-web.php'); ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Diseño de Páginas Web</a></li>
                            <li><a href="<?php echo base_url_path('google-ads.php'); ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Campañas Google Ads</a></li>
                            <li><a href="<?php echo base_url_path('index.php#servicios'); // Enlace a sección en Index ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Mantención Web</a></li>
                            <li><a href="<?php echo base_url_path('index.php#servicios'); // Enlace a sección en Index ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Rediseño Web</a></li>
                        </ul>
                         <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mt-6 mb-4">Empresa</h3>
                         <ul class="space-y-2">
                            <li><a href="<?php echo base_url_path('nosotros.php'); ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Nosotros</a></li>
                            <li><a href="<?php echo base_url_path('contacto.php'); ?>" class="text-sm text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out">Contacto</a></li>
                            </ul>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mb-4">Contacto</h3>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li>
                                <span class="font-medium text-gray-300">Email:</span>
                                <a href="mailto:contacto@srweb.cl" class="hover:text-purple-400 transition duration-150 ease-in-out break-all"> contacto@srweb.cl</a>
                            </li>
                            <li>
                                <span class="font-medium text-gray-300">WhatsApp:</span>
                                <a href="https://wa.me/56983806054" target="_blank" rel="noopener noreferrer" class="hover:text-purple-400 transition duration-150 ease-in-out"> +56 9 8380 6054</a>
                            </li>
                             <li>
                                <span class="font-medium text-gray-300">Teléfono:</span>
                                <a href="tel:+56953810178" class="hover:text-purple-400 transition duration-150 ease-in-out"> +56 9 5381 0178</a>
                            </li>
                            <li>
                        </ul>
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mt-6 mb-4">Síguenos</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/srweb.cl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out" aria-label="Facebook de SRweb">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/srweb.cl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out" aria-label="Instagram de SRweb">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.28-.059-1.688-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
</svg>
                            </a>
                            <a href="https://www.linkedin.com/company/srwebcl" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-purple-400 transition duration-150 ease-in-out" aria-label="LinkedIn de SRweb">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                     <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                    <p class="text-sm text-gray-400">&copy; <?php echo date('Y'); ?> SRweb. Todos los derechos reservados. Agencia de Diseño Web en Chile.</p>
                </div>
            </div>
        </footer>

    </div> <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

    <script src="<?php echo base_url_path('assets/js/main.js'); ?>" defer></script>

    <a href="https://wa.me/56983806054?text=Hola%2C%20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios."
       target="_blank"
       rel="noreferrer noopener"
       aria-label="Contactar por WhatsApp"
       title="Contactar por WhatsApp"
       class="fixed bottom-5 right-5 z-50 inline-flex items-center justify-center w-14 h-14 rounded-full bg-[#25d366] shadow-lg hover:bg-[#1DAE54] transition-colors duration-200 group">

      <div class="absolute z-10 top-0 left-0 w-full h-full rounded-full bg-[#25d366] opacity-75 animate-ping"></div>

      <div class="relative z-20">
      <svg fill="#FFFFFF" height="28px" width="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 308 308" xml:space="preserve">
            <g id="XMLID_468_">
                <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                    c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                    c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                    c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                    c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                    c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                    c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                    c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                    c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                    C233.168,179.508,230.845,178.393,227.904,176.981z"/>
                <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                    c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                    c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                     M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                    l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                    c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                    C276.546,215.678,222.799,268.994,156.734,268.994z"/>
            </g>
        </svg>
          </div>
    </a>

</body>
</html>