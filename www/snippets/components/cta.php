<a href="<?= $url ?>" class="icon cta">
  <?php snippet("svg/$icon") ?>

  <?php if ($tooltip ?? null) : ?>
  <div class="cta__tooltip">
    <?= $tooltip ?>
  </div>
  <?php endif ?>
</a>
