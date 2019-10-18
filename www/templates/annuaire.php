<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container" data-view="table">
    <?php snippet('components/header', [
      'title' => 'Annuaire',
      'text' => 'Se consolidant dans le système de insiding et outsiding, la cosmogonisation par rapport aux diplomaties fait allusion à prévaloir une discipline dans le prémice, je vous en prie.',
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'S’inscrire dans l’annuaire',
        'action' => 'adhesion'
      ]
    ]) ?>

    <div class="annuaire__pagination">
      <div class="container">
        <ul class="annuaire__letters">
          <?php foreach (range('A', 'Z') as $char) : ?>
            <li class="annuaire__letter <?= $_GET['p'] == $char ? 'is-active' : '' ?> <?= rand(0, 100) > 70 ? 'is-disabled' : '' ?>">
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
