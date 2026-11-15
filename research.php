<?php
/** Research: the four research areas, then the research projects. */
require __DIR__ . '/partials/bootstrap.php';

$page = [
    'id'          => 'research',
    'title'       => 'Research',
    'description' => 'Research areas and current projects of the IITB-Citadel Securities Quantitative Research Lab: quantitative finance, algorithmic trading, financial technology and risk analytics.',
    'lede'        => $research['intro'],
    'subnav'      => [
        'areas'    => 'Research Areas',
        'projects' => 'Research Projects',
    ],
];
require __DIR__ . '/partials/header.php';
?>

    <section class="section" id="areas" aria-labelledby="areas-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="areas-title">Research Areas</h2>
          </div>
          <nav class="jump" aria-label="Research areas">
<?php foreach ($research['areas'] as $id => $area): ?>
            <a class="textlink" href="#<?= e($id) ?>"><?= e(isset($area['short']) ? $area['short'] : $area['name']) ?></a>
<?php endforeach; ?>
          </nav>
        </div>

<?php foreach ($research['areas'] as $id => $area): ?>
        <article class="area" id="<?= e($id) ?>" aria-labelledby="<?= e($id) ?>-title">
          <div class="area__media">
            <img src="<?= asset('assets/img/areas/' . $area['image'] . '.webp') ?>" alt="<?= e($area['alt']) ?>" width="900" height="675" loading="lazy" decoding="async">
          </div>
          <div class="area__text stack">
            <h3 class="h-serif" id="<?= e($id) ?>-title"><?= e($area['name']) ?></h3>
            <p class="lede"><?= e($area['summary']) ?></p>
            <ul class="list list--check">
<?php foreach ($area['topics'] as $topic): ?>
              <li><?= e($topic) ?></li>
<?php endforeach; ?>
            </ul>
          </div>
          <div class="area__focus">
            <h4>Key Research Focus Areas</h4>
            <dl class="focus">
<?php foreach ($area['focus'] as $term => $text): ?>
              <div>
                <dt><?= e($term) ?></dt>
                <dd><?= e($text) ?></dd>
              </div>
<?php endforeach; ?>
            </dl>
          </div>
        </article>
<?php endforeach; ?>
      </div>
    </section>

    <section class="section section--tint" id="projects" aria-labelledby="projects-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="projects-title">Research Projects</h2>
            <p><?= e($research['projects_intro']) ?></p>
          </div>
        </div>

        <ul class="grid grid--2">
<?php foreach ($research['projects'] as $project): ?>
          <li class="project">
            <img class="project__img" src="<?= asset('assets/img/projects/' . $project['image'] . '.webp') ?>" alt="" width="819" height="819" loading="lazy" decoding="async">
            <div class="project__body">
              <h3><?= e($project['title']) ?></h3>
              <ul class="team">
<?php foreach ($project['team'] as $role => $keys): ?>
<?php foreach ($keys as $key): if (!isset($person_index[$key])) { continue; } $person = $person_index[$key]; ?>
                <li>
                  <?= avatar($person, 'avatar avatar--sm', 96) ?>

                  <span>
<?php if (!empty($person['url'])): ?>
                    <span class="team__name"><?= e($role) ?>: <a class="textlink" href="<?= e($person['url']) ?>" target="_blank" rel="noopener"><?= e($person['name']) ?></a></span>
<?php else: ?>
                    <span class="team__name"><?= e($role) ?>: <?= e($person['name']) ?></span>
<?php endif; ?>
                    <span class="team__unit"><?= e($person['unit']) ?>, IIT Bombay</span>
                  </span>
                </li>
<?php endforeach; ?>
<?php endforeach; ?>
              </ul>
            </div>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
