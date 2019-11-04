<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' => mock('pages.observatoire-des-projets.title'),
      'text' => mock('pages.observatoire-des-projets.text')
    ]) ?>

    <?php snippet('components/pages--grid', [
      'PAINT' => false,
      'title' => 'Projets de l’observatoire',
      'pages' => mock('pages.actualites.articles'),
      'renderer' => 'components/preview--article'
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
