<?php if (count($pages ?? []) || !($HIDE_EMPTY ?? false)) : ?>

<section class="pages--grid <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint(!($NO_NEW_COLOR ?? false)) ?> <?= ($NO_NEW_COLOR ?? false) ? 'data-same-color="true"' : ''?>>
  <div class="container">

    <?php if (isset($title) && $title) : ?>
    <h2 class="pages--grid__title">
      <?= ($link ?? null) ? "<a href='$link' title='Voir plus'>$title</a>" : $title ?>
      <?php ($cta ?? null) && snippet('components/cta', $cta) ?>
    </h2>
    <?php endif ?>

    <?php if (isset($pages) && count($pages)) : ?>
      <ul class="pages--grid__entries">
        <?php foreach ($pages as $page) : ?>
          <li class="pages--grid__entry">
            <?php snippet($renderer, compact('page')) ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php else : ?>
      <?= $empty_placeholder ?? 'Aucune page disponible.' ?>
    <?php endif ?>

    <?php if ($btn ?? null) : ?>
      <div class="pages--grid__button-container">
        <?php snippet('components/btn', $btn) ?>
      </div>
    <?php endif ?>

  </div>
</section>

<?php endif ?>
