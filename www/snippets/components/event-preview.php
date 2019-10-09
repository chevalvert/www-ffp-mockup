<?php if (isset($event) && $event) : ?>

<?php
  $show_year = $show_year ?? false;
  $compact_month = $event['date_start'] && $event['date_end'];
  $format = '%e';
  $format .= $compact_month ? ' %h' : ' %B';
  $format .= $show_year ? ' %Y' : '';
?>

<article class="event-preview">
  <a href="article">
    <header class="event-preview__header">
      <?php snippet('date', ['timestamp' => $event['date_start'], 'format' => $format]) ?>
      <?php snippet('date', ['timestamp' => $event['date_end'], 'format' => $format]) ?>
    </header>
    <div class="event-preview__context">
      <?= $event['context'] ?>
    </div>
    <h3 class="event-preview__title">
      <?= $event['title'] ?>
    </h3>
  </a>
</article>

<?php endif ?>
