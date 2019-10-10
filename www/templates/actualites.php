<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/pages--grid', [
    'title' => 'À ne pas manquer',
    'link' => 'actualites/events',
    // XXX: limit to 4 most recent events
    'pages' => mock('pages.actualites.events', true),
    'renderer' => 'components/preview--event',
    'cta' => [
      'icon' => 'icon-add',
      'tooltip' => 'Soumettre un événement',
      'action' => 'actualites/events' . '/form-event'
    ]
  ]) ?>

  <?php snippet('components/pages--grid', [
    'DO_NOT_PAINT' => true,
    'title' => 'Actualités',
    'pages' => mock('pages.actualites.articles', true),
    'renderer' => 'components/preview--article',
    'btn' => [
      'label' => 'Voir plus',
      'action' => '#load-more'
    ]
  ]) ?>

</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
