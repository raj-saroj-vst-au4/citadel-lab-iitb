<?php $page = 'home'; ?>
<?php include 'includes/head.php'; ?>
<body class="antialiased text-gray-800 min-h-screen flex flex-col">
  <!-- Skip to main content link for accessibility -->
  <a href="#main-content"
    class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black">
    Skip to main content
  </a>

  <?php include 'includes/header.php'; ?>

  <main id="main-content" class="flex-1 relative">

    <div id="a0d3e4d2-46ad-4ecf-bef5-c5fad9bd9ffe" data-section_id="a0d3e4d2-46ad-4ecf-bef5-c5fad9bd9ffe"
      data-type="content" data-order="1" class=" sectionCode">

      <div id="root">
        <section id="hero" class="relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
          <!-- Background Image -->
          <div class="absolute inset-0 z-0">
            <img
              src="https://images.unsplash.com/photo-1515923256482-1c04580b477c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MXx8bW9kZXJuJTI1MjBmaW5hbmNpYWwlMjUyMHJlc2VhcmNoJTI1MjBsYWJvcmF0b3J5JTI1MjBJSVQlMjUyMEJvbWJheSUyNTIwQ2l0YWRlbCUyNTIwU2VjdXJpdGllcyUyNTIwcHJvZmVzc2lvbmFsJTI1MjBhcmNoaXRlY3R1cmUlMjUyMHBob3RvZ3JhcGh5JTI1MjBkcmFtYXRpYyUyNTIwbGlnaHRpbmclMjUyMHNwYWNpb3VzJTI1MjBpbnRlcmlvciUyNTIwd2l0aCUyNTIwdGVjaG5vbG9neSUyNTIwZm9jdXMlMjUyMGJsdWUlMjUyMHRvbmVzJTI1MjBuZWdhdGl2ZSUyNTIwc3BhY2UlMjUyMGZvciUyNTIwdGV4dCUyNTIwb3ZlcmxheXxlbnwwfDB8fGJsdWV8MTc0NDg4OTk0NXww&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080?q=80"
              alt="Modern blue building architecture representing innovation and research"
              onerror="this.onerror=null; this.src='https://placehold.co/1200x800/0c4073/ffffff?text=IITB-Citadel+Securities'"
              class="w-full h-full object-cover opacity-20">
          </div>

          <!-- Animated elements - Floating particles -->
          <div id="particles-js" class="absolute inset-0 z-0">
          </div>

          <!-- Content Container -->
          <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
              <!-- Animated Logo (text-based) -->
              <div class="inline-block mb-6 relative">
                <h1
                  class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-800 mb-4 relative overflow-hidden opacity-0"
                  id="hero-title" style="opacity: 1; transition: opacity 1s ease-out;">
                  <span class="inline-block">IITB-Citadel Securities</span>
                  <br>
                  <span class="inline-block text-3xl md:text-4xl lg:text-5xl text-blue-700">Quantitative Research
                    Lab</span>
                </h1>
              </div>

              <p class="text-lg md:text-xl text-neutral-600 mb-8 max-w-3xl opacity-0" id="hero-subtitle"
                style="opacity: 1; transition: opacity 0.8s ease-out;">
                A transformative collaboration to advance research and innovation in India's banking and financial
                markets.
              </p>

              <div class="flex flex-col sm:flex-row gap-4 items-center justify-center opacity-0" id="hero-cta"
                style="opacity: 1; transition: opacity 0.8s ease-out;">
                <a href="/citadel/#about"
                  class="px-8 py-3 bg-blue-600 text-white font-medium rounded-md shadow-sm hover:bg-blue-700 transition-colors duration-300">
                  Learn More
                </a>
                <a href="/citadel/research"
                  class="px-8 py-3 border border-neutral-300 text-neutral-700 font-medium rounded-md hover:bg-neutral-100 transition-colors duration-300">
                  Research Areas
                </a>
              </div>
            </div>
          </div>
        </section>

        <script>
          // Animation sequence for hero elements
          document.addEventListener('DOMContentLoaded', function () {
            // Animate title with fade and slide
            setTimeout(() => {
              const heroTitle = document.getElementById('hero-title');
              heroTitle.style.opacity = '1';
              heroTitle.style.transition = 'opacity 1s ease-out';
            }, 300);

            // Animate subtitle with fade
            setTimeout(() => {
              const heroSubtitle = document.getElementById('hero-subtitle');
              heroSubtitle.style.opacity = '1';
              heroSubtitle.style.transition = 'opacity 0.8s ease-out';
            }, 700);

            // Animate CTA buttons with fade
            setTimeout(() => {
              const heroCta = document.getElementById('hero-cta');
              heroCta.style.opacity = '1';
              heroCta.style.transition = 'opacity 0.8s ease-out';
            }, 900);
          });

          // Particle animation
          document.addEventListener('DOMContentLoaded', function () {
            const particlesContainer = document.getElementById('particles-js');

            function createParticle() {
              const particle = document.createElement('div');

              // Random particle styling
              particle.style.position = 'absolute';
              particle.style.width = Math.random() * 5 + 'px';
              particle.style.height = particle.style.width;
              particle.style.background = `rgba(59, 130, 246, ${Math.random() * 0.4})`;
              particle.style.borderRadius = '50%';

              // Random starting position
              particle.style.left = Math.random() * 100 + '%';
              particle.style.top = Math.random() * 100 + '%';

              // Animation properties
              particle.style.transition = `transform ${Math.random() * 10 + 5}s linear, opacity ${Math.random() * 5 + 2}s ease-in-out`;
              particle.style.opacity = Math.random() * 0.7;

              particlesContainer.appendChild(particle);

              // Start floating animation
              setTimeout(() => {
                particle.style.transform = `translate(${(Math.random() - 0.5) * 100}px, ${(Math.random() - 0.5) * 100}px)`;
              }, 10);

              // Remove particles after animation
              setTimeout(() => {
                particle.remove();
              }, 10000);
            }

            // Create particles at interval
            setInterval(createParticle, 300);

            // Initial batch of particles
            for (let i = 0; i < 15; i++) {
              createParticle();
            }
          });
        </script>
      </div>

    </div>

    <div id="a1b4015a-979e-4a72-8dbd-33cf8bbd737e" data-section_id="a1b4015a-979e-4a72-8dbd-33cf8bbd737e"
      data-type="content" data-order="2" class=" sectionCode">

      <div id="root">
        <section id="about" class="py-20 bg-white">
          <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
              <h2 class="text-3xl md:text-4xl font-bold mb-4 text-neutral-800">About</h2>
              <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
              <!-- Image Column -->
              <div class="relative overflow-hidden rounded-lg">
                <div class="slide-container">
                  <div class="relative h-96 lg:h-full overflow-hidden rounded-lg transform transition-transform hover:scale-[1.02] duration-500 border border-neutral-200">
                      <img src="assets/images/iitbcitadel.png"
                      alt="Business professionals collaborating in a corporate environment"
                      onerror="this.onerror=null; this.src='https://placehold.co/800x600/f3f3f3/333333?text=Collaboration'"
                      class="w-full h-full object-cover smooth-slide">
                  </div>
              </div>

                <!-- Floating card with stats -->
                <div
                  class="absolute -bottom-6 -left-6 md:bottom-6 md:left-6 bg-white p-4 rounded-lg shadow-lg animate-card w-56 opacity-100"
                  style="transition: opacity 1s ease-out, transform 1s ease-out; transform: translateY(0px);">
                  <div class="flex items-center mb-2">
                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                    <span class="text-neutral-800 font-medium">Partnership Highlights</span>
                  </div>
                  <ul class="text-sm text-neutral-600">
                    <li class="flex items-center mb-1">
                      <svg class="w-4 h-4 mr-1 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"></path>
                      </svg>
                      CSR Grant
                    </li>
                    <li class="flex items-center mb-1">
                      <svg class="w-4 h-4 mr-1 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"></path>
                      </svg>
                      State-of-the-art Lab
                    </li>
                    <li class="flex items-center">
                      <svg class="w-4 h-4 mr-1 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"></path>
                      </svg>
                      Activities of the Lab
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Content Column -->
              <div class="text-neutral-700">
                <h3 class="text-2xl font-semibold mb-6 text-blue-800">Transformative Collaboration</h3>

                <div class="space-y-6">
                  <div class="transform transition-all duration-700 translate-y-4 opacity-0" id="about-text-1">
                    <p class="mb-4">
                      In a significant stride towards advancing research and innovation in financial markets, IIT Bombay
                      and Citadel Securities India Private Limited have entered into a transformative collaboration.
                      This partnership, bolstered by Citadel's generous CSR grant, will establish the 'IIT
                      Bombay-Citadel Securities Quantitative Research Lab.'
                    </p>
                    <p>
                      This state-of-the-art laboratory is poised to redefine the landscape of research in financial
                      markets and algorithmic trading, and will be part of the School of Management, IIT Bombay.
                    </p>
                  </div>

                  <div class="transform transition-all duration-700 translate-y-4 opacity-0" id="about-text-2">
                    <h4 class="text-xl font-medium mb-3 text-neutral-800">India's Financial Ecosystem</h4>
                    <p>
                      India's financial ecosystem is one of the world's largest and most diverse. Despite recent
                      challenges, our financial markets continue to flourish, mutual funds are on an upward trajectory,
                      and the insurance sector is exhibiting remarkable growth.
                    </p>
                    <div class="mt-4 px-4 py-3 bg-blue-50 border-l-4 border-blue-500 rounded">
                      <p class="italic text-neutral-700">
                        "In an era marked by rapid economic expansion, the need for research excellence in financial
                        markets has never been more pressing. This collaboration epitomizes our commitment to harnessing
                        the power of research and innovation to shape India's financial landscape."
                      </p>
                      <p class="text-sm mt-2 font-medium">— Director, IIT Bombay</p>
                    </div>
                  </div>

                  <div class="transform transition-all duration-700 translate-y-4 opacity-0" id="about-text-3">
                    <div class="flex items-center mb-4">
                      <button id="show-more-btn"
                        class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Learn More
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div id="about-modal"
              class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden"
              aria-modal="true" aria-hidden="true" role="dialog">
              <div
                class="bg-white rounded-lg max-w-3xl w-full max-h-[90vh] overflow-y-auto mx-4 transform transition-all duration-300 scale-95 opacity-0"
                id="modal-content">
                <div class="p-6 border-b border-neutral-200 flex justify-between items-center">
                  <h3 class="text-2xl font-bold text-neutral-800">About the Collaboration</h3>
                  <button id="close-modal-btn" class="text-neutral-500 hover:text-neutral-800 focus:outline-none"
                    aria-label="Close modal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                    </svg>
                  </button>
                </div>
                <div class="p-6">
                  <p class="mb-4">
                    The 'IIT Bombay-Citadel Securities Quantitative Research Lab' will serve as a hub for pioneering
                    research covering all areas of quantitative finance. From leveraging sophisticated mathematical and
                    statistical techniques in investment management to exploring disruptive technologies in banking and
                    financial markets, the lab's mandate encompasses a rich tapestry of research pursuits.
                  </p>
                  <p class="mb-4">
                    Moreover, the lab will be instrumental in crafting sophisticated models for pricing derivatives,
                    offering a cutting-edge platform for exploration and discovery.
                  </p>
                  <h4 class="text-xl font-semibold mt-6 mb-3">Beyond Academia</h4>
                  <p class="mb-4">
                    Beyond the confines of academia, the lab will extend its reach through tailored outreach initiatives
                    and bespoke programs designed to meet the specific needs of banks and financial institutions. The
                    lab will offer research programs of interest to all the students with requisite skills.
                  </p>
                  <p class="mb-4">
                    From undergraduates to post-docs, everyone will have the opportunity to explore the latest
                    developments in the field of finance.
                  </p>
                  <h4 class="text-xl font-semibold mt-6 mb-3">Collaborative Ecosystem</h4>
                  <p class="mb-4">
                    By fostering a collaborative ecosystem, the lab aims to empower stakeholders with insights and
                    innovations that drive sustainable growth and resilience in the financial services industry. The lab
                    will also collaborate with banks and financial services companies, offering tailored programs to
                    address industry-specific needs.
                  </p>
                  <p>
                    Together, IIT Bombay and Citadel Securities hope to drive innovation, nurture expertise, and shape
                    the future of finance both in India and abroad.
                  </p>
                </div>
                <div class="p-4 bg-neutral-50 border-t border-neutral-200">
                  <button id="close-modal-btn-2"
                    class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
            // Animate about text sections on scroll
            const observerOptions = {
              threshold: 0.2,
              rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                if (entry.isIntersecting) {
                  entry.target.style.opacity = '1';
                  entry.target.style.transform = 'translateY(0)';
                  observer.unobserve(entry.target);
                }
              });
            }, observerOptions);

            const aboutTexts = document.querySelectorAll('#about-text-1, #about-text-2, #about-text-3');
            aboutTexts.forEach(text => {
              observer.observe(text);
            });

            // Animate floating card
            const floatingCard = document.querySelector('.animate-card');
            setTimeout(() => {
              floatingCard.classList.remove('opacity-0');
              floatingCard.classList.add('opacity-100');
              floatingCard.style.transition = 'opacity 1s ease-out, transform 1s ease-out';
              floatingCard.style.transform = 'translateY(0)';
            }, 1000);

            // Modal functionality
            const modal = document.getElementById('about-modal');
            const modalContent = document.getElementById('modal-content');
            const showMoreBtn = document.getElementById('show-more-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const closeModalBtn2 = document.getElementById('close-modal-btn-2');

            // Function to open modal
            function openModal() {
              modal.classList.remove('hidden');
              document.body.style.overflow = 'hidden';
              setTimeout(() => {
                modalContent.style.opacity = '1';
                modalContent.style.transform = 'scale(1)';
              }, 50);
              modal.setAttribute('aria-hidden', 'false');
              closeModalBtn.focus();
            }

            // Function to close modal
            function closeModal() {
              modalContent.style.opacity = '0';
              modalContent.style.transform = 'scale(0.95)';
              setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
              }, 300);
              modal.setAttribute('aria-hidden', 'true');
              showMoreBtn.focus();
            }

            showMoreBtn.addEventListener('click', openModal);
            closeModalBtn.addEventListener('click', closeModal);
            closeModalBtn2.addEventListener('click', closeModal);

            modal.addEventListener('click', (e) => {
              if (e.target === modal) {
                closeModal();
              }
            });

            document.addEventListener('keydown', (e) => {
              if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
              }
            });

            modal.addEventListener('keydown', function (e) {
              if (e.key === 'Tab') {
                const focusable = modal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                const firstFocusable = focusable[0];
                const lastFocusable = focusable[focusable.length - 1];

                if (e.shiftKey && document.activeElement === firstFocusable) {
                  e.preventDefault();
                  lastFocusable.focus();
                } else if (!e.shiftKey && document.activeElement === lastFocusable) {
                  e.preventDefault();
                  firstFocusable.focus();
                }
              }
            });
          });
        </script>
      </div>

    </div>

    <div id="9acf4de1-5f91-480b-a670-313e06512bc7" data-section_id="9acf4de1-5f91-480b-a670-313e06512bc7"
      data-type="content" data-order="3" class=" sectionCode">
      <div id="root">
        <section id="mission" class="py-20 bg-gray-50">
          <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
              <h2 class="text-3xl md:text-4xl font-bold mb-4 text-neutral-800">Mission</h2>
              <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
              <!-- Content Column -->
              <div class="order-2 lg:order-1">
                <div class="mb-8 opacity-0 transform translate-y-8 transition-all duration-700" id="mission-vision">
                  <h3 class="text-2xl font-semibold mb-4 text-blue-800">Our Vision</h3>
                  <p class="text-neutral-700 mb-4">
                    To foster research excellence and drive impactful advancements in India's financial ecosystem
                    through collaborative innovation and disruptive technologies.
                  </p>
                </div>

                <div class="space-y-6 opacity-0 transform translate-y-8 transition-all duration-700"
                  id="mission-pillars">
                  <h3 class="text-2xl font-semibold mb-4 text-blue-800">Strategic Pillars</h3>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Pillar 1 -->
                    <div
                      class="p-5 border border-neutral-200 rounded-lg bg-white hover:shadow-md transition-shadow duration-300 group">
                      <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm7-5a1 1 0 11-2 0 1 1 0 012 0zm-1 9a1 1 0 100-2 1 1 0 000 2z">
                          </path>
                        </svg>
                      </div>
                      <h4 class="text-lg font-medium mb-2 text-neutral-800">Research Excellence</h4>
                      <p class="text-neutral-600 text-sm">
                        Pioneering research in financial markets, sophisticated models for pricing securities, and
                        algorithmic trading.
                      </p>
                    </div>

                    <!-- Pillar 2 -->
                    <div
                      class="p-5 border border-neutral-200 rounded-lg bg-white hover:shadow-md transition-shadow duration-300 group">
                      <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                          </path>
                        </svg>
                      </div>
                      <h4 class="text-lg font-medium mb-2 text-neutral-800">Industry Collaboration</h4>
                      <p class="text-neutral-600 text-sm">
                        Partnering with financial institutions to address specific challenges and drive innovation. </p>
                    </div>

                    <!-- Pillar 3 -->
                    <div
                      class="p-5 border border-neutral-200 rounded-lg bg-white hover:shadow-md transition-shadow duration-300 group">
                      <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                          </path>
                        </svg>
                      </div>
                      <h4 class="text-lg font-medium mb-2 text-neutral-800">Education Programs</h4>
                      <p class="text-neutral-600 text-sm">
                        Offering short duration certificate programmes in niche areas of expertise. </p>
                    </div>

                    <!-- Pillar 4 -->
                    <div
                      class="p-5 border border-neutral-200 rounded-lg bg-white hover:shadow-md transition-shadow duration-300 group">
                      <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <h4 class="text-lg font-medium mb-2 text-neutral-800">Innovation Hub</h4>
                      <p class="text-neutral-600 text-sm">
                        Creating a dynamic ecosystem for developing disruptive financial technologies. </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Image Column -->
              <div class="order-1 lg:order-2 relative">
                <div
                  class="relative h-80 md:h-96 lg:h-full rounded-lg overflow-hidden transform transition-all duration-500 hover:scale-[1.02]">
                  <img
                    src="assets/images/mission.JPG"
                    alt="Modern glass architectural structure representing innovation and forward thinking"
                    onerror="this.onerror=null; this.src='https://placehold.co/800x600/f3f3f3/333333?text=Mission'"
                    class="w-full h-full object-cover">
                </div>

                <!-- Animated overlay elements -->
                <div
                  class="absolute -top-4 -left-4 w-24 h-24 bg-blue-600 opacity-20 rounded-full blur-xl animate-pulse">
                </div>
                <div
                  class="absolute -bottom-8 -right-8 w-32 h-32 bg-blue-400 opacity-20 rounded-full blur-xl animate-pulse"
                  style="animation-delay: 1s;"></div>

                <!-- Floating data card -->
                <div
                  class="absolute top-8 right-8 bg-white p-4 rounded-lg shadow-lg w-64 opacity-0 transform translate-y-8 transition-all duration-700"
                  id="mission-card">
                  <h4 class="text-lg font-semibold mb-2 text-neutral-800">Our Impact Goals</h4>
                  <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                      <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Bridge research gaps in Indian financial system</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Foster innovation in algorithmic trading</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Develop next generation of financial experts</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
              threshold: 0.2,
              rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                if (entry.isIntersecting) {
                  entry.target.style.opacity = '1';
                  entry.target.style.transform = 'translateY(0)';
                  observer.unobserve(entry.target);
                }
              });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('#mission-vision, #mission-pillars, #mission-card');
            animatedElements.forEach(element => {
              observer.observe(element);
            });

            const pillars = document.querySelectorAll('#mission-pillars .group');
            pillars.forEach(pillar => {
              pillar.addEventListener('mouseenter', function () {
                pillar.classList.add('transform', 'scale-105');
                pillar.style.transition = 'all 0.3s ease-out';
              });

              pillar.addEventListener('mouseleave', function () {
                pillar.classList.remove('transform', 'scale-105');
              });
            });
          });
        </script>
      </div>

    </div>

    <!-- Recent Events Section -->
    <section id="events" class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
          <span class="inline-block w-8 h-1 bg-blue-600 rounded"></span>
          <h2 class="text-2xl font-bold text-neutral-900">Recent Events</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
          <!-- Image Carousel -->
          <div class="relative rounded-2xl overflow-hidden shadow-lg bg-neutral-100" style="aspect-ratio:16/9; min-height:200px">
            <div id="home-carousel" class="absolute inset-0">
              <img src="assets/images/symposium-2.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100">
              <img src="assets/images/symposium-1.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-3.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-4.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-5.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-6.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
              <img src="assets/images/symposium-7.jpeg" alt="Research Symposium" class="home-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
            </div>
            <!-- Dot indicators -->
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 z-10">
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:1" data-index="0" aria-label="Slide 1"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="1" aria-label="Slide 2"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="2" aria-label="Slide 3"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="3" aria-label="Slide 4"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="4" aria-label="Slide 5"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="5" aria-label="Slide 6"></button>
              <button class="home-dot w-2 h-2 rounded-full bg-white transition-opacity duration-300" style="opacity:0.4" data-index="6" aria-label="Slide 7"></button>
            </div>
            <!-- Prev / Next -->
            <button id="home-carousel-prev" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1.5 shadow transition-colors z-10" aria-label="Previous slide">
              <svg class="w-4 h-4 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="home-carousel-next" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1.5 shadow transition-colors z-10" aria-label="Next slide">
              <svg class="w-4 h-4 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
            <!-- Date badge -->
            <div class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full z-10">April 7, 2026</div>
          </div>
          <!-- Text -->
          <div>
            <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Symposium</span>
            <h3 class="text-2xl font-bold text-neutral-900 mt-4 mb-4">Research Symposium</h3>
            <p class="text-neutral-600 leading-relaxed mb-6">The lab successfully organized a Research Symposium, an event aimed at advancing quantitative finance through strong industry–academic collaboration. Held on April 7, 2026, at the SOM Auditorium, the symposium featured exciting talks by three IIT Bombay faculty members, Profs. Piyush Pandey, Ankur Kulkarni, and Parthe Pandit, who shared insights on topics such as market microstructure, risk management, and data-driven financial modelling, fostering meaningful dialogue and knowledge exchange in the field.</p>
            <div class="flex flex-wrap gap-4 text-sm text-neutral-500 mb-6">
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                SOM Auditorium, IIT Bombay
              </div>
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                April 7, 2026
              </div>
            </div>
            <div class="pt-5 border-t border-neutral-200">
              <p class="text-sm font-semibold text-neutral-700 mb-3">Featured Speakers</p>
              <div class="flex flex-wrap gap-2 mb-6">
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Piyush Pandey</span>
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Ankur Kulkarni</span>
                <span class="text-sm bg-neutral-100 text-neutral-700 px-3 py-1.5 rounded-full">Prof. Parthe Pandit</span>
              </div>
              <a href="/citadel/events" class="inline-flex items-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-300">
                See All Events
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const slides = document.querySelectorAll('#home-carousel .home-slide');
      const dots   = document.querySelectorAll('.home-dot');
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

      document.getElementById('home-carousel-next').addEventListener('click', () => { goToSlide(current + 1); resetAuto(); });
      document.getElementById('home-carousel-prev').addEventListener('click', () => { goToSlide(current - 1); resetAuto(); });
      dots.forEach(dot => dot.addEventListener('click', () => { goToSlide(+dot.dataset.index); resetAuto(); }));
      startAuto();
    });
  </script>

  <?php include 'includes/footer.php'; ?>
