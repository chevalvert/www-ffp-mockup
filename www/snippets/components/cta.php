<a href="<?= $action ?>" role="button" class="cta">
  <?php snippet("svg/$icon") ?>

  <?php if (isset($tooltip) && $tooltip) : ?>
  <div class="cta__tooltip">
    <?= $tooltip ?>
  </div>
  <?php endif ?>
</a>
