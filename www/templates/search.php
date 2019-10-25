<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container search" data-view="search">
    <section class="search-form">
      <form class="container" <?= ($_GET['q'] ?? false) ? 'data-no-fade-in' : '' ?>>
        <input autofocus type="search" placeholder="rechercher une page par titre, mots-clefs, contexte…" name="q" value="<?= $_GET['q'] ?? '' ?>">
        <?php snippet('components/btn', [
          'label' => 'Rechercher',
          'action' => 'submit'
        ]) ?>
      </form>
    </section>

    <?php snippet('components/pages--list', [
      'DO_NOT_PAINT' => true,
      'HIDE_THEAD' => true,
      'title' => '7 résultats de recherche',
      'sortBy' => ['pubdate', 'DESC'],
      'class' => 'js-landscape',
      'pages' => array_slice(mock('pages.annonces.pages'), 0, 7),
      // XXX
      'columns' => [
        'type' => ['label' => 'Page'],
        'pubdate' => [
          'label' => 'Date',
          'transform' => function ($timestamp) {
            return snippet('date', ['timestamp' => $timestamp, 'format' => '%d–%m-%Y'], true);
          }
        ],
        'description' => [
          'label' => 'Titre',
          'transform' => function ($title) {
            // XXX: this is for proto purpose only, need to find another way to link to a page
            return "<a href='#'>$title</a>";
          }
        ]
      ]
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
