<?php
  require_once 'dev/_data.php';

  require_once 'dev/mock.php';
  require_once 'dev/slugify.php';
  require_once 'dev/snippet.php';
  require_once 'dev/webpack.php';

  $plugins = glob(__DIR__ . '/plugins/*.php');
  foreach ($plugins as $plugin) require_once($plugin);

  setlocale(LC_ALL, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');

  // Get last part of url
  $_GLOBALS['URI'] = basename($_SERVER['PHP_SELF']);
  // Strip index.php and .php to ensure consistent URI scheme
  $_GLOBALS['URI'] = str_replace(['.php', 'index'], '', $_GLOBALS['URI']);
  // Redirect root to the home template
  if ($_GLOBALS['URI'] === '') $_GLOBALS['URI'] = 'home';

  // Make the mocked datas for the current page globally available
  $_GLOBALS['page'] = mock('pages.' . $_GLOBALS['URI']);

  // Find template based on specfied 'template' key in mocked data, or page URI if none
  $template = 'templates/' . ($_GLOBALS['page']['template'] ?? $_GLOBALS['URI']) . '.php';
  include file_exists($template)
    ? $template
    : 'templates/404.php';
