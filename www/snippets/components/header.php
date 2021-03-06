<header class="header <?= $class ?? '' ?>" <?php ($PAINT ?? true) &&  FFP::paint(($PAINT ?? false) !== 'same') ?> <?= (($PAINT ?? false) === 'same') ? 'data-same-color="true"' : ''?>>
  <div class="container">
    <div class="header__content">
      <?php if ($date ?? null) : ?>
      <div class="header__date">
        <?php snippet('date', ['timestamp' => $date, 'format' => $format ?? '%d–%m-%Y']) ?>
      </div>
      <?php endif ?>

      <?php if ($context ?? null) : ?>
      <div class="header__context">
        <?= $context ?>
      </div>
      <?php endif ?>

      <?php if ($title ?? null) : ?>
      <h1 class="header__title">
        <?= (isset($link) && $link) ? "<a href='$link' title='Voir plus'>$title</a>" : $title ?>
        <?php isset($cta) && snippet('components/cta', $cta) ?>
      </h1>
      <?php endif ?>

      <?php if ($text ?? null) : ?>
      <div class="header__body">
        <?= $text ?>
      </div>
      <?php endif ?>
    </div>

    <?php if ($cover ?? null) : ?>
      <div class="header__cover" data-lazyload data-background-image="<?= $cover ?>"></div>
    <?php endif ?>
  </div>
</header>
