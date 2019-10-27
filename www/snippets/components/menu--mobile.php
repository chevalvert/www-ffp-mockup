<?php
  $message = ($region ?? false)
    ? "<a href='region?r=" . slugify($region) . "' class='icon'>$region</a>"
    : ($message ?? false);
?>

<header class="menu--mobile <?= ($region ?? false) ? 'has-region' : '' ?>">
  <input type="checkbox" id="toggleMenuMobile">

  <div class="menu--mobile__content">
    <div class="container">
      <div class="menu--mobile__logos">
        <a href="/" class="icon">
          <?php snippet('svg/logo-main', ['title' => 'FFP']) ?>
          <?php snippet('svg/logo-baseline', ['title' => 'Fédération Française du Paysage']) ?>
        </a>
      </div>
    </div>
  </div>

  <?php if ($message ?? false): ?>
    <div class='menu--mobile__message'>
      <?= $message ?>
    </div>
  <?php endif ?>

  <label class="menu--mobile__toggler" for="toggleMenuMobile"></label>

  <nav class="menu--mobile__nav">
    <div class="container">
      <ul class="menu--mobile__links">
        <li class="menu--mobile__link">
          <a href="search" title="Rechercher…" class="icon menu--mobile__search-icon">&#x2669;</a>
        </li>

        <?php foreach (mock('menu') as $uri) : ?>
          <li class="menu--mobile__link <?= strpos($_GLOBALS['URI'], $uri) !== false ? 'is-active' : '' ?>">
            <a href="<?= $uri ?>"><?= mock("pages.$uri.title") ?></a>
          </li>
        <?php endforeach ?>

        <li class="menu--mobile__link has-borders <?= strpos($_GLOBALS['URI'], 'profil') !== false ? 'is-active' : '' ?>">
          <a href="profil" title="Voir mon profil">Mon profil</a>
        </li>

        <?php foreach (mock('regions') as $slug => $region) : ?>
          <li class="menu--mobile__link <?= ($_GET['r'] ?? false) === $slug ? 'is-active' : '' ?>">
            <a href="region?r=<?= $slug ?>"><?= $region ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </nav>
</header>
