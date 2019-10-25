<?php
  switch ($icon ?? 'add') {
    case 'add': $icon = '&#x266a;'; break;
    case 'edit': $icon = '&#x266b;'; break;
  }
?>

<a href="<?= $url ?>" class="icon cta">
  <div class="cta__icon"><?= $icon ?></div>
  <?php if ($tooltip ?? null) : ?>
  <div class="cta__tooltip">
    <?= $tooltip ?>
  </div>
  <?php endif ?>
</a>
