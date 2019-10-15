<?php

// SEE: https://github.com/getkirby-v2/toolkit/blob/master/lib/tpl.php
function snippet ($path, $data = array()) {
  $file = __DIR__ . "/../snippets/$path.php";
  if (!file_exists($file)) throw new Exception("Snippet not found: $path.php");

  global $_GLOBALS;
  extract((array) $data);
  require($file);
}
