<?php snippet('html.header') ?>
<?php snippet('components/menu', ['message' => 'Bonjour <b>Dominique Toulemonde</b>']) ?>

<main role="main" id="main">
  <div class="barba-container" data-view="table">
    <?php snippet('components/section', [
      'title' => 'Mes références',
      'text' => mock('pages.profil.reference-text')
    ]) ?>

    <?php snippet('components/pages--list', [
      'title' => 'Mes annonces',
      'pages' => mock('pages.annonces.pages'),
      'sortBy' => ['pubdate', 'ASC'],
      'sortable' => ['pubdate', 'type'],
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
