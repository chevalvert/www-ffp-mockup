<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <?php snippet('components/heading', [
    'title' => 'Observatoire des projets',
    'text' => mock('pages.observatoire-des-projets.text', true)
  ]) ?>

  <?php snippet('components/pages--grid', [
    'title' => 'Projets de l’observatoire',
    'pages' => mock('pages.actualites.articles', true),
    'renderer' => 'components/preview--article'
  ]) ?>

</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
