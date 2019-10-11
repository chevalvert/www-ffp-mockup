<input type="checkbox" id="toggleRegionsMenu">
<div class="menu--regions">
  <div class="container">
    <div class="menu__logos">
      <a href="/" role="button">
        <?php snippet('svg/logo-main', ['title' => 'FFP']) ?>
        <?php snippet('svg/logo-baseline', ['title' => 'Fédération Française du Paysage']) ?>
      </a>
    </div>

    <label class="menu__regions-toggler" for="toggleRegionsMenu">Fermer</label>
  </div>

  <div class="menu--regions__list">
    <ul class="container">
      <?php // XXX ?>
      <?php foreach (mock('regions', true) as $slug => $region) : ?>
        <li class="<?= ($_GET['r'] ?? false) === $slug ? 'is-active' : '' ?>">
          <a href="region?r=<?= $slug ?>" role="button">
            <?= $region['title'] ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>
