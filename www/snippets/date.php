<?php
/*
 * snippet('date', [
 *   'timestamp' => <required>
 *   'format' => '%F'
 * ]);
 *
 */
?>

<?php if ($timestamp ?? null) : ?>

<time datetime="<?= strftime('%F', $timestamp) ?>">
  <?= strftime($format ?? '%F', $timestamp) ?>
</time>

<?php endif ?>
