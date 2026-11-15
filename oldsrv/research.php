<?php $page = 'research'; ?>
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
          alt="Research background" class="w-full h-full object-cover"
          onerror="this.onerror=null; this.src='https://placehold.co/1200x400/0c4073/ffffff'">
      </div>
      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Research Areas</h1>
        <p class="text-lg text-neutral-300 max-w-2xl mx-auto">Pioneering research covering all areas of quantitative finance at the IITB-Citadel Securities Quantitative Research Lab.</p>
      </div>
    </section>

    <div id="f873f49f-4606-4b86-a2ca-8a732b3b54d4" data-section_id="f873f49f-4606-4b86-a2ca-8a732b3b54d4"
      data-type="content" data-order="4" class=" sectionCode">
      <div id="root">
        <section id="research-areas" class="py-20 bg-white">
          <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
              <h2 class="text-3xl md:text-4xl font-bold mb-4 text-neutral-800">Research Areas</h2>
              <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
              <p class="mt-6 text-lg text-neutral-600 max-w-3xl mx-auto">
                The IIT Bombay-Citadel Securities Quantitative Research Lab focuses on pioneering research covering
                all areas of quantitative finance.
              </p>
            </div>

            <!-- Research Areas Tabs -->
            <div class="max-w-6xl mx-auto">
              <!-- Tab Navigation -->
              <div class="flex flex-nowrap sm:flex-wrap overflow-x-auto sm:overflow-visible border-b border-neutral-200 mb-8 -mx-4 px-4 sm:mx-0 sm:px-0" role="tablist" id="tabs-nav">
                <button id="tab-1-trigger"
                  class="shrink-0 px-3 sm:px-6 py-3 text-sm sm:text-base font-medium focus:outline-none text-blue-600 border-b-2 border-blue-600 whitespace-nowrap" role="tab"
                  aria-selected="true" aria-controls="tab-1">
                  Quantitative Finance
                </button>
                <button id="tab-2-trigger"
                  class="shrink-0 px-3 sm:px-6 py-3 text-sm sm:text-base font-medium text-neutral-500 hover:text-blue-600 focus:outline-none whitespace-nowrap" role="tab"
                  aria-selected="false" aria-controls="tab-2">
                  Algorithmic Trading
                </button>
                <button id="tab-3-trigger"
                  class="shrink-0 px-3 sm:px-6 py-3 text-sm sm:text-base font-medium text-neutral-500 hover:text-blue-600 focus:outline-none whitespace-nowrap" role="tab"
                  aria-selected="false" aria-controls="tab-3">
                  Financial Technology
                </button>
                <button id="tab-4-trigger"
                  class="shrink-0 px-3 sm:px-6 py-3 text-sm sm:text-base font-medium text-neutral-500 hover:text-blue-600 focus:outline-none whitespace-nowrap" role="tab"
                  aria-selected="false" aria-controls="tab-4">
                  Risk Analytics
                </button>
              </div>

              <!-- Tab Content Panels -->
              <div class="tab-content mb-12">
                <!-- Tab 1 Content -->
                <div id="tab-1" class="tab-pane block opacity-100" role="tabpanel" aria-labelledby="tab-1-trigger"
                  style="transition: opacity 0.5s ease-out;">
                  <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                      <h3 class="text-2xl font-semibold mb-4 text-blue-800">Quantitative Finance</h3>
                      <p class="mb-4 text-neutral-700">
                        The research in quantitative finance focuses on developing models to examine and analyze
                        financial markets to make informed investment decisions.
                      </p>
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Sophisticated models for pricing of securities, and algorithmic trading</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Statistical arbitrage</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Derivative pricing and hedging strategies</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Portfolio optimization</span>
                        </li>
                      </ul>
                    </div>
                    <div class="order-1 md:order-2 relative">
                      <div
                        class="relative h-80 md:h-96 overflow-hidden rounded-lg shadow-lg transform transition-transform hover:scale-[1.02] duration-500">
                        <img
                          src="assets/images/quantfin.jpeg"
                          alt="Modern glass architecture representing advanced mathematical modeling and quantitative finance research"
                          onerror="this.onerror=null; this.src='https://placehold.co/800x600/f3f3f3/333333?text=Quantitative+Finance'"
                          class="w-full h-full object-cover">
                      </div>
                      <div
                        class="absolute -top-4 -right-4 w-24 h-24 bg-blue-600 opacity-10 rounded-full blur-xl animate-pulse">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tab 2 Content -->
                <div id="tab-2" class="tab-pane opacity-0 hidden" role="tabpanel" aria-labelledby="tab-2-trigger">
                  <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                      <h3 class="text-2xl font-semibold mb-4 text-blue-800">Algorithmic Trading</h3>
                      <p class="mb-4 text-neutral-700">
                        The research in algorithmic trading focuses on developing sophisticated trading strategies using
                        computational methods and market microstructure analysis.
                      </p>
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>High-frequency trading systems</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Market microstructure analysis</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Execution of algorithms and optimization</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Latency-sensitive trading infrastructure</span>
                        </li>
                      </ul>
                    </div>
                    <div class="order-1 md:order-2 relative">
                      <div
                        class="relative h-80 md:h-96 overflow-hidden rounded-lg shadow-lg transform transition-transform hover:scale-[1.02] duration-500">
                        <img
                          src="assets/images/alogtrading.png"
                          alt="Modern blue building representing algorithmic trading and computational research facilities"
                          onerror="this.onerror=null; this.src='https://placehold.co/800x600/0c4073/ffffff?text=Algorithmic+Trading'"
                          class="w-full h-full object-cover">
                      </div>
                      <div
                        class="absolute -bottom-4 -left-4 w-24 h-24 bg-blue-400 opacity-10 rounded-full blur-xl animate-pulse"
                        style="animation-delay: 1s;"></div>
                    </div>
                  </div>
                </div>

                <!-- Tab 3 Content -->
                <div id="tab-3" class="tab-pane opacity-0 hidden" role="tabpanel" aria-labelledby="tab-3-trigger">
                  <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                      <h3 class="text-2xl font-semibold mb-4 text-blue-800">Financial Technology (FinTech)</h3>
                      <p class="mb-4 text-neutral-700">
                        The fintech research explores disruptive technologies that are transforming banking and
                        financial markets, creating more efficient and accessible financial services.
                      </p>
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Blockchain and distributed ledger technologies</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>AI/ML in financial services</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Natural language processing for market intelligence</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Digital payments infrastructure and financial inclusion</span>
                        </li>
                      </ul>
                    </div>
                    <div class="order-1 md:order-2 relative">
                      <div
                        class="relative h-80 md:h-96 overflow-hidden rounded-lg shadow-lg transform transition-transform hover:scale-[1.02] duration-500">
                        <img
                          src="assets/images/fintech.jpeg"
                          alt="Architectural glass ceiling representing fintech innovation and technological advancement"
                          onerror="this.onerror=null; this.src='https://placehold.co/800x600/f3f3f3/333333?text=Financial+Technology'"
                          class="w-full h-full object-cover">
                      </div>
                      <div
                        class="absolute -top-4 -left-4 w-24 h-24 bg-green-500 opacity-10 rounded-full blur-xl animate-pulse">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tab 4 Content -->
                <div id="tab-4" class="tab-pane opacity-0 hidden" role="tabpanel" aria-labelledby="tab-4-trigger">
                  <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                      <h3 class="text-2xl font-semibold mb-4 text-blue-800">Risk Analytics</h3>
                      <p class="mb-4 text-neutral-700">
                        The risk analytics research aims to develop sophisticated models for measuring, managing, and
                        mitigating financial risks across various market conditions.
                      </p>
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Predictive models for market risk</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Credit risk assessment</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Systemic risk monitoring</span>
                        </li>
                        <li class="flex items-start">
                          <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                          </svg>
                          <span>Stress testing frameworks for financial institutions</span>
                        </li>
                      </ul>
                    </div>
                    <div class="order-1 md:order-2 relative">
                      <div
                        class="relative h-80 md:h-96 overflow-hidden rounded-lg shadow-lg transform transition-transform hover:scale-[1.02] duration-500">
                        <img
                          src="assets/images/riskanalytics.jpeg"
                          alt="Blue toned modern building representing risk analytics and financial modeling"
                          onerror="this.onerror=null; this.src='https://placehold.co/800x600/0c4073/ffffff?text=Risk+Analytics'"
                          class="w-full h-full object-cover">
                      </div>
                      <div
                        class="absolute -bottom-4 -right-4 w-24 h-24 bg-red-500 opacity-10 rounded-full blur-xl animate-pulse"
                        style="animation-delay: 1.5s;"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Research Areas Grid Preview -->
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                <div
                  class="p-6 border border-neutral-200 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
                  data-tab="tab-1">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h4 class="text-lg font-medium mb-2 text-neutral-800">Quantitative Finance</h4>
                  <p class="text-neutral-600 text-sm">Sophisticated models for pricing of securities, and investment
                    management.</p>
                </div>

                <div
                  class="p-6 border border-neutral-200 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
                  data-tab="tab-2">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h4 class="text-lg font-medium mb-2 text-neutral-800">Algorithmic Trading</h4>
                  <p class="text-neutral-600 text-sm"> Computational methods for high frequency trading strategies and
                    execution.</p>
                </div>

                <div
                  class="p-6 border border-neutral-200 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
                  data-tab="tab-3">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h4 class="text-lg font-medium mb-2 text-neutral-800">Financial Technology</h4>
                  <p class="text-neutral-600 text-sm"> Disruptive technologies transforming banking and financial
                    markets.</p>
                </div>

                <div
                  class="p-6 border border-neutral-200 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
                  data-tab="tab-4">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h4 class="text-lg font-medium mb-2 text-neutral-800">Risk Analytics</h4>
                  <p class="text-neutral-600 text-sm">Sophisticated models for measuring and mitigating financial risks.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
            // Tabs functionality
            const tabTriggers = document.querySelectorAll('#tabs-nav button');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabTriggers.forEach(trigger => {
              trigger.addEventListener('click', function () {
                tabTriggers.forEach(btn => {
                  btn.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
                  btn.classList.add('text-neutral-500');
                  btn.setAttribute('aria-selected', 'false');
                });

                this.classList.remove('text-neutral-500');
                this.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                this.setAttribute('aria-selected', 'true');

                tabPanes.forEach(pane => {
                  pane.classList.add('hidden', 'opacity-0');
                  pane.classList.remove('block', 'opacity-100');
                });

                const targetId = this.getAttribute('aria-controls');
                const targetPane = document.getElementById(targetId);
                targetPane.classList.remove('hidden');

                setTimeout(() => {
                  targetPane.classList.add('block', 'opacity-100');
                  targetPane.classList.remove('opacity-0');
                  targetPane.style.transition = 'opacity 0.5s ease-out';
                }, 50);
              });
            });

            // Grid item handlers
            const gridItems = document.querySelectorAll('[data-tab]');
            gridItems.forEach(item => {
              item.addEventListener('click', function () {
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-trigger`).click();
                document.getElementById('tabs-nav').scrollIntoView({ behavior: 'smooth', block: 'start' });
              });
            });

            // Start with the first tab active
            document.getElementById('tab-1-trigger').click();
          });
        </script>
      </div>

    </div>

  <?php include 'includes/footer.php'; ?>
