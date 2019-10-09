<header class="menu">
  <div class="menu__regions max-width--container">
    <div class="menu__logos">
      <a href="/" role="button">
        <?php snippet('svg/logo-main') ?>
        <?php snippet('svg/logo-baseline') ?>
      </a>
    </div>
  </div>

  <nav class="menu__nav" role="navigation" <?php FFP::paint() ?>>
    <div class="max-width--container">
      <ul class="menu__links">
        <?php foreach (mock('pages', true) as $title => $item) : ?>
          <li class="menu__link <?= strpos($_GLOBALS['URI'], slugify($title)) !== false ? 'is-active' : '' ?>">
            <a href="<?= slugify($title) ?>"><?= $title ?></a>
          </li>
        <?php endforeach ?>
      </ul>

      <ul class="menu__links--alt">
        <li class="menu__link">
          <a href="rechercher" title="Rechercher…" role="button">
            <?php snippet('svg/icon-search') ?>
          </a>
        </li>
        <li class="menu__link <?= strpos($_GLOBALS['URI'], 'profil') !== false ? 'is-active' : '' ?>">
          <a href="profil" title="Voir mon profil">Mon profil</a>
        </li>
      </div>
    </div>
  </nav>
</header>
