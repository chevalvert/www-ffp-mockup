<?php
  $message = ($region ?? false)
    ? "<a href='region?r=" . slugify($region) . "' class='icon'>$region</a>"
    : ($message ?? false);
?>

<header class="menu <?= ($region ?? false) ? 'has-region' : '' ?>">
  <div class="menu__content">
    <?php snippet('components/menu--regions') ?>
    <div class="container">
      <div class="menu__logos">
        <a href="/" class="icon">
          <?php snippet('svg/logo-main', ['title' => 'FFP']) ?>
          <?php ($message ?? false) || snippet('svg/logo-baseline', ['title' => 'Fédération Française du Paysage']) ?>
        </a>
      </div>
      <?= ($message ?? false) ? "<div class='menu__message'>$message</div>"  : '' ?>

      <label class="menu__regions-toggler" for="toggleRegionsMenu">Les régions</label>
    </div>
  </div>

  <nav class="menu__nav" data-test="<?= $_GLOBALS['URI'] ?>" role="navigation" <?php FFP::paint() ?>>
    <div class="container">
      <ul class="menu__links">
        <?php foreach (mock('menu') as $uri) : ?>
          <li class="menu__link <?= strpos($_GLOBALS['URI'], $uri) !== false ? 'is-active' : '' ?>">
            <a href="<?= $uri ?>"><?= mock("pages.$uri.title") ?></a>
          </li>
        <?php endforeach ?>
      </ul>

      <ul class="menu__links--alt">
        <li class="menu__link">
          <a href="search" title="Rechercher…" class="icon">
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
