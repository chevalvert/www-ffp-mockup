<?php
  require_once 'dev/slugify.php';
  require_once 'dev/snippet.php';
  require_once 'dev/webpack.php';

  require_once 'dev/mock-data.php';


  // Strip /index and .php to ensure consistent URI scheme
  $URI = str_replace(['/index', '.php'], '', $_SERVER['PHP_SELF']);

  // Redirect root to the home template
  if ($URI === '') $URI = '/home';

  $template = 'templates' . $URI . '.php';

  include file_exists($template)
    ? $template
    : 'templates/404.php';
