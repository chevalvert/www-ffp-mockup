<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/section', [
      'title' => mock('pages.paysagiste-concepteur.title'),
      'text' => mock('pages.paysagiste-concepteur.header'),
      'class' => 'js-landscape'
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
