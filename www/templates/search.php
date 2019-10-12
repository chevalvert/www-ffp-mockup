<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<div data-barba="wrapper">
  <main role="main" data-barba="container" data-barba-view="search">
    <section class="search-form">
      <form class="container">
        <input autofocus type="search" placeholder="rechercher une page par titre, mots-clefs, contexte…" name="q" value="<?= $_GET['q'] ?? '' ?>">
        <?php snippet('components/btn', [
          'label' => 'Rechercher',
          'action' => 'submit'
        ]) ?>
      </form>
    </section>

    <?php ($_GET['q'] ?? false) && snippet('components/pages--list', [
      'DO_NOT_PAINT' => true,
      'HIDE_THEAD' => true,
      'title' => '7 résultats de recherche',
      'sortBy' => ['pubdate', 'DESC'],
      'pages' => array_slice(mock('pages.annonces.pages', true), 0, 7),
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
  </main>
</div>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
