<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container" data-view="table">
    <?php snippet('components/header', [
      'title' => 'Annuaire',
      'text' => <<<HTML
        <p>Si vous êtes adhérent, <a href="adhesion">identifiez-vous</a> pour avoir accès aux offres d’emploi.</p>
      HTML,
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'S’inscrire dans l’annuaire',
        'url' => 'adhesion'
      ]
    ]) ?>

    <div <?php FFP::paint() ?>>
      <?php snippet('components/form', [
        'DO_NOT_PAINT' => true,
        'class' => 'form--filter',
        'action' => 'annonces?filtrer',
        'method' => 'GET',
        'values' => [
          'filter' => $_GET['filter'] ?? '',
          'regions' => $_GET['regions'] ?? null,
          'type' => $_GET['type'] ?? null
        ],
        'form' => [
          'Filtrer' => [
            'filter' => ['type' => 'text', 'placeholder' => 'Filtrer par titre de l’annonce, lieu…'],
          ],
          [
            'regions' => ['type' => 'select', 'options' => mock('regions'), 'placeholder' => 'Toutes les régions', 'width' => '1/2'],
            'type' => ['type' => 'select', 'options' => ['f' => 'Formation', 'e' => 'Emploi', 'c' => 'Concours'], 'placeholder' => 'Tous types', 'width' => '1/2'],
          ]
        ],
        'btn' => ['label' => 'Filtrer'],
        'reset' => ['label' => 'Effacer le filtre']
      ]) ?>
    </div>

    <?php snippet('components/pages--list', [
      'DO_NOT_PAINT' => true,
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
