<?php
  require_once 'dev/_data.php';

  require_once 'dev/mock.php';
  require_once 'dev/slugify.php';
  require_once 'dev/snippet.php';
  require_once 'dev/webpack.php';

  $plugins = glob(__DIR__ . '/plugins/*.php');
  foreach ($plugins as $plugin) require_once($plugin);

  // Strip /index and .php to ensure consistent URI scheme
  $_GLOBALS['URI'] = str_replace(['/index', '.php'], '', $_SERVER['PHP_SELF']);

  // Redirect root to the home template
  if ($_GLOBALS['URI'] === '') $_GLOBALS['URI'] = '/home';

  $template = 'templates' . $_GLOBALS['URI'] . '.php';

  include file_exists($template)
    ? $template
    : 'templates/404.php';
