<?php

// NOTE: This is for prototyping purpose only : the mock data structure does not
// need to match the final backend structure.
function mock ($key = 'undefined') {
  global $_GLOBALS;

  $data = getValueByKey($key, (array)$_GLOBALS['__dev.data'], $key);
  return $data;
}

// Allow accessing a nested prop by chaining keys using the dot notation
function getValueByKey ($key, array $data, $default = null) {
  if (!is_string($key) || empty($key) || !count($data)) return $default;
  if (!strpos($key, '.')) return array_key_exists($key, $data) ? $data[$key] : $default;

  $keys = explode('.', $key);
  foreach ($keys as $innerKey) {
    if (!array_key_exists($innerKey, $data)) return $default;
    $data = $data[$innerKey];
  }
  return $data;
}
