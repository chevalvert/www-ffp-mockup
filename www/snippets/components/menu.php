<header class="menu">
  <div class="menu__regions">
    <div class="menu__logos">
      <a href="/" role="button">
        <?php snippet('svg/logo-main') ?>
        <?php snippet('svg/logo-baseline') ?>
      </a>
    </div>
  </div>

  <nav class="menu__nav" <?php FFP::paint() ?>>
    <ul>
      <?php foreach (mock('pages', true) as $title => $item) : ?>
        <li class="menu__link <?= strpos($_GLOBALS['URI'], slugify($title)) ? 'is-active' : '' ?>">
          <a href="<?= slugify($title) ?>"><?= $title ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>

  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
  <nav class="menu__nav" <?php FFP::paint() ?>></nav>
</header>
