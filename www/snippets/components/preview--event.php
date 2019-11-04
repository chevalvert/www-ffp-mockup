<?php if ($page ?? null) : ?>

<?php
  $SHOW_YEAR = $SHOW_YEAR ?? false;
  $compact_month = $page['date_start'] && $page['date_end'];
  $format = '%e';
  $format .= $compact_month ? ' %h.' : ' %B';
  $format .= $SHOW_YEAR ? ' %Y' : '';
?>

<article class="preview--event">
  <a href="article" class="icon">
    <header class="preview--event__header">
      <?php snippet('date', ['timestamp' => $page['date_start'], 'format' => $format]) ?>
      <?php snippet('date', ['timestamp' => $page['date_end'], 'format' => $format]) ?>
    </header>
    <div class="preview--event__context">
      <?= $page['context'] ?>
    </div>
    <h3 class="preview--event__title">
      <span><?= $page['title'] ?></span>
    </h3>
  </a>
</article>

<?php endif ?>
