

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  
document.addEventListener("DOMContentLoaded", function () {
  const leftPopper = document.getElementById("heroPopperLeft");
  const rightPopper = document.getElementById("heroPopperRight");

  if (!leftPopper || !rightPopper) return;

  function triggerPopper(popper) {
    popper.style.animation = "none";
    void popper.offsetWidth; // force reflow
    popper.style.animation = "popperFade 3.5s ease-out forwards";
  }

  function triggerBoth() {
    triggerPopper(leftPopper);
    triggerPopper(rightPopper);
  }

  // Initial crack
  triggerBoth();

  // Repeat every 5 seconds
  setInterval(triggerBoth, 5000);
});

 
window.addEventListener("load", function () {

  const modal = document.getElementById("modal");
  const closeBtn = document.getElementById("closeModal");

  if (!modal || !closeBtn) return;

  function openModal() {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  }

  /* open modal after 5 seconds */
  setTimeout(openModal, 5000);

  /* close button */
  closeBtn.addEventListener("click", closeModal);

  /* click outside modal */
  modal.addEventListener("click", function (e) {
    if (e.target === modal) closeModal();
  });

  /* ESC key close */
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modal.classList.contains("active")) {
      closeModal();
    }
  });

});


(function () {
    const track    = document.getElementById('reviewsTrack');
    const prevBtn  = document.getElementById('reviewsPrev');
    const nextBtn  = document.getElementById('reviewsNext');
    const dotsWrap = document.getElementById('reviewsDots');

    if (!track) return;

    const cards         = track.querySelectorAll('.review-card');
    let currentIndex    = 0;
    let autoSlideTimer  = null;

    // Determine how many cards are visible based on screen width
    function visibleCount() {
        if (window.innerWidth < 576)  return 1;
        if (window.innerWidth < 992)  return 2;
        return 3;
    }

    function totalSlides() {
        return Math.ceil(cards.length / visibleCount());
    }

    // Build dots
    function buildDots() {
        dotsWrap.innerHTML = '';
        for (let i = 0; i < totalSlides(); i++) {
            const dot = document.createElement('button');
            dot.classList.add('carousel-dot');
            if (i === 0) dot.classList.add('active');
            dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            dot.addEventListener('click', () => goTo(i));
            dotsWrap.appendChild(dot);
        }
    }

    function updateDots() {
        dotsWrap.querySelectorAll('.carousel-dot').forEach((d, i) => {
            d.classList.toggle('active', i === currentIndex);
        });
    }

    function goTo(index) {
        const visible   = visibleCount();
        const maxIndex  = totalSlides() - 1;
        currentIndex    = Math.max(0, Math.min(index, maxIndex));

        // Calculate card width including gap
        const cardWidth = cards[0].offsetWidth + 24; // 24 = gap
        track.style.transform = `translateX(-${currentIndex * visible * cardWidth}px)`;

        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === maxIndex;
        updateDots();
    }

    prevBtn.addEventListener('click', () => { resetAuto(); goTo(currentIndex - 1); });
    nextBtn.addEventListener('click', () => { resetAuto(); goTo(currentIndex + 1); });

    // Auto-slide every 4 seconds
    function startAuto() {
        autoSlideTimer = setInterval(() => {
            const next = currentIndex + 1 >= totalSlides() ? 0 : currentIndex + 1;
            goTo(next);
        }, 4000);
    }

    function resetAuto() {
        clearInterval(autoSlideTimer);
        startAuto();
    }

    // Rebuild on resize
    window.addEventListener('resize', () => {
        buildDots();
        goTo(0);
    });

    // Init
    buildDots();
    goTo(0);
    startAuto();
})();

document.getElementById("locationMapBtn").addEventListener("click", () => {
  window.open("https://maps.google.com/?q=Arimala Hospital", "_blank");
});


})();