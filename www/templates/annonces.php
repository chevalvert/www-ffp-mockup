<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/header', [
    'title' => 'Annuaire',
    'text' => 'Si vous êtes adhérent, <a href="adhesion">identifiez-vous</a> pour avoir accès aux offres d’emploi.',
    'cta' => [
      'icon' => 'icon-add',
      'tooltip' => 'S’inscrire dans l’annuaire',
      'action' => 'adhesion'
    ]
  ]) ?>

  <?php snippet('components/pages--list', [
    'DO_NOT_PAINT' => true,
    'pages' => mock('pages.annonces.pages', true),
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
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
