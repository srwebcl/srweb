// assets/js/main.js (v5 - Con Animación Scroll y Header Dinámico)

document.addEventListener('DOMContentLoaded', function() {

  console.log("DOM cargado. Ejecutando main.js...");

  // --- 1. Animación GSAP para Hero Elements ---
  const heroElements = document.querySelectorAll('.hero-element');
  if (heroElements.length > 0) {
    if (typeof gsap !== 'undefined') {
      console.log("Iniciando animación GSAP para .hero-element");
      gsap.to(".hero-element", {
          opacity: 1,
          y: 0,
          duration: 0.8,
          stagger: 0.2,
          delay: 0.3
      });
    } else {
      console.error("Error: GSAP no está definido.");
      heroElements.forEach(el => {
        el.style.opacity = 1;
        el.style.visibility = 'visible';
      });
    }
  }

  // --- 2. Inicialización de Particles.js ---
  const particleDivHero = document.getElementById('particles-js-hero'); // ID específico del Hero
  if (particleDivHero) {
    if (typeof particlesJS !== 'undefined') {
      const particlesConfigPath = 'assets/js/particles-config.json';
      console.log("Intentando cargar particles.js con config:", particlesConfigPath);
      particlesJS.load('particles-js-hero', particlesConfigPath, function() {
        console.log('Callback: particles-config.json cargado exitosamente.');
        if (window.pJSDom && window.pJSDom.length > 0 && window.pJSDom[0].pJS) {
           // window.pJSDom[0].pJS.fn.vendors.onresize(); // Comentado por si causa problemas
           // console.log("Forzando redimensionamiento inicial de particles.js");
        }
      });
    } else {
      console.error("Error: particlesJS no está definido.");
    }
  }

  // --- 3. Inicialización de Lottie ---
  const lottieIcons = document.querySelectorAll('.lottie-icon');
  if (lottieIcons.length > 0) {
      if (typeof bodymovin !== 'undefined') {
          console.log(`Encontrados ${lottieIcons.length} iconos Lottie. Inicializando...`);
          lottieIcons.forEach(container => {
              const animationPath = container.dataset.path;
              if (animationPath) {
                try {
                  bodymovin.loadAnimation({
                      container: container,
                      renderer: 'svg',
                      loop: true,
                      autoplay: true,
                      path: animationPath
                  });
                } catch (e) {
                  console.error("Error al cargar animación Lottie:", animationPath, e);
                  container.innerHTML = 'Error icono';
                }
              } else {
                  console.warn("Contenedor Lottie no tiene atributo data-path:", container);
              }
          });
      } else {
          console.error("Error: Lottie (bodymovin) no está definido.");
      }
  }

  // --- 4. Código para Menú Móvil ---
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconOpen = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  if (mobileMenuButton && mobileMenu && iconOpen && iconClose) {
    mobileMenuButton.addEventListener('click', function () {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });
    document.addEventListener('click', function(event) {
        const isMenuOpen = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        if (!isMenuOpen) return;
        const isClickInsideNav = mobileMenu.contains(event.target) || mobileMenuButton.contains(event.target);
        if (!isClickInsideNav) {
            mobileMenuButton.click();
        }
    });
  }

  // --- 5. Animación Scroll (Fade-in Básico) ---
  const sectionsToAnimate = document.querySelectorAll('section:not(#hero)'); // Selecciona todas las <section> excepto la #hero

  if ('IntersectionObserver' in window) {
    console.log("IntersectionObserver soportado. Aplicando animación scroll.");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        // Si la sección está intersectando (visible)
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          // Opcional: deja de observar esta sección una vez animada
          // observer.unobserve(entry.target);
        } else {
           // Opcional: quitar la clase si sale de la vista (para re-animar si vuelve a entrar)
           // entry.target.classList.remove('is-visible');
        }
      });
    }, {
      root: null, // Observa intersecciones relativas al viewport
      rootMargin: '0px',
      threshold: 0.1 // Se activa cuando al menos el 10% de la sección es visible
    });

    sectionsToAnimate.forEach(section => {
      section.classList.add('section-fade-in'); // Añade la clase base para opacidad 0 y transición
      observer.observe(section); // Empieza a observar la sección
    });

  } else {
    console.warn("IntersectionObserver no soportado. Las animaciones de scroll no funcionarán.");
    // Fallback para navegadores viejos: simplemente muestra las secciones
    sectionsToAnimate.forEach(section => {
      section.style.opacity = 1;
    });
  }

  console.log("main.js cargado y finalizado.");

}); // Fin del DOMContentLoaded