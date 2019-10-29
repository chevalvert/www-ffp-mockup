<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' => mock('pages.projets-et-actions.title'),
      'text' => mock('pages.projets-et-actions.header')
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets de l’observatoire',
      'link' => 'projets-et-actions/observatoire-des-projets',
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article'
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Expériences de paysage',
      'link' => 'projets-et-actions/experiences-de-paysage',
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article'
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Palmarès',
      'renderer' => 'components/preview--article'
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
