<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' => mock('pages.experiences-de-paysage.title'),
      'text' => mock('pages.experiences-de-paysage.text')
    ]) ?>

    <?php snippet('components/pages--grid', [
      'PAINT' => false,
      'title' => 'Conférences',
      'pages' => mock('pages.experiences-de-paysage.articles'),
      'renderer' => 'components/preview--article'
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
