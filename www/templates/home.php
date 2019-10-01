<?php snippet('header') ?>

<main>
  <nav>
    <?php foreach (mock('pages') as $title => $url) : ?>
      <li><a href="<?= slugify($title) ?>"><?= $title ?></a></li>
    <?php endforeach ?>
  </nav>

  <?= mock('pages.La FFP.title') ?>
</main>
<?php snippet('footer') ?>
