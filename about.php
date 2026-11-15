<?php
/** About: the collaboration, and the lab's vision, pillars and goals. */
require __DIR__ . '/partials/bootstrap.php';

$page = [
    'id'          => 'about',
    'title'       => 'About',
    'description' => 'IIT Bombay and Citadel Securities India Private Limited have established the IIT Bombay-Citadel Securities Quantitative Research Lab, part of the School of Management, IIT Bombay.',
    'lede'        => $site['tagline'],
    'subnav'      => [
        'collaboration' => 'The Collaboration',
        'ecosystem'     => 'India’s Financial Ecosystem',
        'mission'       => 'Mission',
    ],
];
require __DIR__ . '/partials/header.php';
?>

    <section class="section" id="collaboration" aria-labelledby="collaboration-title">
      <div class="wrap duo duo--even">
        <div class="duo__text stack">
          <h2 id="collaboration-title">Transformative Collaboration</h2>
          <p>In a significant stride towards advancing research and innovation in financial markets, IIT Bombay and Citadel Securities India Private Limited have entered into a transformative collaboration. This partnership, bolstered by Citadel’s generous CSR grant, will establish the ‘IIT Bombay-Citadel Securities Quantitative Research Lab.’</p>
          <p>This state-of-the-art laboratory is poised to redefine the landscape of research in financial markets and algorithmic trading, and will be part of the School of Management, IIT Bombay.</p>
        </div>
        <div class="duo__media">
          <figure class="photo photo--card">
            <img src="assets/img/photos/mou-group-1600.webp"
                 srcset="assets/img/photos/mou-group-900.webp 900w, assets/img/photos/mou-group-1600.webp 1600w"
                 sizes="(min-width: 58rem) 36rem, 92vw"
                 width="1600" height="849" decoding="async"
                 alt="A group from IIT Bombay and Citadel Securities stands in a conference room; two people at the centre hold signed folders in front of a screen that reads “MoU Signing”.">
            <figcaption class="highlights">
              <p class="highlights__title">Partnership Highlights</p>
              <ul>
                <li><?= icon('award') ?> CSR Grant</li>
                <li><?= icon('monitor') ?> State-of-the-art Lab</li>
                <li><?= icon('calendar') ?> Activities of the Lab</li>
              </ul>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <section class="section section--tint" id="ecosystem" aria-labelledby="ecosystem-title">
      <div class="wrap duo duo--even duo--top">
        <div class="duo__text stack">
          <h2 id="ecosystem-title">India’s Financial Ecosystem</h2>
          <p>India’s financial ecosystem is one of the world’s largest and most diverse. Despite recent challenges, our financial markets continue to flourish, mutual funds are on an upward trajectory, and the insurance sector is exhibiting remarkable growth.</p>
        </div>
        <figure class="quote">
          <blockquote>“In an era marked by rapid economic expansion, the need for research excellence in financial markets has never been more pressing. This collaboration epitomizes our commitment to harnessing the power of research and innovation to shape India’s financial landscape.”</blockquote>
          <figcaption>Director, IIT Bombay</figcaption>
        </figure>
      </div>
    </section>

    <section class="section" aria-labelledby="more-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="more-title">About the Collaboration</h2>
          </div>
        </div>
        <div class="grid grid--3 columns">
          <div class="stack">
            <h3>A Hub for Research</h3>
            <p>The ‘IIT Bombay-Citadel Securities Quantitative Research Lab’ will serve as a hub for pioneering research covering all areas of quantitative finance. From leveraging sophisticated mathematical and statistical techniques in investment management to exploring disruptive technologies in banking and financial markets, the lab’s mandate encompasses a rich tapestry of research pursuits.</p>
            <p>Moreover, the lab will be instrumental in crafting sophisticated models for pricing derivatives, offering a cutting-edge platform for exploration and discovery.</p>
          </div>
          <div class="stack">
            <h3>Beyond Academia</h3>
            <p>Beyond the confines of academia, the lab will extend its reach through tailored outreach initiatives and bespoke programs designed to meet the specific needs of banks and financial institutions. The lab will offer research programs of interest to all the students with requisite skills.</p>
            <p>From undergraduates to post-docs, everyone will have the opportunity to explore the latest developments in the field of finance.</p>
          </div>
          <div class="stack">
            <h3>Collaborative Ecosystem</h3>
            <p>By fostering a collaborative ecosystem, the lab aims to empower stakeholders with insights and innovations that drive sustainable growth and resilience in the financial services industry. The lab will also collaborate with banks and financial services companies, offering tailored programs to address industry-specific needs.</p>
            <p>Together, IIT Bombay and Citadel Securities hope to drive innovation, nurture expertise, and shape the future of finance both in India and abroad.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--navy" id="mission" aria-labelledby="mission-title">
      <div class="wrap">
        <h2 id="mission-title">Our Vision</h2>
        <p class="statement">To foster research excellence and drive impactful advancements in India’s financial ecosystem through collaborative innovation and disruptive technologies.</p>
      </div>
    </section>

    <section class="section" aria-labelledby="pillars-title">
      <div class="wrap duo duo--even duo--top">
        <div class="duo__media">
          <figure class="photo">
            <img src="assets/img/photos/mou-exchange-1600.webp"
                 srcset="assets/img/photos/mou-exchange-900.webp 900w, assets/img/photos/mou-exchange-1600.webp 1600w"
                 sizes="(min-width: 58rem) 36rem, 92vw"
                 width="1600" height="1067" loading="lazy" decoding="async"
                 alt="Two men exchange a blue presentation folder in front of a screen showing the IIT Bombay and Citadel Securities logos and the words “MoU Signing, Quantitative Research Lab”.">
          </figure>
          <div class="goals">
            <h3>Our Impact Goals</h3>
            <ul class="list list--check">
              <li>Bridge research gaps in Indian financial system</li>
              <li>Foster innovation in algorithmic trading</li>
              <li>Develop next generation of financial experts</li>
            </ul>
          </div>
        </div>
        <div class="duo__text">
          <h2 id="pillars-title">Strategic Pillars</h2>
          <ul class="pillars pillars--list">
            <li>
              <span class="icon-box"><?= icon('chart') ?></span>
              <h3>Research Excellence</h3>
              <p>Pioneering research in financial markets, sophisticated models for pricing securities, and algorithmic trading.</p>
            </li>
            <li>
              <span class="icon-box"><?= icon('building') ?></span>
              <h3>Industry Collaboration</h3>
              <p>Partnering with financial institutions to address specific challenges and drive innovation.</p>
            </li>
            <li>
              <span class="icon-box"><?= icon('book') ?></span>
              <h3>Education Programs</h3>
              <p>Offering short duration certificate programmes in niche areas of expertise.</p>
            </li>
            <li>
              <span class="icon-box"><?= icon('spark') ?></span>
              <h3>Innovation Hub</h3>
              <p>Creating a dynamic ecosystem for developing disruptive financial technologies.</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
