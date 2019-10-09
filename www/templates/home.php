<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php

    snippet('components/events', [
      'title' => 'À ne pas manquer',
      'link' => 'actualites/' . slugify('À ne pas manquer'),
      // XXX: limit to 4 most recent events
      'events' => mock('pages.Actualités.events', true),
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'Soumettre un événement',
        'action' => 'actualites/' . slugify('À ne pas manquer') . '/form-event'
      ]
    ]);

    snippet('components/articles', [
      'title' => 'Actualités',
      'link' => 'actualites',
      // XXX: limit to 4 most recent articles
      'articles' => array_slice(mock('pages.Actualités.articles', true), 0, 4),
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'Soumettre une actualité',
        'action' => 'actualites/form-article'
      ]
    ]);

    snippet('components/articles', [
      'title' => 'Observatoire des projets',
      'link' => 'observatoire-des-projets',
      // XXX: TODO
      'articles' => array_slice(mock('pages.Actualités.articles', true), 0, 4)
    ]);

  ?>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
