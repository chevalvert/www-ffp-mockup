<?php

// NOTE: This is for prototyping purpose only : the mock data structure does not
// need to match the final backend structure.
static $mocked_data = [
  'site' => [
    'title' => 'Fédération Française du Paysage'
  ],
  'pages' => [
    'La FFP' => ['title' => 'hello'],
    'Actualités' => [],
    'Annuaire' => [],
    'Annonces' => [],
    'Observatoire des projets' => [],
    'Expériences de paysage' => []
  ]
];

function mock ($key = 'undefined', $echo = false) {
  global $mocked_data;
  $data = getValueByKey($key, $mocked_data, $key);
  if ($echo) echo $data;
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
