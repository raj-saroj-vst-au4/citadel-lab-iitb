      <div id="root">
        <header id="header" class="fixed w-full top-0 z-50 bg-white shadow-sm">
          <div class="container mx-auto px-3 sm:px-4 py-2 sm:py-3">
            <nav class="flex justify-between items-center gap-2 overflow-hidden">
              <!-- Logo -->
              <div class="flex items-center min-w-0 shrink">
                <img src="assets/images/iitblogo.png" alt="IITB Logo" class="h-9 sm:h-10 mr-1 sm:mr-2 flex-shrink-0">
                <img src="assets/images/citadellogo.png" alt="Citadel Logo" class="h-7 sm:h-6 w-auto max-w-[190px] sm:max-w-none flex-shrink-0">
              </div>

              <!-- Desktop Navigation -->
              <div class="hidden lg:flex space-x-4">

                <a href="/citadel/"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Home</a>

                <a href="/citadel/#about"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">About</a>

                <a href="/citadel/research"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Research Areas</a>

                <a href="/citadel/programs"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Academic
                  Programs</a>
                
                <a href="/citadel/events"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Events</a>


                <a href="/citadel/people"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">People</a>

                <a href="/citadel/contact"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Contact</a>

              </div>

              <!-- Mobile Navigation Button -->
              <button id="mobile-menu-button" class="lg:hidden flex items-center" aria-label="Toggle navigation menu"
                aria-expanded="false" aria-controls="mobile-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-neutral-700" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                  </path>
                </svg>
              </button>
            </nav>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-2">
              <div class="flex flex-col space-y-3">

                <a href="/citadel/"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Home</a>

                <a href="/citadel/#about"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">About</a>

                <a href="/citadel/research"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Research Areas</a>

                <a href="/citadel/programs"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Academic
                  Programs</a>
                <a href="/citadel/events"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Events</a>
                  
                <a href="/citadel/people"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">People</a>

                <a href="/citadel/contact"
                  class="font- text-neutral-700 hover:text-blue-700 transition-colors duration-300">Contact</a>

              </div>
            </div>
          </div>
        </header>

        <script>
          // Mobile menu toggle functionality
          document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function () {
              const expanded = this.getAttribute('aria-expanded') === 'true' || false;
              this.setAttribute('aria-expanded', !expanded);

              if (expanded) {
                mobileMenu.classList.add('hidden');
              } else {
                mobileMenu.classList.remove('hidden');
              }
            });

            // Hide menu when clicking on a link (mobile)
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
              link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
              });
            });

            // Add scroll event to change header style
            const header = document.getElementById('header');
            window.addEventListener('scroll', function () {
              if (window.scrollY > 10) {
                header.classList.add('shadow');
              } else {
                header.classList.remove('shadow');
              }
            });
          });
        </script>
      </div>
