<img
  width="<?= $width ?>"
  height="<?= $height ?>"
  <?php if ($lazy ?? false) : ?>
    data-lazyload
    data-src="<?= $url ?>"
    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 <?= $width ?> <?= $height ?>'%3E%3C/svg%3E"
  <?php else : ?>
    src="<?= $url ?>"
  <?php endif ?>
>
<noscript><img src="<?= $url ?>"/></noscript>
