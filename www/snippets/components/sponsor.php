<section class="sponsor <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint(!($NO_NEW_COLOR ?? false)) ?> <?= ($NO_NEW_COLOR ?? false) ? 'data-same-color="true"' : ''?>>
  <div class="container">
      <div class="sponsor__logo">
        <a href="<?= $url ?>" target="_blank" class="icon">
          <img src="<?= $logo_url ?>" alt="<?= $name ?>">
        </a>
      </div>

      <div class="sponsor__baseline">
        <a href="<?= $url ?>" target="_blank">
          <?= $name . '&nbsp;&mdash;&nbsp;' . $baseline ?>
        </a>
      </div>

      <div class="sponsor__label"><?= $label ?? 'Partenaire' ?></div>
    </a>
  </div>
</section>
