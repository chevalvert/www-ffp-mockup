<?php snippet('html.header') ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php for ($i = 0; $i < 100; $i++) : ?>
      <section <?php FFP::paint() ?>></section>
    <?php endfor ?>
  </div>
</main>
