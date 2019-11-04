<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/pages--grid', [
      'title' => 'À ne pas manquer',
      'link' => 'actualites/events',
      // XXX: limit to 4 most recent events
      'pages' => mock('pages.actualites.events'),
      'renderer' => 'components/preview--event',
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Soumettre un événement',
        'url' => 'actualites/events' . '/form-event'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'PAINT' => false,
      'title' => 'Actualités',
      'pages' => mock('pages.actualites.articles'),
      'renderer' => 'components/preview--article',
      'btn' => [
        'label' => 'Voir plus',
        'url' => '#load-more'
      ]
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
