<?php if (isset($timestamp) && $timestamp) : ?>

<time datetime="<?= strftime('%F', $timestamp) ?>">
  <?= strftime($format ?? '%F', $timestamp) ?>
</time>

<?php endif ?>
