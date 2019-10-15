<section class="section <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <div class="container">
    <div class="section__content">
      <?php if ($title ?? null) : ?>
      <h2 class="section__title">
        <?= ($link ?? null) ? "<a href='$link' title='Voir plus'>$title</a>" : $title ?>
      </h2>
      <?php endif ?>

      <?php if ($text ?? null) : ?>
      <div class="section__body">
        <?= $text ?>
      </div>
      <?php endif ?>
    </div>
  </div>

  <?php if ($columns ?? null) : ?>
    <div class="section__columns container" data-length=<?= count($columns) ?>>
      <?php foreach ($columns as $col) : ?>
        <div class="section__column">
          <?= isset($col['title']) && $col['title'] ? '<h3>' . $col['title'] . '</h3>' : '' ?>
          <?= $col['text'] ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif ?>

  <?php if ($btn ?? null) : ?>
    <div class="container">
      <div class="section__button-container">
        <?php snippet('components/btn', $btn) ?>
      </div>
    </div>
  <?php endif ?>

</section>
