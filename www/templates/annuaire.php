<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container" data-view="table">
    <?php snippet('components/header', [
      'title' => 'Annuaire',
      'text' => <<<HTML
        <p>Se consolidant dans le système de insiding et outsiding, la cosmogonisation par rapport aux diplomaties fait allusion à prévaloir une discipline dans le prémice, je vous en prie.</p>
      HTML,
      'cta' => [
        'icon' => 'add',
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
          [
            'filter' => ['type' => 'text', 'placeholder' => 'Rechercher par nom de, agence, lieu…', 'width' => '1/2'],
            'regions' => ['type' => 'select', 'options' => mock('regions'), 'placeholder' => 'Toutes les régions', 'width' => '1/2']
          ]
        ],
        'btn' => ['label' => 'Filtrer'],
        'reset' => ['label' => 'Effacer']
      ]) ?>
    </div>

    <div class="annuaire__pagination" <?php FFP::paint() ?>>
      <div class="container">
        <ul class="annuaire__letters">
          <?php foreach (range('A', 'Z') as $char) : ?>
            <li class="annuaire__letter <?= ($_GET['p'] ?? 'A') == $char ? 'is-active' : '' ?> <?= rand(0, 100) > 70 ? 'is-disabled' : '' ?>">
              <a href="annuaire?p=<?= $char ?>"><?= $char ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>

    <?php snippet('components/pages--list', [
      'DO_NOT_PAINT' => true,
      'pages' => mock('pages.annuaire.pages'),
      'sortBy' => ['name', 'ASC'],
      'sortable' => ['name', 'agency'],
      'columns' => [
        'name' => ['label' => 'Adhérent'],
        'agency' => ['label' => 'Agence'],
        'address' => ['label' => 'Adresse', 'transform' => function ($v) { return nl2br($v); }],
        'contact' => ['transform' => function ($v) { return nl2br($v); }]
      ]
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
