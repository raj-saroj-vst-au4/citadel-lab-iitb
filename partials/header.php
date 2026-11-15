<?php
/**
 * Top of every page: <head>, the site header, and (on inner pages) the navy
 * title band. A page sets $page before including this file:
 *
 *   id          the page's file name without .php ('home' for index.php)
 *   title       text for the browser tab and the title band
 *   description one sentence for search engines
 *   lede        optional sentence under the title
 *   subnav      optional [anchor => label] links shown under the title
 */

$page = array_merge([
    'id'          => 'home',
    'title'       => '',
    'description' => $site['description'],
    'lede'        => '',
    'subnav'      => [],
], isset($page) ? $page : []);

$is_home   = $page['id'] === 'home';
$doc_title = $is_home
    ? $site['name_plain'] . ' | IIT Bombay'
    : $page['title'] . ' | ' . $site['name_plain'];
$canonical = $site['url'] . ($is_home ? '' : $page['id']);
$og_image  = $site['url'] . 'assets/img/og.jpg';

$schema = [
    '@context'           => 'https://schema.org',
    '@type'              => 'ResearchOrganization',
    'name'               => $site['name_plain'],
    'url'                => $site['url'],
    'description'        => $site['description'],
    'email'              => key($site['emails']),
    'parentOrganization' => [
        '@type' => 'CollegeOrUniversity',
        'name'  => 'Indian Institute of Technology Bombay',
        'url'   => 'https://www.iitb.ac.in/',
    ],
    'address' => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $site['postal']['street'],
        'addressLocality' => $site['postal']['locality'],
        'addressRegion'   => $site['postal']['region'],
        'postalCode'      => $site['postal']['code'],
        'addressCountry'  => $site['postal']['country'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($doc_title) ?></title>
  <meta name="description" content="<?= e($page['description']) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">
  <meta name="theme-color" content="#002868">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e($site['name_plain']) ?>">
  <meta property="og:title" content="<?= e($doc_title) ?>">
  <meta property="og:description" content="<?= e($page['description']) ?>">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:image" content="<?= e($og_image) ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Representatives of IIT Bombay and Citadel Securities at the signing of the memorandum of understanding for the lab.">
  <meta property="og:locale" content="en_IN">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="icon" type="image/png" href="assets/images/iitblogo.png">
  <link rel="preload" href="assets/fonts/ibm-plex-sans-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/source-serif-4-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="<?= asset('assets/css/site.css') ?>">
  <script>document.documentElement.className = 'js';</script>
<?php if ($is_home): ?>
  <script>
    // Links to the old one-page site (…/citadel/#people) go to the matching page.
    (function () {
      var moved = {
        about: 'about', mission: 'about#mission', programs: 'programs',
        'research-areas': 'research#areas', 'research-projects': 'research#projects',
        people: 'people', faculty: 'people#faculty', students: 'people#students', staff: 'people#staff',
        events: 'events', contact: 'contact'
      };
      var target = moved[location.hash.slice(1)];
      if (target) location.replace(target);
    })();
  </script>
<?php endif; ?>
  <script src="<?= asset('assets/js/site.js') ?>" defer></script>
<?php if ($is_home): ?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
<?php endif; ?>
</head>
<body>
  <a class="skip" href="#main">Skip to main content</a>

  <header class="site-header">
    <div class="wrap site-header__bar">
      <a class="brand" href="<?= e(url('home')) ?>" aria-label="<?= e($site['name_plain']) ?>, home">
        <img class="brand__crest" src="assets/images/iitblogo.png" alt="IIT Bombay" width="300" height="292">
        <span class="brand__rule" aria-hidden="true"></span>
        <img class="brand__wordmark" src="assets/images/citadellogo.png" alt="Citadel Securities" width="1024" height="80">
      </a>

      <nav class="nav" aria-label="Main">
<?php foreach ($site['nav'] as $id => $label): ?>
<?php if ($id === 'contact'): ?>
        <a class="btn btn--solid btn--sm" href="<?= e(url($id)) ?>"<?= $page['id'] === $id ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
<?php else: ?>
        <a class="nav__link" href="<?= e(url($id)) ?>"<?= $page['id'] === $id ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
<?php endif; ?>
<?php endforeach; ?>
      </nav>

      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu">
        <span class="when-closed"><?= icon('menu') ?></span>
        <span class="when-open"><?= icon('close') ?></span>
      </button>
    </div>

    <nav class="mobile-nav" id="mobile-nav" aria-label="Main" hidden>
<?php foreach ($site['nav'] as $id => $label): ?>
      <a href="<?= e(url($id)) ?>"<?= $page['id'] === $id ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
<?php endforeach; ?>
    </nav>
  </header>

  <main id="main">
<?php if (!$is_home): ?>
    <div class="page-head">
      <div class="wrap">
        <nav class="crumbs" aria-label="Breadcrumb">
          <a href="<?= e(url('home')) ?>">Home</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page"><?= e($page['title']) ?></span>
        </nav>
        <h1><?= e($page['title']) ?></h1>
<?php if ($page['lede'] !== ''): ?>
        <p class="page-head__lede"><?= e($page['lede']) ?></p>
<?php endif; ?>
<?php if ($page['subnav']): ?>
        <nav class="subnav" aria-label="On this page">
<?php foreach ($page['subnav'] as $anchor => $label): ?>
          <a href="#<?= e($anchor) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
        </nav>
<?php endif; ?>
      </div>
    </div>
<?php endif; ?>
