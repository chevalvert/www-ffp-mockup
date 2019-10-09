<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/header', [
    'DO_NOT_PAINT' => true,
    'title' => 'Archive des événements',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.

      Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'cta' => [
      'icon' => 'icon-add',
      'tooltip' => 'Soumettre un événement',
      'action' => 'actualites/' . slugify('À ne pas manquer') . '/form-event'
    ]
  ]) ?>

  <?php
    // XXX
    // All events on one page, grouped by month
    foreach (['Octobre', 'Septembre', 'Août', 'Juillet', 'Juin', 'Mai', 'Avril'] as $prototype_month) {
      $prototype_events = [];
      for ($i=0; $i < rand(0, 10); $i++) {
        $prototype_events[] = mock('pages.Actualités.events', true)[array_rand(mock('pages.Actualités.events', true))];
      }

      snippet('components/events', [
        'title' => "$prototype_month 2019",
        'events' => $prototype_events
      ]);
    }
  ?>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
