<?php

// SEE: https://github.com/getkirby-v2/toolkit/blob/master/lib/tpl.php
function snippet ($path, $data = array(), $return = true) {
  $file = __DIR__ . "/../snippets/$path.php";
  if (!file_exists($file)) {
    error_log("[snippet]: $path.php not found.");
    return false;
  }

  global $_GLOBALS;
  extract((array) $data);
  require($file);
}
