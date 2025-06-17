<?php

// Página activa para menú
if (!isset($currentPage)) {
    $currentPage = 'inicio';
}

// *** IMPORTANTE: AJUSTA ESTA LÍNEA SEGÚN TU ENTORNO ***
// Para servidor en vivo (ej. https://srweb.cl/):
define('BASE_URL', '/');
// Para MAMP local (ej. http://localhost:8888/srweb-proyecto/):
// define('BASE_URL', '/srweb-proyecto/');

// Función auxiliar para construir URLs base seguras
function base_url_path($path = '') {
    // Elimina la barra inicial de $path si existe, y asegura una barra al final de BASE_URL
    $base = rtrim(BASE_URL, '/') . '/';
    $path = ltrim($path, '/');
    return htmlspecialchars($base . $path); // Aplica htmlspecialchars aquí
}

// Define los items del menú, igual que antes
$menuItems = [
    'inicio' => ['url' => 'index.php', 'text' => 'Inicio'],
    'nosotros' => ['url' => 'nosotros.php', 'text' => 'Nosotros'],
    'paginas-web' => ['url' => 'paginas-web.php', 'text' => 'Páginas Web'],
    'google-ads' => ['url' => 'google-ads.php', 'text' => 'Google Ads'],
    //'blog' => ['url' => 'blog.php', 'text' => 'Blog'],
    'contacto' => ['url' => 'contacto.php', 'text' => 'Contacto']
];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'SRweb - Agencia de Diseño Web Profesional en Chile'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Diseñamos páginas web profesionales en Chile enfocadas en atraer clientes y aumentar ventas. Expertos en SEO y Google Ads.'; ?>">
    <meta name="keywords" content="diseño web chile, páginas web profesionales, agencia diseño web, google ads, mantención web, rediseño web, srweb">
    <meta name="author" content="SRweb">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.srweb.cl/"> <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'SRweb - Agencia de Diseño Web Profesional en Chile'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Diseñamos páginas web profesionales en Chile enfocadas en atraer clientes y aumentar ventas.'; ?>">
    <meta property="og:image" content="<?php echo base_url_path('assets/img/srweb_og_image.jpg'); // Crear esta imagen ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.srweb.cl/"> <meta property="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'SRweb - Agencia de Diseño Web Profesional en Chile'; ?>">
    <meta property="twitter:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Diseñamos páginas web profesionales en Chile enfocadas en atraer clientes y aumentar ventas.'; ?>">
    <meta property="twitter:image" content="<?php echo base_url_path('assets/img/srweb_og_image.jpg'); // Crear esta imagen ?>">

    <link href="<?php echo base_url_path('assets/css/tailwind.min.css'); ?>" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>

    <script>
        // Script básico para toggle del menú móvil (si no usas el JS de Flowbite completo)
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
            const menu = document.getElementById('navbar-sticky');

            if (button && menu) {
                button.addEventListener('click', function () {
                    const isExpanded = button.getAttribute('aria-expanded') === 'true';
                    button.setAttribute('aria-expanded', !isExpanded);
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>


    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "SRweb",
      "image": "<?php echo base_url_path('assets/img/logo.webp'); ?>",
      "@id": "https://www.srweb.cl/",
      "url": "https://www.srweb.cl/",
      "telephone": "+56953810178",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Avenida Costanera del Rio 211", // Asegúrate que sea la dirección correcta
        "addressLocality": "La Serena",
        "addressRegion": "Coquimbo",
        "postalCode": "1700000", // Asegúrate que sea el código correcto
        "addressCountry": "CL"
      },
      "description": "Agencia de diseño de páginas web profesionales en Chile, enfocada en resultados y captación de clientes.",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/srweb.cl",
        "https://www.instagram.com/srweb.cl",
        "https://www.linkedin.com/company/srwebcl"
      ]
    }
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld2BJoqAAAAAJFh2LxzyLjNbs1Z7pmSSYLm5jiw"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WWG0N3RBJT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WWG0N3RBJT');
</script>
<body class="bg-gray-900 text-gray-100 font-sans antialiased"> <div id="page-container" class="relative min-h-screen overflow-x-hidden">

        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="<?php echo base_url_path('index.php'); ?>" class="flex items-center space-x-3 rtl:space-x-reverse" title="Ir al Inicio - SRweb">
                    <img src="<?php echo base_url_path('assets/img/logo.webp'); ?>" class="h-8" alt="Logo SRweb">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="<?php echo base_url_path('contacto.php'); ?>" class="text-white bg-[#1e44da] hover:bg-[#1e89da] focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                        Cotizar Servicio
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-|tween hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <?php
                        foreach ($menuItems as $key => $item) {
                            $isActive = ($currentPage === $key);
                            // Adapta las clases de activo y hover al esquema de Flowbite y tus colores SRweb si es necesario
                            // Las clases por defecto de Flowbite usan text-blue-700 para activo, adaptamos a purple-700
                            $activeClass = $isActive ? 'text-purple-700 dark:text-purple-500' : 'text-gray-900 hover:text-purple-700 dark:text-white dark:hover:text-purple-500';
                             $hoverBgClass = $isActive ? '' : 'hover:bg-gray-100 dark:hover:bg-gray-700'; // Para el menú móvil

                            echo '<li>';
                            echo "<a href='" . base_url_path($item['url']) . "' class='block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {$activeClass} {$hoverBgClass}' aria-current='" . ($isActive ? 'page' : 'false') . "'>" . htmlspecialchars($item['text']) . "</a>";
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main id="main-content" class="pt-16">