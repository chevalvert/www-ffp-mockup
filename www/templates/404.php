<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container">
    <section class="js-landscape" <?php FFP::paint() ?>>
      <div class="container">
        <h1>La page demandée n'existe pas.</h1>
        <p>Avez-vous essayé de faire une <a href="search">recherche</a> ?</p>
      </div>
    </section>
    <section class="js-landscape" <?php FFP::paint() ?>></section>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
