<?php
/** Academic Programs: each program in full, with eligibility and how to apply. */
require __DIR__ . '/partials/bootstrap.php';

$subnav = [];
foreach ($programs as $id => $program) {
    $subnav[$id] = $program['name'];
}

$page = [
    'id'          => 'programs',
    'title'       => 'Academic Programs',
    'description' => 'Ph.D. fellowships and post-doctoral research positions at the IITB-Citadel Securities Quantitative Research Lab: benefits, eligibility and how to apply.',
    'lede'        => 'Engaging students and professionals across all levels with cutting-edge educational initiatives in quantitative finance',
    'subnav'      => $subnav,
];
require __DIR__ . '/partials/header.php';

$tint = false;
?>

<?php foreach ($programs as $id => $program): ?>
    <section class="section<?= $tint ? ' section--tint' : '' ?>" id="<?= e($id) ?>" aria-labelledby="<?= e($id) ?>-title">
      <div class="wrap program">
        <aside class="program__aside">
          <div class="panel">
            <h2 id="<?= e($id) ?>-title"><?= e($program['name']) ?></h2>
<?php if (!empty($program['status'])): ?>
            <p class="status"><?= e($program['status']) ?></p>
<?php endif; ?>
            <dl class="facts">
<?php foreach ($program['facts'] as $label => $value): ?>
              <div>
                <dt><?= e($label) ?></dt>
                <dd><?= e($value) ?></dd>
              </div>
<?php endforeach; ?>
            </dl>
            <div class="panel__actions">
<?php foreach ($program['tracks'] as $track): ?>
              <a class="btn btn--solid" href="<?= e($track['apply']['url']) ?>" target="_blank" rel="noopener"><?= e($track['apply']['label']) ?></a>
<?php endforeach; ?>
<?php foreach ($program['apply'] as $link): ?>
              <a class="btn btn--solid" href="<?= e($link['url']) ?>" target="_blank" rel="noopener"><?= e($link['label']) ?></a>
<?php endforeach; ?>
            </div>
          </div>
        </aside>

        <div class="program__body">
          <p class="lede"><?= e($program['summary']) ?></p>
          <ul class="list list--check list--inline">
<?php foreach ($program['highlights'] as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
          </ul>

          <p><?= e($program['intro']) ?></p>

<?php foreach ($program['sections'] as $section): ?>
          <div class="block">
            <h3><?= e($section['heading']) ?></h3>
            <ul class="list">
<?php foreach ($section['items'] as $item): ?>
              <li><?= e($item) ?></li>
<?php endforeach; ?>
            </ul>
          </div>
<?php endforeach; ?>

<?php if (!empty($program['tracks'])): ?>
          <div class="block" data-tabs>
            <h3><?= e($program['tracks_heading']) ?></h3>
            <div class="segmented" role="tablist" aria-label="<?= e($program['tracks_heading']) ?>">
<?php $first = true; foreach ($program['tracks'] as $track_id => $track): ?>
              <button type="button" role="tab" id="tab-<?= e($id . '-' . $track_id) ?>" aria-controls="panel-<?= e($id . '-' . $track_id) ?>" aria-selected="<?= $first ? 'true' : 'false' ?>"><?= e($track['label']) ?></button>
<?php $first = false; endforeach; ?>
            </div>
<?php foreach ($program['tracks'] as $track_id => $track): ?>
            <div class="track" role="tabpanel" id="panel-<?= e($id . '-' . $track_id) ?>" aria-labelledby="tab-<?= e($id . '-' . $track_id) ?>">
              <h4 class="track__name"><?= e($track['label']) ?></h4>
              <ul class="list">
<?php foreach ($track['items'] as $item): ?>
                <li><?= e($item) ?></li>
<?php endforeach; ?>
              </ul>
              <a class="btn btn--line" href="<?= e($track['apply']['url']) ?>" target="_blank" rel="noopener"><?= e($track['apply']['label']) ?></a>
            </div>
<?php endforeach; ?>
          </div>
<?php endif; ?>

<?php if (!empty($program['notes'])): ?>
          <dl class="notes">
<?php foreach ($program['notes'] as $term => $text): ?>
            <div>
              <dt><?= e($term) ?></dt>
              <dd><?= e($text) ?></dd>
            </div>
<?php endforeach; ?>
          </dl>
<?php endif; ?>

<?php if (!empty($program['warning'])): ?>
          <p class="callout"><?= e($program['warning']) ?></p>
<?php endif; ?>
        </div>
      </div>
    </section>
<?php $tint = !$tint; endforeach; ?>

<?php require __DIR__ . '/partials/footer.php'; ?>
