<?php
/** People: the Professor-in-Charge, associated faculty, students and staff. */
require __DIR__ . '/partials/bootstrap.php';

$page = [
    'id'          => 'people',
    'title'       => 'People',
    'description' => 'The Professor-in-Charge, associated faculty, students, postdoctoral researchers and staff of the IITB-Citadel Securities Quantitative Research Lab.',
    'subnav'      => [
        'pic'      => 'Professor-In-Charge',
        'faculty'  => 'Associated Faculty',
        'students' => 'Students',
        'staff'    => 'Staff',
    ],
];
require __DIR__ . '/partials/header.php';
?>

    <section class="section" id="pic" aria-labelledby="pic-title">
      <div class="wrap">
        <h2 class="visually-hidden" id="pic-title">Professor-In-Charge</h2>
<?php foreach ($people['leads'] as $person): ?>
        <article class="profile">
          <div class="profile__side">
            <?= avatar($person, 'profile__photo', 640, 'Portrait of ' . $person['name']) ?>

          </div>
          <div class="profile__main stack">
            <div>
              <h3 class="h-serif"><?= e($person['name']) ?></h3>
              <p class="profile__role"><?= e($person['role']) ?>, IIT Bombay-Citadel Securities Quantitative Research Lab</p>
              <p class="profile__affiliation"><?= e($person['affiliation']) ?></p>
            </div>
<?php if (!empty($person['links'])): ?>
            <p class="profile__links">
<?php foreach ($person['links'] as $label => $link): ?>
              <a class="btn btn--line btn--sm" href="<?= e($link) ?>" target="_blank" rel="noopener" aria-label="<?= e($label . ' of ' . $person['name']) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
            </p>
<?php endif; ?>
            <p><?= e($person['summary']) ?></p>
<?php foreach ($person['bio'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
<?php endforeach; ?>
          </div>
        </article>
<?php endforeach; ?>
      </div>
    </section>

    <section class="section section--tint" id="faculty" aria-labelledby="faculty-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="faculty-title">Associated Faculty</h2>
          </div>
        </div>
        <ul class="grid grid--people">
<?php foreach ($people['faculty'] as $person): ?>
          <li class="person-card">
            <?= avatar($person, 'person-card__photo', 640, 'Portrait of ' . $person['name']) ?>

            <div class="person-card__body">
              <h3><?= e($person['name']) ?></h3>
              <p class="person-card__unit"><?= e($person['unit']) ?></p>
<?php if (!empty($person['interests'])): ?>
              <p class="person-card__about"><?= e($person['interests']) ?></p>
<?php endif; ?>
<?php if (!empty($person['url'])): ?>
              <a class="textlink person-card__link" href="<?= e($person['url']) ?>" target="_blank" rel="noopener" aria-label="<?= e(link_label($person['url']) . ' of ' . $person['name']) ?>"><?= e(link_label($person['url'])) ?></a>
<?php endif; ?>
            </div>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="section" id="students" aria-labelledby="students-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="students-title">Students</h2>
            <p>Ph.D. students and postdoctoral researchers working at the lab.</p>
          </div>
        </div>
        <ul class="grid grid--2">
<?php foreach ($people['researchers'] as $person): ?>
          <li class="person">
            <?= avatar($person, 'person__photo', 640, 'Portrait of ' . $person['name']) ?>

            <div>
              <h3><?= e($person['name']) ?></h3>
              <p class="person__unit"><?= e($person['role']) ?></p>
<?php if (!empty($person['about'])): ?>
              <p class="person__about"><?= e($person['about']) ?></p>
<?php endif; ?>
<?php if (!empty($person['link'])): foreach ($person['link'] as $label => $link): ?>
              <a class="textlink person__link" href="<?= e($link) ?>" target="_blank" rel="noopener" aria-label="<?= e($label . ' of ' . $person['name']) ?>"><?= e($label) ?></a>
<?php endforeach; endif; ?>
            </div>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="section section--tint" id="staff" aria-labelledby="staff-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="staff-title">Staff</h2>
          </div>
        </div>
        <ul class="grid grid--people">
<?php foreach ($people['staff'] as $person): ?>
          <li class="person-card">
            <?= avatar($person, 'person-card__photo', 640, 'Portrait of ' . $person['name']) ?>

            <div class="person-card__body">
              <h3><?= e($person['name']) ?></h3>
              <p class="person-card__unit"><?= e($person['role']) ?></p>
            </div>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
