<?php $page = 'events'; ?>
<?php include 'includes/head.php'; ?>
<body class="antialiased text-gray-800 min-h-screen flex flex-col">
  <!-- Skip to main content link for accessibility -->
  <a href="#main-content"
    class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black">
    Skip to main content
  </a>

  <?php include 'includes/header.php'; ?>

  <main id="main-content" class="flex-1 relative">

    <!-- Page Hero Banner -->
    <section class="relative pt-32 pb-16 bg-neutral-900 text-white overflow-hidden">
      <div class="absolute inset-0 z-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1515923256482-1c04580b477c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080"
          alt="Events background" class="w-full h-full object-cover"
          onerror="this.onerror=null; this.src='https://placehold.co/1200x400/0c4073/ffffff'">
      </div>
      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Events</h1>
        <p class="text-lg text-neutral-300 max-w-2xl mx-auto">Workshops, seminars, conferences and research events at the IITB-Citadel Securities Quantitative Research Lab.</p>
      </div>
    </section>

    <!-- Recent Event Highlight -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
          <span class="inline-block w-8 h-1 bg-blue-600 rounded"></span>
          <h2 class="text-2xl font-bold text-neutral-900">Recent Event</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

          <!-- Image Carousel -->
          <div class="relative rounded-2xl overflow-hidden shadow-lg bg-neutral-100" style="aspect-ratio:16/9; min-height:200px">
            <div id="symposium-carousel" class="absolute inset-0">
              <img src="assets/images/symposium-2.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100">
              <img src="assets/images/symposium-1.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-3.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-4.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-5.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-6.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-7.jpeg" alt="Research Symposium" class="carousel-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
            </div>
            <!-- Dot indicators -->
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 z-10">
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:1" data-index="0" aria-label="Slide 1"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="1" aria-label="Slide 2"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="2" aria-label="Slide 3"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="3" aria-label="Slide 4"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="4" aria-label="Slide 5"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="5" aria-label="Slide 6"></button>
              <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="6" aria-label="Slide 7"></button>
            </div>
            <!-- Prev / Next -->
            <button id="carousel-prev" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1.5 shadow transition-colors z-10" aria-label="Previous slide">
              <svg class="w-4 h-4 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="carousel-next" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1.5 shadow transition-colors z-10" aria-label="Next slide">
              <svg class="w-4 h-4 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
            <!-- Date badge -->
            <div class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full z-10">April 7, 2026</div>
          </div>

          <!-- Text content -->
          <div>
            <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Symposium</span>
            <h3 class="text-2xl font-bold text-neutral-900 mt-4 mb-4">Research Symposium</h3>
            <p class="text-neutral-600 leading-relaxed mb-6">The lab successfully organized a Research Symposium, an event aimed at advancing quantitative finance through strong industry–academic collaboration. Held on April 7, 2026, at the SOM Auditorium, the symposium featured exciting talks by three IIT Bombay faculty members, Profs. Piyush Pandey, Ankur Kulkarni, and Parthe Pandit, who shared insights on topics such as market microstructure, risk management, and data-driven financial modelling, fostering meaningful dialogue and knowledge exchange in the field.</p>
            <div class="flex flex-wrap gap-4 text-sm text-neutral-500">
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                SOM Auditorium, IIT Bombay
              </div>
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                April 7, 2026
              </div>
            </div>
            <div class="mt-6 pt-6 border-t border-neutral-200">
              <p class="text-sm font-semibold text-neutral-700 mb-3">Featured Speakers</p>
              <div class="flex flex-wrap gap-2">
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Piyush Pandey</span>
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Ankur Kulkarni</span>
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Parthe Pandit</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Upcoming Events -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-neutral-50">
      <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
          <span class="inline-block w-8 h-1 bg-blue-600 rounded"></span>
          <h2 class="text-2xl font-bold text-neutral-900">Upcoming Events</h2>
        </div>
        <div class="text-center py-16 bg-white rounded-2xl border border-neutral-200">
          <svg class="w-12 h-12 text-neutral-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <p class="text-neutral-500 text-lg font-medium">No upcoming events at the moment.</p>
          <p class="text-neutral-400 text-sm mt-1">Check back soon or contact us to stay informed.</p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-blue-600 text-white">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Stay in the Loop</h2>
        <p class="text-blue-100 mb-8">Contact us to receive updates on upcoming events, workshops, and research activities from the IITB-Citadel Securities Quantitative Research Lab.</p>
        <a href="/citadel/contact" class="inline-flex items-center px-8 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-colors duration-300 shadow-md">
          Contact Us
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
      </div>
    </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {

      // --- Symposium image carousel ---
      const slides = document.querySelectorAll('#symposium-carousel .carousel-slide');
      const dots   = document.querySelectorAll('.carousel-dot');
      let current  = 0;
      let autoSlide;

      function goToSlide(n) {
        slides[current].classList.replace('opacity-100', 'opacity-0');
        dots[current].style.opacity = '0.4';
        current = (n + slides.length) % slides.length;
        slides[current].classList.replace('opacity-0', 'opacity-100');
        dots[current].style.opacity = '1';
      }

      function startAuto() { autoSlide = setInterval(() => goToSlide(current + 1), 3500); }
      function resetAuto()  { clearInterval(autoSlide); startAuto(); }

      document.getElementById('carousel-next').addEventListener('click', () => { goToSlide(current + 1); resetAuto(); });
      document.getElementById('carousel-prev').addEventListener('click', () => { goToSlide(current - 1); resetAuto(); });
      dots.forEach(dot => dot.addEventListener('click', () => { goToSlide(+dot.dataset.index); resetAuto(); }));
      startAuto();

    });
  </script>

  <?php include 'includes/footer.php'; ?>
