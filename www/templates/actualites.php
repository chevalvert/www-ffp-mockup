<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/events', [
    'title' => 'À ne pas manquer',
    'link' => 'actualites/' . slugify('À ne pas manquer'),
    // XXX: limit to 4 most recent events
    'events' => mock('pages.Actualités.events', true),
    'cta' => [
      'icon' => 'icon-add',
      'tooltip' => 'Soumettre un événement',
      'action' => 'actualites/' . slugify('À ne pas manquer') . '/form-event'
    ]
  ]) ?>

  <?php snippet('components/articles', [
    'DO_NOT_PAINT' => true,
    'title' => 'Actualités',
    'articles' => mock('pages.Actualités.articles', true)
  ]) ?>

</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
