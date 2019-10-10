<a href="<?= $action ?>" role="button" class="cta">
  <?php snippet("svg/$icon") ?>

  <?php if ($tooltip ?? null) : ?>
  <div class="cta__tooltip">
    <?= $tooltip ?>
  </div>
  <?php endif ?>
</a>
