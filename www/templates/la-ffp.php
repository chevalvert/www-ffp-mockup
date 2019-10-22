<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' => 'Les objectifs de la FFP',
      'text' => mock('pages.la-ffp.header'),
      'class' => 'js-landscape'
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Les membres du bureau',
      'pages' => mock('pages.la-ffp.members-office'),
      'renderer' => 'components/preview--people'
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Les membres du conseil d’administration',
      'pages' => mock('pages.la-ffp.members-admin'),
      'renderer' => 'components/preview--people'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Promouvoir et développer le paysage dans le cadre de vie',
      'text' => mock('pages.la-ffp.text'),
      'class' => 'js-landscape'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Promouvoir et développer le paysage dans le cadre de vie',
      'text' => mock('pages.la-ffp.text')
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
