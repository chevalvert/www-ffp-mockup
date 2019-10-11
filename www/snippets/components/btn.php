<?php if ($action === 'submit') : ?>
<button type="<?= $action ?>" role="button" class="btn" <?= isset($title) && $title ? "title='$title'" : '' ?> data-label="<?= $label ?>">
  <span class="btn__label">
    <?= $label ?>
  </span>
</button>

<?php else : ?>
<a href="<?= $action ?>" role="button" class="btn" <?= isset($title) && $title ? "title='$title'" : '' ?> data-label="<?= $label ?>">
  <span class="btn__label">
    <?= $label ?>
  </span>
</a>
<?php endif ?>
