<?php
/** Events: upcoming events, then past events with a photo carousel. */
require __DIR__ . '/partials/bootstrap.php';

$page = [
    'id'          => 'events',
    'title'       => 'Events',
    'description' => 'Workshops, seminars, conferences and research events at the IITB-Citadel Securities Quantitative Research Lab.',
    'lede'        => $events['intro'],
];
require __DIR__ . '/partials/header.php';
?>

<?php if (!empty($events['upcoming'])): ?>
    <section class="section" aria-labelledby="upcoming-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="upcoming-title">Upcoming Events</h2>
          </div>
        </div>

<?php foreach ($events['upcoming'] as $event): ?>
<?php
    $end  = !empty($event['end_date']) ? $event['end_date'] : '';
    $when = date_range($event['date'], $end);
    $logo = !empty($event['logo']) ? 'assets/img/events/' . $event['logo'] . '-white.webp' : '';
    $schema = [
        '@context'            => 'https://schema.org',
        '@type'               => 'Event',
        'name'                => (!empty($event['short']) ? $event['short'] . ': ' : '') . $event['title'],
        'description'         => $event['summary'],
        'startDate'           => $event['date'],
        'endDate'             => $end ?: $event['date'],
        'eventStatus'         => 'https://schema.org/EventScheduled',
        'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
        'location'            => ['@type' => 'Place', 'name' => $event['venue'], 'address' => 'IIT Bombay, Powai, Mumbai, Maharashtra 400076, India'],
        'organizer'           => ['@type' => 'Organization', 'name' => $site['name_plain'], 'url' => $site['url']],
    ];
    if (!empty($event['url'])) {
        $schema['url'] = $event['url'];
    }
?>
        <article class="feature" id="<?= e($event['id']) ?>" aria-labelledby="<?= e($event['id']) ?>-title">
          <div class="feature__main">
<?php if ($logo && is_file(SITE_ROOT . '/' . $logo)): ?>
            <img class="feature__logo" src="<?= asset($logo) ?>" alt="<?= e(!empty($event['short']) ? $event['short'] : $event['title']) ?>" width="600" height="204">
<?php endif; ?>
            <p class="feature__kicker"><span class="badge">Upcoming</span> <?= e(!empty($event['kind']) ? $event['kind'] : 'Event') ?><?= !empty($event['short']) ? ', ' . e($event['short']) : '' ?></p>
            <h3 class="feature__title" id="<?= e($event['id']) ?>-title"><?= e($event['title']) ?></h3>
<?php if (!empty($event['partner'])): ?>
            <p class="feature__partner">Jointly organized with <a href="<?= e($event['partner']['url']) ?>" target="_blank" rel="noopener"><?= e($event['partner']['name']) ?></a></p>
<?php endif; ?>
            <dl class="feature__facts">
              <div>
                <dt><?= icon('calendar') ?> When</dt>
                <dd><time datetime="<?= e($event['date']) ?>"><?= e($when) ?></time></dd>
              </div>
              <div>
                <dt><?= icon('pin') ?> Where</dt>
                <dd><?= e($event['venue']) ?></dd>
              </div>
            </dl>
            <p class="feature__summary"><?= e($event['summary']) ?></p>
            <div class="feature__actions">
<?php if (!empty($event['url'])): ?>
              <a class="btn btn--white" href="<?= e($event['url']) ?>" target="_blank" rel="noopener">Visit <?= e(parse_url($event['url'], PHP_URL_HOST)) ?></a>
<?php endif; ?>
<?php foreach (!empty($event['links']) ? $event['links'] : [] as $label => $link): ?>
              <a class="btn btn--line-light" href="<?= e($link) ?>" target="_blank" rel="noopener"><?= e($label) ?></a>
<?php endforeach; ?>
            </div>
          </div>

<?php if (!empty($event['deadlines'])): ?>
          <aside class="feature__side" aria-labelledby="<?= e($event['id']) ?>-dates">
            <h4 id="<?= e($event['id']) ?>-dates">Key dates</h4>
            <ol class="keydates">
<?php $deadlines = $event['deadlines']; asort($deadlines); foreach ($deadlines as $label => $ymd): $closed = $ymd < $today; ?>
              <li<?= $closed ? ' class="is-closed"' : '' ?>>
                <time datetime="<?= e($ymd) ?>"><?= e(long_date($ymd)) ?></time>
                <span><?= e($label) ?><?= $closed ? ' <em>(closed)</em>' : '' ?></span>
              </li>
<?php endforeach; ?>
              <li class="keydates__event">
                <time datetime="<?= e($event['date']) ?>"><?= e($when) ?></time>
                <span><?= e(!empty($event['short']) ? $event['short'] : $event['title']) ?> at <?= e(!empty($event['venue_short']) ? $event['venue_short'] : $event['venue']) ?></span>
              </li>
            </ol>
<?php if (!empty($event['email'])): ?>
            <p class="feature__contact">Questions about submissions, registration, workshops, or your visit: <a class="textlink" href="mailto:<?= e($event['email']) ?>"><?= e($event['email']) ?></a></p>
<?php endif; ?>
          </aside>
<?php endif; ?>
        </article>

<?php if (!empty($event['schedule'])): ?>
        <div class="feature__block">
          <h3 class="h-serif">Programme</h3>
          <ol class="grid grid--3 days">
<?php foreach ($event['schedule'] as $n => $day): ?>
            <li class="day">
              <p class="day__when">Day <?= $n + 1 ?>, <time datetime="<?= e($day['date']) ?>"><?= e(day_label($day['date'])) ?></time></p>
              <h4><?= e($day['title']) ?></h4>
              <p class="day__time"><?= e($day['time']) ?></p>
              <p><?= e($day['text']) ?></p>
            </li>
<?php endforeach; ?>
          </ol>
        </div>
<?php endif; ?>

<?php if (!empty($event['themes'])): ?>
        <div class="feature__block">
          <div class="feature__blockhead">
            <h3 class="h-serif">Conference themes</h3>
<?php if (!empty($event['audience'])): ?>
            <p><?= e($event['audience']) ?></p>
<?php endif; ?>
          </div>
          <dl class="grid grid--3 themes">
<?php foreach ($event['themes'] as $name => $text): ?>
            <div>
              <dt><?= e($name) ?></dt>
              <dd><?= e($text) ?></dd>
            </div>
<?php endforeach; ?>
          </dl>
        </div>
<?php endif; ?>
        <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
<?php endforeach; ?>
      </div>
    </section>
<?php endif; ?>

<?php foreach ($events['past'] as $index => $event): ?>
<?php $photos = !empty($event['photos']) ? $event['photos'] : []; ?>
    <section class="section<?= !empty($events['upcoming']) ? ' section--tint' : '' ?>" aria-labelledby="event-<?= (int) $index ?>-title">
<?php if ($index === 0): ?>
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2>Past Events</h2>
          </div>
        </div>
      </div>
<?php endif; ?>
      <div class="wrap event<?= $photos ? '' : ' event--plain' ?>">
<?php if ($photos): ?>
        <div class="carousel" data-carousel data-interval="5000" role="region" aria-roledescription="carousel" aria-label="Photographs from the <?= e($event['title']) ?>">
          <div class="carousel__stage">
<?php foreach ($photos as $i => $photo): $tall = $photo['shape'] === 'tall'; ?>
            <figure class="carousel__slide<?= $tall ? ' carousel__slide--tall' : '' ?><?= $i === 0 ? ' is-active' : '' ?>" data-carousel-slide
                    role="group" aria-roledescription="slide" aria-label="<?= $i + 1 ?> of <?= count($photos) ?>">
<?php if ($tall): ?>
              <span class="carousel__backdrop" aria-hidden="true" style="background-image: url('assets/img/photos/<?= e($photo['file']) ?>.webp')"></span>
<?php endif; ?>
              <img src="assets/img/photos/<?= e($photo['file']) ?>.webp" alt="<?= e($photo['alt']) ?>"
                   width="<?= $tall ? 760 : 1100 ?>" height="<?= $tall ? 1010 : 828 ?>"<?= $i === 0 ? '' : ' loading="lazy"' ?> decoding="async">
            </figure>
<?php endforeach; ?>
            <p class="carousel__date"><?= icon('calendar') ?> <time datetime="<?= e($event['date']) ?>"><?= e(long_date($event['date'])) ?></time></p>
<?php if (count($photos) > 1): ?>
            <button class="carousel__arrow carousel__arrow--prev" type="button" data-carousel-prev aria-label="Previous photograph"><?= icon('left') ?></button>
            <button class="carousel__arrow carousel__arrow--next" type="button" data-carousel-next aria-label="Next photograph"><?= icon('right') ?></button>
<?php endif; ?>
          </div>
<?php if (count($photos) > 1): ?>
          <div class="carousel__bar">
            <div class="carousel__dots">
<?php foreach ($photos as $i => $photo): ?>
              <button type="button" data-carousel-dot aria-label="Photograph <?= $i + 1 ?> of <?= count($photos) ?>"<?= $i === 0 ? ' aria-current="true"' : '' ?>></button>
<?php endforeach; ?>
            </div>
            <span class="carousel__count" data-carousel-count aria-hidden="true">1 / <?= count($photos) ?></span>
            <button class="carousel__toggle" type="button" data-carousel-toggle aria-label="Pause the slideshow">
              <span class="when-playing"><?= icon('pause') ?></span>
              <span class="when-paused"><?= icon('play') ?></span>
            </button>
          </div>
<?php endif; ?>
        </div>
<?php endif; ?>

        <div class="event__body stack">
          <p class="meta"><span class="badge badge--blue"><?= $index === 0 ? 'Recent Event' : e($event['kind']) ?></span> <span><?= e($event['kind']) ?></span></p>
          <h3 class="h-serif event__title" id="event-<?= (int) $index ?>-title"><?= e($event['title']) ?></h3>
          <p><?= e($event['summary']) ?></p>
          <ul class="event__facts">
            <li class="meta"><?= icon('pin') ?> <?= e($event['venue']) ?></li>
            <li class="meta"><?= icon('calendar') ?> <time datetime="<?= e($event['date']) ?>"><?= e(long_date($event['date'])) ?></time></li>
          </ul>
<?php if (!empty($event['speakers'])): ?>
          <div>
            <h4>Featured Speakers</h4>
            <ul class="chips">
<?php foreach ($event['speakers'] as $speaker): ?>
              <li><?= e($speaker) ?></li>
<?php endforeach; ?>
            </ul>
          </div>
<?php endif; ?>
        </div>
      </div>
    </section>
<?php endforeach; ?>

<?php if (empty($events['upcoming'])): ?>
    <section class="section section--tint" aria-labelledby="upcoming-title">
      <div class="wrap">
        <div class="empty">
          <span class="icon-box"><?= icon('calendar') ?></span>
          <div>
            <h2 id="upcoming-title">Upcoming Events</h2>
            <p>No upcoming events at the moment. Check back soon or <a class="textlink" href="<?= e(url('contact')) ?>">contact us</a> to stay informed.</p>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>

<?php require __DIR__ . '/partials/footer.php'; ?>
