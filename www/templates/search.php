<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <section class="search__form">
    <div class="container">
      <?php snippet('components/btn', [
        'action' => "/search?q=hello",
        'label' => 'Rechercher'
      ]) ?>
    </div>
  </section>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
