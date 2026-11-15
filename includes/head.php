<html lang="en" class="scroll-smooth h-full">

<head>
  <meta name="color-scheme" content="light">
  <style>
    :root {
      color-scheme: light;
      forced-color-adjust: none;
    }

    html,
    body {
      color-scheme: light only;
      background-color: white;
      color: black;
    }

    * {
      -webkit-text-size-adjust: none;
      -webkit-font-smoothing: antialiased;
    }
    @keyframes smoothSlide {
    0% {
        object-position: 0% center;
    }
    100% {
        object-position: 100% center;
    }
}

.smooth-slide {
    animation: smoothSlide 8s ease-in-out infinite alternate;
}
@keyframes panSlide {
    0% {
        transform: translateX(-10%) scale(1.2);
    }
    100% {
        transform: translateX(10%) scale(1.2);
    }
}

.pan-slide {
    animation: panSlide 6s ease-in-out infinite alternate;
}
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="IITB-Citadel Securities Quantitative Research Lab">
  <meta name=" theme-color" content="#ffffff">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Alpine.js - Load first -->
  <script defer="" src="assets/js/alpine.js"></script>

  <!-- Font Links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

  <title>IITB-Citadel</title>
  <!-- SEO Description -->
  <meta name="description" content="IITB-Citadel Securities Quantitative Research Lab">

  <!-- Performance optimization: Preload critical resources -->
  <link rel="preload" href="https://cdn.tailwindcss.com" as="script">

  <!-- Header Scripts -->
  <script id="header-scripts">
    // This script tag will be replaced with actual scripts.head content
    if (window.scripts && window.scripts.head) {
      document.getElementById('header-scripts').outerHTML = window.scripts.head;
    }
  </script>

  <!-- Core CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // render the settings object
    //console.log('settings', {{settings}});
    document.addEventListener('DOMContentLoaded', function () {
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: {
                DEFAULT: '{{settings.colors.primary}}',
                50: '#f8f8f8',
                100: '#e8e8e8',
                200: '#d3d3d3',
                300: '#a3a3a3',
                400: '#737373',
                500: '#525252',
                600: '#404040',
                700: '#262626',
                800: '#171717',
                900: '#0a0a0a',
                950: '#030303',
              },
              secondary: {
                DEFAULT: '{{settings.colors.secondary}}',
                50: '#f8f8f8',
                100: '#e8e8e8',
                200: '#d3d3d3',
                300: '#a3a3a3',
                400: '#737373',
                500: '#525252',
                600: '#404040',
                700: '#262626',
                800: '#171717',
                900: '#0a0a0a',
                950: '#030303',
              },
              accent: {
                DEFAULT: '{{settings.colors.accent}}',
                50: '#f8f8f8',
                100: '#e8e8e8',
                200: '#d3d3d3',
                300: '#a3a3a3',
                400: '#737373',
                500: '#525252',
                600: '#404040',
                700: '#262626',
                800: '#171717',
                900: '#0a0a0a',
                950: '#030303',
              },
            },
            fontFamily: {
              sans: ['{{settings.fonts.primary}}', 'Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Helvetica Neue', 'Arial', 'sans-serif'],
              heading: ['{{settings.fonts.secondary}}', 'Inter', 'system-ui', 'sans-serif'],
              body: ['{{settings.fonts.secondary}}', 'Inter', 'system-ui', 'sans-serif'],
            },
            spacing: {
              '18': '4.5rem',
              '22': '5.5rem',
              '30': '7.5rem',
            },
            maxWidth: {
              '8xl': '88rem',
              '9xl': '96rem',
            },
            aspectRatio: {
              'portrait': '3/4',
              'landscape': '4/3',
              'ultrawide': '21/9',
            },
          },
        },
        variants: {
          extend: {
            opacity: ['disabled'],
            cursor: ['disabled'],
            backgroundColor: ['active', 'disabled'],
            textColor: ['active', 'disabled'],
          },
        },
      }
    });
  </script>

  <!-- Utilities and Components -->
  <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.45.1/apexcharts.min.js"></script>

  <!-- Optimized Font Loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- Dynamic Meta Tags -->
  <meta name="description" content="IITB-Citadel Securities Quantitative Research Lab">
  <meta name="keywords" content="IITB Citadel Securities Quantitative Research Lab">
  <meta name="robots" content="{{project.meta.robotsMeta}}">
  <meta name="google-site-verification" content="{{project.meta.googleVerification}}">
  <meta name="baidu-verification" content="{{project.meta.baiduVerification}}">
  <meta name="yandex-verification" content="{{project.meta.yandexVerification}}">
  <meta name="bing-verification" content="{{project.meta.bingVerification}}">
  <meta property="og:title" content="{{project.meta.ogTitle}}">
  <meta property="og:description" content="{{project.meta.ogDescription}}">
  <meta property="og:image" content="{{project.meta.ogImage}}">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="{{project.name}}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{project.meta.ogTitle}}">
  <meta name="twitter:description" content="{{project.meta.ogDescription}}">
  <meta name="twitter:image" content="{{project.meta.ogImage}}">


  <!-- Font Links -->

  <link rel="icon" type="image/x-icon" href="{{settings.favicon}}">

  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: {
          {
          settings.fonts.primary
        }
      }

      ,
      Inter,
      system-ui,
      sans-serif;
    }

    body {
      font-family: {
          {
          settings.fonts.secondary
        }
      }

      ,
      Inter,
      system-ui,
      sans-serif;
    }
  </style>

  <style>
    /* Direct font imports */
    @import url('https://fonts.googleapis.com/css2?family=Sora&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    /* Force fonts to apply properly */
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    div {
      font-display: swap;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Sora", sans-serif !important;
    }

    body,
    div,
    p {
      font-family: "Roboto", sans-serif !important;
    }
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap">
  <script>
    // Function to check and log font loading status
    function checkFontLoading() {
      const fonts = [
        "Sora",
        "Roboto"
      ].filter(Boolean);

      console.log("🔍 Checking font loading status...");

      // Use document.fonts API for checking
      if (document.fonts && document.fonts.check) {
        fonts.forEach(fontName => {
          const isLoaded = document.fonts.check("16px " + fontName);
          console.log(`Font "${fontName}": ${isLoaded ? "✅ Loaded" : "❌ Not loaded"}`);

          // If not loaded, try to force it
          if (!isLoaded) {
            console.log(`⚠️ Attempting to force load font: ${fontName}`);
            const forceFontStyle = document.createElement('style');
            forceFontStyle.textContent = `
                  @import url('https://fonts.googleapis.com/css2?family=${fontName.replace(/ /g, '+')}&display=swap');
                  .${fontName.replace(/ /g, '-')}-force { font-family: "${fontName}", sans-serif !important; }
                `;
            document.head.appendChild(forceFontStyle);

            // Force browser to apply the font
            const forceElement = document.createElement('div');
            forceElement.style.position = 'absolute';
            forceElement.style.opacity = '0';
            forceElement.style.fontFamily = "\"" + fontName + "\", sans-serif";
            forceElement.textContent = "ABCDEFGHIJKLMNOPQRSTUVWXYZ abcdefghijklmnopqrstuvwxyz 0123456789";
            forceElement.className = fontName.replace(/ /g, '-') + '-force';
            document.body.appendChild(forceElement);
          }
        });
      } else {
        console.log("⚠️ document.fonts API not available");
      }
    }

    // Check fonts after a short delay
    document.addEventListener('DOMContentLoaded', function () {
      setTimeout(checkFontLoading, 100);
      setTimeout(checkFontLoading, 1000);
    });
  </script>
  <style>
    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
      --tw-contain-size: ;
      --tw-contain-layout: ;
      --tw-contain-paint: ;
      --tw-contain-style:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
      --tw-contain-size: ;
      --tw-contain-layout: ;
      --tw-contain-paint: ;
      --tw-contain-style:
    }

    /* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    :host,
    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;

      font-family: {
          {
          settings.fonts.primary
        }
      }

      ,
      Inter,
      system-ui,
      -apple-system,
      BlinkMacSystemFont,
      Segoe UI,
      Helvetica Neue,
      Arial,
      sans-serif;
      font-feature-settings:normal;
      font-variation-settings:normal;
      -webkit-tap-highlight-color:transparent
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      letter-spacing: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    button,
    input:where([type=button]),
    input:where([type=reset]),
    input:where([type=submit]) {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    dialog {
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden]:where(:not([hidden=until-found])) {
      display: none
    }

    .container {
      width: 100%
    }

    @media (min-width: 640px) {
      .container {
        max-width: 640px
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 768px
      }
    }

    @media (min-width: 1024px) {
      .container {
        max-width: 1024px
      }
    }

    @media (min-width: 1280px) {
      .container {
        max-width: 1280px
      }
    }

    @media (min-width: 1536px) {
      .container {
        max-width: 1536px
      }
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0
    }

    .fixed {
      position: fixed
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .inset-0 {
      inset: 0px
    }

    .-bottom-4 {
      bottom: -1rem
    }

    .-bottom-6 {
      bottom: -1.5rem
    }

    .-bottom-8 {
      bottom: -2rem
    }

    .-left-4 {
      left: -1rem
    }

    .-left-6 {
      left: -1.5rem
    }

    .-right-4 {
      right: -1rem
    }

    .-right-8 {
      right: -2rem
    }

    .-top-4 {
      top: -1rem
    }

    .bottom-0 {
      bottom: 0px
    }

    .bottom-2 {
      bottom: 0.5rem
    }

    .bottom-6 {
      bottom: 1.5rem
    }

    .left-0 {
      left: 0px
    }

    .left-4 {
      left: 1rem
    }

    .right-0 {
      right: 0px
    }

    .right-2 {
      right: 0.5rem
    }

    .right-4 {
      right: 1rem
    }

    .right-6 {
      right: 1.5rem
    }

    .right-8 {
      right: 2rem
    }

    .top-0 {
      top: 0px
    }

    .top-1\/2 {
      top: 50%
    }

    .top-4 {
      top: 1rem
    }

    .top-8 {
      top: 2rem
    }

    .z-0 {
      z-index: 0
    }

    .z-10 {
      z-index: 10
    }

    .z-20 {
      z-index: 20
    }

    .z-50 {
      z-index: 50
    }

    .order-1 {
      order: 1
    }

    .order-2 {
      order: 2
    }

    .col-span-1 {
      grid-column: span 1 / span 1
    }

    .mx-4 {
      margin-left: 1rem;
      margin-right: 1rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mb-1 {
      margin-bottom: 0.25rem
    }

    .mb-10 {
      margin-bottom: 2.5rem
    }

    .mb-12 {
      margin-bottom: 3rem
    }

    .mb-16 {
      margin-bottom: 4rem
    }

    .mb-2 {
      margin-bottom: 0.5rem
    }

    .mb-3 {
      margin-bottom: 0.75rem
    }

    .mb-4 {
      margin-bottom: 1rem
    }

    .mb-6 {
      margin-bottom: 1.5rem
    }

    .mb-8 {
      margin-bottom: 2rem
    }

    .ml-1 {
      margin-left: 0.25rem
    }

    .ml-3 {
      margin-left: 0.75rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mr-1 {
      margin-right: 0.25rem
    }

    .mr-2 {
      margin-right: 0.5rem
    }

    .mr-3 {
      margin-right: 0.75rem
    }

    .mr-4 {
      margin-right: 1rem
    }

    .mt-0\.5 {
      margin-top: 0.125rem
    }

    .mt-1 {
      margin-top: 0.25rem
    }

    .mt-12 {
      margin-top: 3rem
    }

    .mt-16 {
      margin-top: 4rem
    }

    .mt-2 {
      margin-top: 0.5rem
    }

    .mt-3 {
      margin-top: 0.75rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .block {
      display: block
    }

    .inline-block {
      display: inline-block
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .aspect-square {
      aspect-ratio: 1 / 1
    }

    .h-1 {
      height: 0.25rem
    }

    .h-10 {
      height: 2.5rem
    }

    .h-12 {
      height: 3rem
    }

    .h-16 {
      height: 4rem
    }

    .h-24 {
      height: 6rem
    }

    .h-3 {
      height: 0.75rem
    }

    .h-32 {
      height: 8rem
    }

    .h-4 {
      height: 1rem
    }

    .h-48 {
      height: 12rem
    }

    .h-5 {
      height: 1.25rem
    }

    .h-6 {
      height: 1.5rem
    }

    .h-64 {
      height: 16rem
    }

    .h-8 {
      height: 2rem
    }

    .h-80 {
      height: 20rem
    }

    .h-96 {
      height: 24rem
    }

    .h-\[400px\] {
      height: 400px
    }

    .h-auto {
      height: auto
    }

    .h-full {
      height: 100%
    }

    .max-h-\[90vh\] {
      max-height: 90vh
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-10 {
      width: 2.5rem
    }

    .w-12 {
      width: 3rem
    }

    .w-16 {
      width: 4rem
    }

    .w-24 {
      width: 6rem
    }

    .w-3 {
      width: 0.75rem
    }

    .w-32 {
      width: 8rem
    }

    .w-4 {
      width: 1rem
    }

    .w-44 {
      width: 11rem
    }

    .w-48 {
      width: 12rem
    }

    .w-5 {
      width: 1.25rem
    }

    .w-56 {
      width: 14rem
    }

    .w-6 {
      width: 1.5rem
    }

    .w-64 {
      width: 16rem
    }

    .w-8 {
      width: 2rem
    }

    .w-full {
      width: 100%
    }

    .min-w-full {
      min-width: 100%
    }

    .max-w-2xl {
      max-width: 42rem
    }

    .max-w-3xl {
      max-width: 48rem
    }

    .max-w-4xl {
      max-width: 56rem
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .max-w-7xl {
      max-width: 80rem
    }

    .flex-1 {
      flex: 1 1 0%
    }

    .flex-shrink-0 {
      flex-shrink: 0
    }

    .-translate-y-1\/2 {
      --tw-translate-y: -50%;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-20 {
      --tw-translate-y: 5rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-4 {
      --tw-translate-y: 1rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-8 {
      --tw-translate-y: 2rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .scale-95 {
      --tw-scale-x: .95;
      --tw-scale-y: .95;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .transform {
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    @keyframes pulse {
      50% {
        opacity: .5
      }
    }

    .animate-pulse {
      animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite
    }

    .cursor-pointer {
      cursor: pointer
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .flex-col {
      flex-direction: column
    }

    .flex-wrap {
      flex-wrap: wrap
    }

    .items-start {
      align-items: flex-start
    }

    .items-center {
      align-items: center
    }

    .justify-end {
      justify-content: flex-end
    }

    .justify-center {
      justify-content: center
    }

    .justify-between {
      justify-content: space-between
    }

    .gap-10 {
      gap: 2.5rem
    }

    .gap-12 {
      gap: 3rem
    }

    .gap-2 {
      gap: 0.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .gap-6 {
      gap: 1.5rem
    }

    .gap-8 {
      gap: 2rem
    }

    .space-x-4> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1rem * var(--tw-space-x-reverse));
      margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .space-x-6> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.5rem * var(--tw-space-x-reverse));
      margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .space-y-2> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0.5rem * var(--tw-space-y-reverse))
    }

    .space-y-3> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0.75rem * var(--tw-space-y-reverse))
    }

    .space-y-4> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(1rem * var(--tw-space-y-reverse))
    }

    .space-y-6> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
    }

    .space-y-8> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(2rem * var(--tw-space-y-reverse))
    }

    .overflow-hidden {
      overflow: hidden
    }

    .overflow-y-auto {
      overflow-y: auto
    }

    .scroll-smooth {
      scroll-behavior: smooth
    }

    .rounded {
      border-radius: 0.25rem
    }

    .rounded-full {
      border-radius: 9999px
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-md {
      border-radius: 0.375rem
    }

    .rounded-xl {
      border-radius: 0.75rem
    }

    .border {
      border-width: 1px
    }

    .border-2 {
      border-width: 2px
    }

    .border-4 {
      border-width: 4px
    }

    .border-b {
      border-bottom-width: 1px
    }

    .border-b-2 {
      border-bottom-width: 2px
    }

    .border-l-4 {
      border-left-width: 4px
    }

    .border-t {
      border-top-width: 1px
    }

    .border-blue-500 {
      --tw-border-opacity: 1;
      border-color: rgb(59 130 246 / var(--tw-border-opacity, 1))
    }

    .border-blue-600 {
      --tw-border-opacity: 1;
      border-color: rgb(37 99 235 / var(--tw-border-opacity, 1))
    }

    .border-green-600 {
      --tw-border-opacity: 1;
      border-color: rgb(22 163 74 / var(--tw-border-opacity, 1))
    }

    .border-neutral-100 {
      --tw-border-opacity: 1;
      border-color: rgb(245 245 245 / var(--tw-border-opacity, 1))
    }

    .border-neutral-200 {
      --tw-border-opacity: 1;
      border-color: rgb(229 229 229 / var(--tw-border-opacity, 1))
    }

    .border-neutral-300 {
      --tw-border-opacity: 1;
      border-color: rgb(212 212 212 / var(--tw-border-opacity, 1))
    }

    .border-neutral-700 {
      --tw-border-opacity: 1;
      border-color: rgb(64 64 64 / var(--tw-border-opacity, 1))
    }

    .border-neutral-800 {
      --tw-border-opacity: 1;
      border-color: rgb(38 38 38 / var(--tw-border-opacity, 1))
    }

    .bg-black {
      --tw-bg-opacity: 1;
      background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
    }

    .bg-blue-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(219 234 254 / var(--tw-bg-opacity, 1))
    }

    .bg-blue-400 {
      --tw-bg-opacity: 1;
      background-color: rgb(96 165 250 / var(--tw-bg-opacity, 1))
    }

    .bg-blue-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(239 246 255 / var(--tw-bg-opacity, 1))
    }

    .bg-blue-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(37 99 235 / var(--tw-bg-opacity, 1))
    }

    .bg-gray-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
    }

    .bg-green-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1))
    }

    .bg-green-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(34 197 94 / var(--tw-bg-opacity, 1))
    }

    .bg-green-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(22 163 74 / var(--tw-bg-opacity, 1))
    }

    .bg-green-800 {
      --tw-bg-opacity: 1;
      background-color: rgb(22 101 52 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(245 245 245 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(229 229 229 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(212 212 212 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(250 250 250 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-800 {
      --tw-bg-opacity: 1;
      background-color: rgb(38 38 38 / var(--tw-bg-opacity, 1))
    }

    .bg-neutral-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(23 23 23 / var(--tw-bg-opacity, 1))
    }

    .bg-purple-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(147 51 234 / var(--tw-bg-opacity, 1))
    }

    .bg-red-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity, 1))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
    }

    .bg-opacity-10 {
      --tw-bg-opacity: 0.1
    }

    .bg-opacity-20 {
      --tw-bg-opacity: 0.2
    }

    .bg-opacity-50 {
      --tw-bg-opacity: 0.5
    }

    .bg-opacity-90 {
      --tw-bg-opacity: 0.9
    }

    .bg-gradient-to-r {
      background-image: linear-gradient(to right, var(--tw-gradient-stops))
    }

    .bg-gradient-to-t {
      background-image: linear-gradient(to top, var(--tw-gradient-stops))
    }

    .from-blue-500 {
      --tw-gradient-from: #3b82f6 var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(59 130 246 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .from-neutral-900 {
      --tw-gradient-from: #171717 var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(23 23 23 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .from-neutral-900\/70 {
      --tw-gradient-from: rgb(23 23 23 / 0.7) var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(23 23 23 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .to-blue-700 {
      --tw-gradient-to: #1d4ed8 var(--tw-gradient-to-position)
    }

    .to-neutral-900\/40 {
      --tw-gradient-to: rgb(23 23 23 / 0.4) var(--tw-gradient-to-position)
    }

    .to-neutral-900\/80 {
      --tw-gradient-to: rgb(23 23 23 / 0.8) var(--tw-gradient-to-position)
    }

    .to-transparent {
      --tw-gradient-to: transparent var(--tw-gradient-to-position)
    }

    .object-cover {
      object-fit: cover
    }

    .object-center {
      object-position: center
    }

    .p-2 {
      padding: 0.5rem
    }

    .p-4 {
      padding: 1rem
    }

    .p-5 {
      padding: 1.25rem
    }

    .p-6 {
      padding: 1.5rem
    }

    .p-8 {
      padding: 2rem
    }

    .px-2 {
      padding-left: 0.5rem;
      padding-right: 0.5rem
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem
    }

    .px-5 {
      padding-left: 1.25rem;
      padding-right: 1.25rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .px-8 {
      padding-left: 2rem;
      padding-right: 2rem
    }

    .py-1 {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem
    }

    .py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .py-20 {
      padding-top: 5rem;
      padding-bottom: 5rem
    }

    .py-3 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem
    }

    .pb-2 {
      padding-bottom: 0.5rem
    }

    .pb-20 {
      padding-bottom: 5rem
    }

    .pb-4 {
      padding-bottom: 1rem
    }

    .pb-8 {
      padding-bottom: 2rem
    }

    .pl-4 {
      padding-left: 1rem
    }

    .pt-16 {
      padding-top: 4rem
    }

    .pt-32 {
      padding-top: 8rem
    }

    .pt-4 {
      padding-top: 1rem
    }

    .text-left {
      text-align: left
    }

    .text-center {
      text-align: center
    }

    .text-right {
      text-align: right
    }

    .align-bottom {
      vertical-align: bottom
    }

    .text-2xl {
      font-size: 1.5rem;
      line-height: 2rem
    }

    .text-3xl {
      font-size: 1.875rem;
      line-height: 2.25rem
    }

    .text-4xl {
      font-size: 2.25rem;
      line-height: 2.5rem
    }

    .text-base {
      font-size: 1rem;
      line-height: 1.5rem
    }

    .text-lg {
      font-size: 1.125rem;
      line-height: 1.75rem
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .text-xs {
      font-size: 0.75rem;
      line-height: 1rem
    }

    .font-bold {
      font-weight: 700
    }

    .font-light {
      font-weight: 300
    }

    .font-medium {
      font-weight: 500
    }

    .font-semibold {
      font-weight: 600
    }

    .italic {
      font-style: italic
    }

    .tracking-widest {
      letter-spacing: 0.1em
    }

    .text-blue-500 {
      --tw-text-opacity: 1;
      color: rgb(59 130 246 / var(--tw-text-opacity, 1))
    }

    .text-blue-600 {
      --tw-text-opacity: 1;
      color: rgb(37 99 235 / var(--tw-text-opacity, 1))
    }

    .text-blue-700 {
      --tw-text-opacity: 1;
      color: rgb(29 78 216 / var(--tw-text-opacity, 1))
    }

    .text-blue-800 {
      --tw-text-opacity: 1;
      color: rgb(30 64 175 / var(--tw-text-opacity, 1))
    }

    .text-blue-900 {
      --tw-text-opacity: 1;
      color: rgb(30 58 138 / var(--tw-text-opacity, 1))
    }

    .text-gray-800 {
      --tw-text-opacity: 1;
      color: rgb(31 41 55 / var(--tw-text-opacity, 1))
    }

    .text-green-400 {
      --tw-text-opacity: 1;
      color: rgb(74 222 128 / var(--tw-text-opacity, 1))
    }

    .text-green-500 {
      --tw-text-opacity: 1;
      color: rgb(34 197 94 / var(--tw-text-opacity, 1))
    }

    .text-green-600 {
      --tw-text-opacity: 1;
      color: rgb(22 163 74 / var(--tw-text-opacity, 1))
    }

    .text-green-800 {
      --tw-text-opacity: 1;
      color: rgb(22 101 52 / var(--tw-text-opacity, 1))
    }

    .text-neutral-200 {
      --tw-text-opacity: 1;
      color: rgb(229 229 229 / var(--tw-text-opacity, 1))
    }

    .text-neutral-300 {
      --tw-text-opacity: 1;
      color: rgb(212 212 212 / var(--tw-text-opacity, 1))
    }

    .text-neutral-400 {
      --tw-text-opacity: 1;
      color: rgb(163 163 163 / var(--tw-text-opacity, 1))
    }

    .text-neutral-500 {
      --tw-text-opacity: 1;
      color: rgb(115 115 115 / var(--tw-text-opacity, 1))
    }

    .text-neutral-600 {
      --tw-text-opacity: 1;
      color: rgb(82 82 82 / var(--tw-text-opacity, 1))
    }

    .text-neutral-700 {
      --tw-text-opacity: 1;
      color: rgb(64 64 64 / var(--tw-text-opacity, 1))
    }

    .text-neutral-800 {
      --tw-text-opacity: 1;
      color: rgb(38 38 38 / var(--tw-text-opacity, 1))
    }

    .text-neutral-900 {
      --tw-text-opacity: 1;
      color: rgb(23 23 23 / var(--tw-text-opacity, 1))
    }

    .text-purple-600 {
      --tw-text-opacity: 1;
      color: rgb(147 51 234 / var(--tw-text-opacity, 1))
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity, 1))
    }

    .text-white\/90 {
      color: rgb(255 255 255 / 0.9)
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .placeholder-neutral-500::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(115 115 115 / var(--tw-placeholder-opacity, 1))
    }

    .opacity-0 {
      opacity: 0
    }

    .opacity-10 {
      opacity: 0.1
    }

    .opacity-100 {
      opacity: 1
    }

    .opacity-20 {
      opacity: 0.2
    }

    .opacity-70 {
      opacity: 0.7
    }

    .opacity-80 {
      opacity: 0.8
    }

    .shadow-lg {
      --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-md {
      --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-sm {
      --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-xl {
      --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .blur-xl {
      --tw-blur: blur(24px);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .transition {
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition-colors {
      transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition-opacity {
      transition-property: opacity;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition-shadow {
      transition-property: box-shadow;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition-transform {
      transition-property: transform;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .duration-300 {
      transition-duration: 300ms
    }

    .duration-500 {
      transition-duration: 500ms
    }

    .duration-700 {
      transition-duration: 700ms
    }

    .duration-1000 {
      transition-duration: 1000ms
    }

    .ease-out {
      transition-timing-function: cubic-bezier(0, 0, 0.2, 1)
    }

    .hover\:-translate-y-1:hover {
      --tw-translate-y: -0.25rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:-translate-y-2:hover {
      --tw-translate-y: -0.5rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:scale-105:hover {
      --tw-scale-x: 1.05;
      --tw-scale-y: 1.05;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:scale-110:hover {
      --tw-scale-x: 1.1;
      --tw-scale-y: 1.1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:scale-\[1\.02\]:hover {
      --tw-scale-x: 1.02;
      --tw-scale-y: 1.02;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:bg-blue-400:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(96 165 250 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-blue-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(37 99 235 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-blue-700:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(29 78 216 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-neutral-100:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(245 245 245 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-neutral-300:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(212 212 212 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-neutral-50:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(250 250 250 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-red-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(220 38 38 / var(--tw-bg-opacity, 1))
    }

    .hover\:bg-opacity-20:hover {
      --tw-bg-opacity: 0.2
    }

    .hover\:text-blue-600:hover {
      --tw-text-opacity: 1;
      color: rgb(37 99 235 / var(--tw-text-opacity, 1))
    }

    .hover\:text-blue-700:hover {
      --tw-text-opacity: 1;
      color: rgb(29 78 216 / var(--tw-text-opacity, 1))
    }

    .hover\:text-blue-800:hover {
      --tw-text-opacity: 1;
      color: rgb(30 64 175 / var(--tw-text-opacity, 1))
    }

    .hover\:text-green-800:hover {
      --tw-text-opacity: 1;
      color: rgb(22 101 52 / var(--tw-text-opacity, 1))
    }

    .hover\:text-neutral-700:hover {
      --tw-text-opacity: 1;
      color: rgb(64 64 64 / var(--tw-text-opacity, 1))
    }

    .hover\:text-neutral-800:hover {
      --tw-text-opacity: 1;
      color: rgb(38 38 38 / var(--tw-text-opacity, 1))
    }

    .hover\:text-purple-800:hover {
      --tw-text-opacity: 1;
      color: rgb(107 33 168 / var(--tw-text-opacity, 1))
    }

    .hover\:text-white:hover {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity, 1))
    }

    .hover\:shadow-lg:hover {
      --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .hover\:shadow-md:hover {
      --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .hover\:shadow-xl:hover {
      --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .focus\:not-sr-only:focus {
      position: static;
      width: auto;
      height: auto;
      padding: 0;
      margin: 0;
      overflow: visible;
      clip: auto;
      white-space: normal
    }

    .focus\:absolute:focus {
      position: absolute
    }

    .focus\:left-0:focus {
      left: 0px
    }

    .focus\:top-0:focus {
      top: 0px
    }

    .focus\:z-50:focus {
      z-index: 50
    }

    .focus\:border-transparent:focus {
      border-color: transparent
    }

    .focus\:bg-white:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
    }

    .focus\:p-4:focus {
      padding: 1rem
    }

    .focus\:text-black:focus {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity, 1))
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px
    }

    .focus\:ring-2:focus {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus\:ring-blue-500:focus {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity, 1))
    }

    .focus\:ring-neutral-500:focus {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(115 115 115 / var(--tw-ring-opacity, 1))
    }

    .focus\:ring-offset-2:focus {
      --tw-ring-offset-width: 2px
    }

    .group:hover .group-hover\:bg-blue-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(37 99 235 / var(--tw-bg-opacity, 1))
    }

    .group:hover .group-hover\:text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity, 1))
    }

    @media (min-width: 640px) {
      .sm\:my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem
      }

      .sm\:block {
        display: block
      }

      .sm\:inline {
        display: inline
      }

      .sm\:w-full {
        width: 100%
      }

      .sm\:max-w-2xl {
        max-width: 42rem
      }

      .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .sm\:flex-row {
        flex-direction: row
      }

      .sm\:gap-12 {
        gap: 3rem
      }

      .sm\:p-12 {
        padding: 3rem
      }

      .sm\:p-8 {
        padding: 2rem
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:align-middle {
        vertical-align: middle
      }

      .sm\:text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem
      }

      .sm\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem
      }

      .sm\:text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
      }
    }

    @media (min-width: 768px) {
      .md\:bottom-6 {
        bottom: 1.5rem
      }

      .md\:left-6 {
        left: 1.5rem
      }

      .md\:order-1 {
        order: 1
      }

      .md\:order-2 {
        order: 2
      }

      .md\:col-span-1 {
        grid-column: span 1 / span 1
      }

      .md\:mb-0 {
        margin-bottom: 0px
      }

      .md\:flex {
        display: flex
      }

      .md\:hidden {
        display: none
      }

      .md\:h-96 {
        height: 24rem
      }

      .md\:w-1\/3 {
        width: 33.333333%
      }

      .md\:w-2\/3 {
        width: 66.666667%
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .md\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .md\:items-center {
        align-items: center
      }

      .md\:justify-between {
        justify-content: space-between
      }

      .md\:gap-8 {
        gap: 2rem
      }

      .md\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
      }

      .md\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem
      }

      .md\:text-5xl {
        font-size: 3rem;
        line-height: 1
      }

      .md\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
      }
    }

    @media (min-width: 1024px) {
      .lg\:order-1 {
        order: 1
      }

      .lg\:order-2 {
        order: 2
      }

      .lg\:h-full {
        height: 100%
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .lg\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }

      .lg\:pb-28 {
        padding-bottom: 7rem
      }

      .lg\:pt-40 {
        padding-top: 10rem
      }

      .lg\:text-5xl {
        font-size: 3rem;
        line-height: 1
      }

      .lg\:text-6xl {
        font-size: 3.75rem;
        line-height: 1
      }
    }
  </style>
  <style>
    @keyframes quoteAppear {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-quote {
      animation: quoteAppear 0.8s forwards ease-out;
    }
  </style>
  <style>
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }

    .animate-fade-in {
      animation: fadeIn 0.5s forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora&display=swap');

    .Sora-force {
      font-family: "Sora", sans-serif !important;
    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    .Roboto-force {
      font-family: "Roboto", sans-serif !important;
    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora&display=swap');

    .Sora-force {
      font-family: "Sora", sans-serif !important;
    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    .Roboto-force {
      font-family: "Roboto", sans-serif !important;
    }
  </style>
  <style>
    @keyframes hoverGradientMove {
      0% {
        background-position: 100% 0%;
      }

      50% {
        background-position: 0% 100%;
      }

      100% {
        background-position: 100% 0%;
      }
    }

    .section-highlight::after,
    .component-highlight::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(-45deg,
          rgba(0, 255, 255, 0.1) 0%,
          rgba(0, 150, 255, 0.15) 50%,
          rgba(0, 255, 255, 0.1) 100%);
      background-size: 200% 200%;
      border: 2px dashed rgba(0, 200, 255, 0.6);
      pointer-events: none;
      z-index: 1000;
      opacity: 0;
      transition: opacity 0.2s;
      animation: hoverGradientMove 2s ease infinite;
    }

    .highlight-active {
      opacity: 1 !important;
      transform: scale(1) !important;
      border: 2px solid rgba(221, 255, 0, 0.85) !important;
      box-shadow: 0 0 2px rgba(221, 255, 0, 0.3) !important;
      background: linear-gradient(45deg,
          rgba(221, 255, 0, 0.12) 0%,
          rgba(221, 255, 0, 0.15) 100%) !important;
      overflow: hidden !important;
      position: relative !important;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-8px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
