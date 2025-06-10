<?php
/**
 * Define el contenido específico para la página (o sección) del Blog.
 * NOTA: Este archivo actualmente usa 'template.php', que está diseñado para servicios.
 * Podrías necesitar crear un 'template_blog.php' o una estructura diferente
 * si quieres un diseño de blog más tradicional (listado de artículos, etc.).
 * Por ahora, se adapta al template existente.
 */

// --- Definición de Contenido para Template ---

// Sección Hero
$page_title = 'Recursos y Tendencias del Marketing Digital';
$page_lead = 'Descubre guías, consejos y noticias para mantenerte al día en el dinámico entorno digital.';

// Sección Contenido Principal
$content_title = 'Mantente Informado con Nuestro Blog';
$content_text = 'Aquí compartiremos artículos y recursos para ayudarte a optimizar tus estrategias digitales, entender las últimas tendencias y sacar el máximo provecho a tu presencia online. <br><br><i>(Actualmente esta sección está en desarrollo. ¡Vuelve pronto!)</i>'; // Mensaje temporal
// Imagen o Lottie para la sección de contenido
$content_image = '<div class="lottie-icon" data-lottie-url="assets/icon/blog-anim.json" style="width: 100%; max-width:350px; height: auto; margin: auto;"></div>'; // Reemplaza con tu animación Lottie real

// Las secciones de Beneficios, Oferta y CTA Final podrían no aplicar para un blog.
// Puedes comentarlas o simplemente no definir las variables correspondientes.
// $benefits = [];
// $offer_title = '';
// $cta_final_title = '';

// --- Inclusión del Template ---
// Si creas un template específico para el blog, cambia esta línea:
include 'template.php';
?>