<?php
/** Home page. The words come from content/*.php; the layout is here. */
require __DIR__ . '/partials/bootstrap.php';

$page = ['id' => 'home'];
require __DIR__ . '/partials/header.php';

$notice = $site['notice'];
$latest = isset($events['past'][0]) ? $events['past'][0] : null;
$next   = isset($events['upcoming'][0]) ? $events['upcoming'][0] : null;
?>

    <section class="hero" aria-labelledby="hero-title">
      <div class="hero__media">
        <img src="assets/img/photos/mou-exchange-1600.webp"
             srcset="assets/img/photos/mou-exchange-900.webp 900w, assets/img/photos/mou-exchange-1600.webp 1600w"
             sizes="(min-width: 62rem) 50vw, 100vw"
             width="1600" height="1067" fetchpriority="high"
             alt="Two men exchange a blue presentation folder in front of a screen showing the IIT Bombay and Citadel Securities logos and the words “MoU Signing, Quantitative Research Lab”.">
      </div>
      <div class="hero__text">
        <h1 id="hero-title"><span>IITB–Citadel Securities</span> <span>Quantitative Research Lab</span></h1>
        <p class="hero__lede"><?= e($site['tagline']) ?></p>
        <div class="hero__actions">
          <a class="btn btn--white" href="<?= e(url('about')) ?>">Learn More</a>
          <a class="btn btn--line-light" href="<?= e(url('research')) ?>">Research Areas</a>
        </div>
      </div>
    </section>

<?php if ($next || $notice): ?>
    <div class="wrap notices">
<?php if ($next): ?>
<?php
    $spot_logo = !empty($next['logo']) ? 'assets/img/events/' . $next['logo'] . '.webp' : '';
    $next_deadline = null;
    foreach (!empty($next['deadlines']) ? $next['deadlines'] : [] as $label => $ymd) {
        if ($ymd >= $today && (!$next_deadline || $ymd < $next_deadline[1])) {
            $next_deadline = [$label, $ymd];
        }
    }
?>
      <article class="spot" aria-labelledby="spot-title">
<?php if ($spot_logo && is_file(SITE_ROOT . '/' . $spot_logo)): ?>
        <img class="spot__logo" src="<?= asset($spot_logo) ?>" alt="<?= e(!empty($next['short']) ? $next['short'] : $next['title']) ?>" width="600" height="216">
<?php endif; ?>
        <p class="spot__kicker"><span class="badge">Upcoming <?= e(strtolower(!empty($next['kind']) ? $next['kind'] : 'event')) ?></span> Hosted by the lab</p>
        <h2 class="spot__title" id="spot-title"><?= e(!empty($next['short']) ? $next['short'] . ': ' : '') ?><?= e($next['title']) ?></h2>
<?php if (!empty($next['partner'])): ?>
        <p class="spot__partner">Jointly organized with <?= e($next['partner']['name']) ?></p>
<?php endif; ?>
        <ul class="spot__facts">
          <li><?= icon('calendar') ?> <time datetime="<?= e($next['date']) ?>"><?= e(date_range($next['date'], !empty($next['end_date']) ? $next['end_date'] : '')) ?></time></li>
          <li><?= icon('pin') ?> <?= e(!empty($next['venue_short']) ? $next['venue_short'] : $next['venue']) ?></li>
<?php if ($next_deadline): ?>
          <li><?= icon('clock') ?> <span>Next deadline: <?= e($next_deadline[0]) ?>, <time datetime="<?= e($next_deadline[1]) ?>"><?= e(long_date($next_deadline[1])) ?></time></span></li>
<?php endif; ?>
        </ul>
        <div class="spot__actions">
<?php if (!empty($next['url'])): ?>
          <a class="btn btn--solid btn--sm" href="<?= e($next['url']) ?>" target="_blank" rel="noopener">Visit <?= e(parse_url($next['url'], PHP_URL_HOST)) ?></a>
<?php endif; ?>
<?php if (!empty($next['links']['Call for papers'])): ?>
          <a class="btn btn--line btn--sm" href="<?= e($next['links']['Call for papers']) ?>" target="_blank" rel="noopener">Call for papers</a>
<?php endif; ?>
          <a class="textlink" href="<?= e(url('events', $next['id'])) ?>">Event details</a>
        </div>
      </article>
<?php endif; ?>
<?php if ($notice): ?>
      <a class="notice" href="<?= e(url($notice['page'], $notice['anchor'])) ?>">
        <span class="icon-box icon-box--solid"><?= icon('award') ?></span>
        <span class="notice__body">
          <span class="notice__title"><?= e($notice['title']) ?> <span class="badge"><?= e($notice['badge']) ?></span></span>
          <span class="notice__text"><?= e($notice['text']) ?></span>
        </span>
        <span class="btn btn--solid btn--sm">View Details</span>
      </a>
<?php endif; ?>
    </div>
<?php endif; ?>

    <section class="section" aria-labelledby="home-about">
      <div class="wrap duo">
        <div class="duo__media">
          <figure class="photo photo--card">
            <img src="assets/img/photos/mou-group-1600.webp"
                 srcset="assets/img/photos/mou-group-900.webp 900w, assets/img/photos/mou-group-1600.webp 1600w"
                 sizes="(min-width: 58rem) 42rem, 92vw"
                 width="1600" height="849" loading="lazy" decoding="async"
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
        <div class="duo__text stack">
          <h2 id="home-about">Transformative Collaboration</h2>
          <p>In a significant stride towards advancing research and innovation in financial markets, IIT Bombay and Citadel Securities India Private Limited have entered into a transformative collaboration. This partnership, bolstered by Citadel’s generous CSR grant, will establish the ‘IIT Bombay-Citadel Securities Quantitative Research Lab.’</p>
          <p>This state-of-the-art laboratory is poised to redefine the landscape of research in financial markets and algorithmic trading, and will be part of the School of Management, IIT Bombay.</p>
          <p><a class="btn btn--line" href="<?= e(url('about')) ?>">About the lab</a></p>
        </div>
      </div>
    </section>

    <section class="section section--tint" aria-labelledby="home-vision">
      <div class="wrap">
        <h2 id="home-vision">Our Vision</h2>
        <p class="statement">To foster research excellence and drive impactful advancements in India’s financial ecosystem through collaborative innovation and disruptive technologies.</p>
        <ul class="pillars">
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
    </section>

    <section class="section" aria-labelledby="home-areas">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="home-areas">Research Areas</h2>
            <p><?= e($research['intro']) ?></p>
          </div>
          <a class="btn btn--line" href="<?= e(url('research', 'areas')) ?>">All research areas</a>
        </div>
        <ul class="grid grid--4">
<?php foreach ($research['areas'] as $id => $area): ?>
          <li>
            <a class="tile" href="<?= e(url('research', $id)) ?>">
              <span class="tile__img"><img src="<?= asset('assets/img/areas/' . $area['image'] . '.webp') ?>" alt="" width="900" height="675" loading="lazy" decoding="async"></span>
              <span class="tile__title"><?= e(isset($area['short']) ? $area['short'] : $area['name']) ?></span>
              <span class="tile__text"><?= e($area['teaser']) ?></span>
            </a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="section section--tint" aria-labelledby="home-projects">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="home-projects">Research Projects</h2>
            <p><?= e($research['projects_intro']) ?></p>
          </div>
          <a class="btn btn--line" href="<?= e(url('research', 'projects')) ?>">All <?= count($research['projects']) ?> projects</a>
        </div>
        <ul class="grid grid--3">
<?php foreach (array_slice($research['projects'], 0, 3) as $project): ?>
<?php
    $leads = [];
    foreach ($project['team'] as $role => $keys) {
        foreach ($keys as $key) {
            if (isset($person_index[$key])) {
                $leads[] = $role . ': ' . $person_index[$key]['name'];
            }
        }
    }
?>
          <li>
            <a class="tile tile--square" href="<?= e(url('research', 'projects')) ?>">
              <span class="tile__img"><img src="<?= asset('assets/img/projects/' . $project['image'] . '.webp') ?>" alt="" width="819" height="819" loading="lazy" decoding="async"></span>
              <span class="tile__title"><?= e($project['title']) ?></span>
              <span class="tile__text"><?= e(implode(', ', $leads)) ?></span>
            </a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="section section--navy" aria-labelledby="home-programs">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="home-programs">Academic Programs</h2>
            <p>Engaging students and professionals across all levels with cutting-edge educational initiatives in quantitative finance</p>
          </div>
        </div>
        <div class="grid grid--2 teasers">
<?php foreach ($programs as $id => $program): ?>
          <article class="teaser">
            <h3><?= e($program['name']) ?></h3>
            <p><?= e($program['summary']) ?></p>
            <ul class="list">
<?php foreach ($program['highlights'] as $item): ?>
              <li><?= e($item) ?></li>
<?php endforeach; ?>
            </ul>
            <a class="btn btn--line-light" href="<?= e(url('programs', $id)) ?>" aria-label="View details of the <?= e($program['name']) ?> program">View Details</a>
          </article>
<?php endforeach; ?>
        </div>
      </div>
    </section>

<?php if ($latest || $next): ?>
    <section class="section" aria-labelledby="home-events">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="home-events">Events</h2>
            <p><?= e($events['intro']) ?></p>
          </div>
          <a class="btn btn--line" href="<?= e(url('events')) ?>">All events</a>
        </div>
        <div class="grid grid--2 home-events">
<?php if ($next): ?>
<?php $next_logo = !empty($next['logo']) ? 'assets/img/events/' . $next['logo'] . '-white.webp' : ''; ?>
          <article class="upnext" aria-labelledby="home-next-title">
<?php if ($next_logo && is_file(SITE_ROOT . '/' . $next_logo)): ?>
            <img class="upnext__logo" src="<?= asset($next_logo) ?>" alt="<?= e(!empty($next['short']) ? $next['short'] : $next['title']) ?>" width="600" height="204" loading="lazy">
<?php endif; ?>
            <p class="feature__kicker"><span class="badge">Upcoming</span> <time datetime="<?= e($next['date']) ?>"><?= e(date_range($next['date'], !empty($next['end_date']) ? $next['end_date'] : '')) ?></time></p>
            <h3 class="upnext__title" id="home-next-title"><?= e($next['title']) ?></h3>
            <p class="upnext__text"><?= e(!empty($next['teaser']) ? $next['teaser'] : $next['summary']) ?></p>
            <p class="upnext__venue"><?= icon('pin') ?> <?= e(!empty($next['venue_short']) ? $next['venue_short'] : $next['venue']) ?></p>
            <div class="feature__actions">
              <a class="btn btn--white" href="<?= e(url('events', $next['id'])) ?>">Event details</a>
<?php if (!empty($next['url'])): ?>
              <a class="btn btn--line-light" href="<?= e($next['url']) ?>" target="_blank" rel="noopener"><?= e(parse_url($next['url'], PHP_URL_HOST)) ?></a>
<?php endif; ?>
            </div>
          </article>
<?php endif; ?>
<?php if ($latest): ?>
<?php $photo = !empty($latest['photos']) ? $latest['photos'][0] : null; ?>
          <a class="tile recent" href="<?= e(url('events')) ?>">
<?php if ($photo): ?>
            <span class="tile__img"><img src="assets/img/photos/<?= e($photo['file']) ?>.webp" alt="" width="1100" height="828" loading="lazy" decoding="async"></span>
<?php endif; ?>
            <span class="meta"><span class="badge badge--blue">Recent Event</span> <time datetime="<?= e($latest['date']) ?>"><?= e(long_date($latest['date'])) ?></time></span>
            <span class="tile__title"><?= e($latest['title']) ?></span>
            <span class="tile__text"><?= e($latest['venue']) ?><?= !empty($latest['speakers']) ? '. Talks by ' . e(implode(', ', array_slice($latest['speakers'], 0, -1)) . ' and ' . end($latest['speakers'])) . '.' : '' ?></span>
          </a>
<?php endif; ?>
        </div>
      </div>
    </section>
<?php endif; ?>

    <section class="section section--tint" aria-labelledby="home-contact">
      <div class="wrap cta">
        <div>
          <h2 id="home-contact">Contact</h2>
          <p>Connect with the IITB-Citadel Securities Quantitative Research Lab for inquiries, collaborations, or more information</p>
        </div>
        <div class="cta__actions">
          <a class="btn btn--solid" href="<?= e(url('contact')) ?>">Get in Touch</a>
          <a class="textlink" href="mailto:<?= e(key($site['emails'])) ?>"><?= e(key($site['emails'])) ?></a>
        </div>
      </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
