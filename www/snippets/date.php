<?php if ($timestamp ?? null) : ?>

<time datetime="<?= strftime('%F', $timestamp) ?>">
  <?= strftime($format ?? '%F', $timestamp) ?>
</time>

<?php endif ?>
