<?php snippet('html.header') ?>
<?php snippet('components/menu', ['message' => 'Bonjour <b>Martine Dupont</b>']) ?>

<main role="main" id="main">
  <div class="barba-container" data-view="table">
    <?php snippet('components/section', [
      'title' => 'Ma fiche de présentation',
      'text' => mock('pages.profil.reference-text'),
      'cta' => [
        'icon' => 'edit',
        'tooltip' => 'Éditer mon profil',
        'url' => 'api/profile/profile/edit'
      ]
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Mes références',
      'text' => mock('pages.profil.reference-text'),
      'cta' => [
        'icon' => 'edit',
        'tooltip' => 'Éditer mes références',
        'url' => 'api/profile/references/edit'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'NO_NEW_COLOR' => true,
      'title' => 'Projets',
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 5),
      'renderer' => 'components/preview--article',
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Ajouter un projet',
        'url' => 'api/profile/project/add'
      ]
    ]) ?>

    <?php snippet('components/pages--list', [
      'title' => 'Mes annonces',
      'pages' => array_slice(mock('pages.annonces.pages'), 0, 3),
      'sortBy' => ['pubdate', 'ASC'],
      'sortable' => ['pubdate', 'type'],
      'columns' => [
        'type' => [],
        'pubdate' => ['label' => 'Date', 'transform' => function ($timestamp) {
          return snippet('date', ['timestamp' => $timestamp, 'format' => '%d–%m-%Y'], true);
        }],
        'location' => ['label' => 'Lieu'],
        'description' => ['label' => 'Poste']
      ],
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Poster une nouvelle annonce',
        'url' => 'annonces/add'
      ]
    ]) ?>

    <?php snippet('components/pages--list', [
      'title' => 'Mes cotisations',
      'pages' => [],
      'empty_placeholder' => 'Aucune cotisation disponible.',
      'HIDE_THEAD' => true,
      'sortBy' => ['pubdate', 'ASC'],
      'columns' => [
        'type' => [],
        'pubdate' => ['label' => 'Date', 'transform' => function ($timestamp) {
          return snippet('date', ['timestamp' => $timestamp, 'format' => '%d–%m-%Y'], true);
        }],
        'location' => ['label' => 'Lieu'],
        'description' => ['label' => 'Poste']
      ]
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
