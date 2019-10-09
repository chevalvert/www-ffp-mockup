<header class="header" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <div class="max-width--container">
    <div class="header__content">
      <?php if (isset($date) && $date) : ?>
      <div class="header__date">
        <?php snippet('date', ['timestamp' => $date, 'format' => $format ?? '%d–%m-%Y']) ?>
      </div>
      <?php endif ?>

      <?php if (isset($context) && $context) : ?>
      <div class="header__context">
        <?= $context ?>
      </div>
      <?php endif ?>

      <?php if (isset($title) && $title) : ?>
      <h1 class="header__title">
        <?= (isset($link) && $link) ? "<a href='$link' title='Voir tout'>$title</a>" : $title ?>
        <?php isset($cta) && snippet('components/cta', $cta) ?>
      </h1>
      <?php endif ?>

      <?php if (isset($text) && $text) : ?>
      <div class="header__body">
        <?php snippet('text', compact('text')) ?>
      </div>
      <?php endif ?>
    </div>

    <?php if (isset($cover) && $cover) : ?>
    <div class="header__cover">
      <img src="<?= $cover ?>">
    </div>
    <?php endif ?>
  </div>
</header>
