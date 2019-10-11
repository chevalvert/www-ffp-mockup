<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/header', [
    'title' => 'Annuaire',
    'text' => 'Se consolidant dans le système de insiding et outsiding, la cosmogonisation par rapport aux diplomaties fait allusion à prévaloir une discipline dans le prémice, je vous en prie.',
    'cta' => [
      'icon' => 'icon-add',
      'tooltip' => 'S’inscrire dans l’annuaire',
      'action' => 'adhesion'
    ]
  ]) ?>

  <?php snippet('components/pages--list', [
    'DO_NOT_PAINT' => true,
    'pages' => mock('pages.annuaire.pages', true),
    'sortBy' => ['name', 'ASC'],
    'columns' => [
      'name' => ['label' => 'Adhérent'],
      'agency' => ['label' => 'Agence'],
      'address' => ['label' => 'Adresse', 'transform' => function ($v) { return nl2br($v); }],
      'contact' => ['transform' => function ($v) { return nl2br($v); }]
    ]
  ]) ?>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
