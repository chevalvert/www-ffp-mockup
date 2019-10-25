<?php

// SEE: https://stackoverflow.com/a/2955878
function slugify ($text) {
  // Replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // Transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // Remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // Trim
  $text = trim($text, '-');

  // Remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // Lowercase
  $text = strtolower($text);

  return empty($text) ? 'n-a' : $text;
}
