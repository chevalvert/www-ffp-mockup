<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
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
        'url' => 'actualites/events/add'
      ]
    ]) ?>

    <?php
      // XXX
      // All events on one page, grouped by month
      foreach (['Octobre', 'Septembre', 'Août', 'Juillet', 'Juin', 'Mai', 'Avril'] as $prototype_month) {
        $prototype_events = [];
        for ($i=0; $i < rand(0, 10); $i++) {
          $index = array_rand(mock('pages.actualites.events'));
          $prototype_events[] = mock('pages.actualites.events')[$index];
        }

        snippet('components/pages--grid', [
          'title' => "$prototype_month 2019",
          'pages' => $prototype_events,
          'renderer' => 'components/preview--event',
          'empty_placeholder' => '&mdash;'
        ]);
      }
    ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
