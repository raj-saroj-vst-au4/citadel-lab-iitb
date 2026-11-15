<?php $page = 'contact'; ?>
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
        <img src="https://images.unsplash.com/photo-1484981138541-3d074aa97716?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080"
          alt="Contact background" class="w-full h-full object-cover"
          onerror="this.onerror=null; this.src='https://placehold.co/1200x400/0c4073/ffffff'">
      </div>
      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact</h1>
        <p class="text-lg text-neutral-300 max-w-2xl mx-auto">Connect with the IITB-Citadel Securities Quantitative Research Lab for inquiries, collaborations, or more information.</p>
      </div>
    </section>

    <div id="27cc2ed5-3b53-4a87-b91c-5ded16d34857" data-section_id="27cc2ed5-3b53-4a87-b91c-5ded16d34857"
      data-type="content" data-order="8" class=" sectionCode">

      <div id="root">
        <section id="contact" class="py-16 px-4 sm:px-6 lg:px-8 bg-neutral-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 mb-4">Contact</h2>
            <p class="text-lg text-neutral-600 max-w-3xl mx-auto">Connect with the IITB-Citadel Securities
                Quantitative Research Lab for inquiries, collaborations, or more information</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6">Get in Touch</h3>

                <!-- Error Messages -->
                <div id="errorMessage" class="hidden mb-6 p-4 bg-red-100 rounded-lg">
                    <p class="text-red-800 font-medium">Please fix the following errors:</p>
                    <ul id="errorList" class="mt-2 text-red-700 list-disc list-inside"></ul>
                </div>

                <form id="contactForm" class="space-y-6" method="POST">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-neutral-700 mb-1">First Name *</label>
                            <input type="text" id="firstName" name="firstName"
                                class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                required>
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-neutral-700 mb-1">Last Name *</label>
                            <input type="text" id="lastName" name="lastName"
                                class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                required>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-1">Email Address *</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            required>
                    </div>

                    <div>
                        <label for="organization" class="block text-sm font-medium text-neutral-700 mb-1">Organization</label>
                        <input type="text" id="organization" name="organization"
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="inquiry" class="block text-sm font-medium text-neutral-700 mb-1">Inquiry Type *</label>
                        <select id="inquiry" name="inquiry"
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            required>
                            <option value="research">Research Collaboration</option>
                            <option value="program">Academic Programs</option>
                            <option value="industry">Industry Partnership</option>
                            <option value="media">Media Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-700 mb-1">Your Message *</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            required></textarea>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox"
                                class="h-4 w-4 text-blue-600 border-neutral-300 rounded focus:ring-blue-500" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="text-neutral-600">I agree to the privacy policy and terms of service *</label>
                        </div>
                    </div>

                    <button type="submit" id="submitBtn"
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition duration-300 transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed">
                        <span id="submitText">Submit Inquiry</span>
                        <span id="loadingText" class="hidden">Sending...</span>
                    </button>
                </form>

                <!-- Success message -->
                <div id="successMessage" class="hidden mt-6 p-4 bg-green-100 rounded-lg">
                    <p class="text-green-800 font-medium">Thank you for your message! We'll get back to you shortly.</p>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="flex flex-col space-y-8">
                <!-- Contact Details -->
                <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">IITB-Citadel Securities Quantitative Research Lab</h3>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-neutral-900">Location</h4>
                                <p class="text-neutral-600">Shailesh J. Mehta School of Management</p>
                                <p class="text-neutral-600">IIT Bombay, Powai</p>
                                <p class="text-neutral-600">Mumbai, Maharashtra 400076</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-neutral-900">Email</h4>
                                <a href="mailto:pic.citadel@iitb.ac.in" class="text-blue-600 hover:text-blue-800 transition">pic.citadel@iitb.ac.in</a><br>
                                <a href="mailto:sudeepb@iitb.ac.in" class="text-blue-600 hover:text-blue-800 transition">sudeepb@iitb.ac.in</a><br>
                                <a href="mailto:office.citadel@iitb.ac.in" class="text-blue-600 hover:text-blue-800 transition">office.citadel@iitb.ac.in</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-neutral-900">PIC Office</h4>
                                <p class="text-neutral-600">+91 22 2576 7145</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-neutral-900">SJMSOM Office</h4>
                                <p class="text-neutral-600">+91 22 2576 7781 / 7782</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Map -->
                <div class="rounded-xl overflow-hidden shadow-lg h-80 relative">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.8210426855466!2d72.91518745316925!3d19.13169541858507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f68889e18d%3A0xb3317ce2aa309c37!2sShailesh%20J.%20Mehta%20School%20of%20Management%20(SJMSoM)!5e1!3m2!1sen!2sin!4v1748433611766!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
      </div>

      <script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');
    const errorList = document.getElementById('errorList');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');

    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Hide previous messages
        successMessage.classList.add('hidden');
        errorMessage.classList.add('hidden');

        // Show loading state
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        loadingText.classList.remove('hidden');

        try {
            const formData = new FormData(contactForm);

            const response = await fetch('assets/php/contact-handler.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                contactForm.classList.add('hidden');
                successMessage.classList.remove('hidden');
            } else {
                if (result.errors && Array.isArray(result.errors)) {
                    errorList.innerHTML = '';
                    result.errors.forEach(error => {
                        const li = document.createElement('li');
                        li.textContent = error;
                        errorList.appendChild(li);
                    });
                } else {
                    errorList.innerHTML = `<li>${result.message}</li>`;
                }
                errorMessage.classList.remove('hidden');
            }
        } catch (error) {
            console.error('Error:', error);
            errorList.innerHTML = '<li>An error occurred. Please try again later.</li>';
            errorMessage.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            submitText.classList.remove('hidden');
            loadingText.classList.add('hidden');
        }
    });
});
</script>
    </div>

  <?php include 'includes/footer.php'; ?>
