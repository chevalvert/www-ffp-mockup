<?php if ($action ?? false) : ?>
<button type="<?= $action ?>" class="btn" <?= isset($title) && $title ? "title='$title'" : '' ?> data-label="<?= $label ?>">
  <span class="btn__label">
    <?= $label ?>
  </span>
</button>

<?php else : ?>
<a href="<?= $url ?? '#' ?>" class="btn" <?= isset($title) && $title ? "title='$title'" : '' ?> data-label="<?= $label ?>">
  <span class="btn__label">
    <?= $label ?>
  </span>
</a>
<?php endif ?>
