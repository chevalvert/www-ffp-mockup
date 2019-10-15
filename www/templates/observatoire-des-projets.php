<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' =>  mock('pages.observatoire-des-projets.title', true),
      'text' => mock('pages.observatoire-des-projets.text', true)
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets de l’observatoire',
      'pages' => mock('pages.actualites.articles', true),
      'renderer' => 'components/preview--article'
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
