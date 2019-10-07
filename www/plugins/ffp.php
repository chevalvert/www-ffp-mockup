<?php

class FFP {
  const SWATCHES = [
    ['rgb(82,253,121)','rgb(178,252,153)','rgb(101,47,81)','rgb(93,93,93)','rgb(101,59,43)','rgb(137,115,101)'],
    ['rgb(118,170,191)','rgb(93,93,93)','rgb(150,125,255)','rgb(157,172,255)','rgb(122,13,102)','rgb(163,31,153)'],
    ['rgb(40,74,0)','rgb(27,95,10)','rgb(142,44,163)','rgb(172,50,193)','rgb(255,96,194)','rgb(255,122,141)']
  ];

  static $current_swatch = NULL;
  static $previous_base_colors = [];

  static function paint () {
    FFP::computeSwatch();

    $color = FFP::computeColor();
    $contrast = FFPColorHelpers::computeContrast($color);
    echo "data-color style='background-color:$color; color:$contrast'";
  }

  static function computeSwatch () {
    // NOTE: one swatch is used for one day
    $seed = date('d');
    FFP::$current_swatch = FFP::fisherYatesShuffle(FFP::SWATCHES, $seed);
  }

  static function computeColor () {
    // Ensure a swatch has been computed
    if (FFP::$current_swatch == NULL) FFP::computeSwatch();

    // WIPBUG ???
    // TODO: seed based on URI
    $seed = crc32($_SERVER['REQUEST_URI']);
    $color = FFP::fisherYatesShuffle(FFP::$current_swatch, $seed);

    // TODO: ensure this colors is not in previous colors (see GPLA/randomChain)
    FFP::$previous_base_colors[] = $color;
    return FFP::hueShift($color);
  }

  static function hueShift ($rgbString) {
    $rgb = FFPColorHelpers::parseRGBString($rgbString);
    list($h, $s, $l) = FFPColorHelpers::rgbToHsl($rgb);

    $shift = time();
    $hsl = [($h + $shift) % 360, $s, $l];

    $rgb = FFPColorHelpers::hslToRgb($hsl);
    $rgbString = FFPColorHelpers::rgbToRGBString($rgb);
    return $rgbString;
  }

  // SEE: https://en.wikipedia.org/wiki/Fisher–Yates_shuffle
  static function fisherYatesShuffle ($items, $seed = 0) {
    @mt_srand($seed);
    for ($i = count($items) - 1; $i > 0; $i--) {
      $j = @mt_rand(0, $i);
      $tmp = $items[$i];
      $items[$i] = $items[$j];
      $items[$j] = $tmp;
    }

    return $items[0];
  }
}

class FFPColorHelpers {
  static function computeContrast ($color, $light = 'rgb(255, 255, 255)', $dark = 'rgb(0, 0, 0)') {
    $rgb = is_array($color) ? $color : FFPColorHelpers::parseRGBString($color);
    $threshold = 127; // 180
    return (round(((intval($rgb[0]) * 299) + (intval($rgb[1]) * 587) + (intval($rgb[2]) * 114)) / 1000) <= $threshold)
    ? $light
    : $dark;
  }

  static function parseRGBString ($rgbString) {
    list($r, $g, $b) = sscanf($rgbString, 'rgb(%d, %d, %d)');
    return [$r, $g, $b];
  }

  static function rgbToRGBString ($rgb) {
    list ($r, $g, $b) = $rgb;
    return "rgb($r, $g, $b)";
  }

  static function rgbToHsl ($rgb) {
    list($r, $g, $b) = $rgb;
    $oldR = $r;
    $oldG = $g;
    $oldB = $b;
    $r /= 255;
    $g /= 255;
    $b /= 255;
    $max = max($r, $g, $b);
    $min = min($r, $g, $b);
    $h;
    $s;
    $l = ($max + $min) / 2;
    $d = $max - $min;
    if ($d == 0) {
      // Achromatic
      $h = $s = 0;
    } else {
      $s = $d / (1 - abs(2 * $l - 1));
      switch ($max) {
        case $r:
          $h = 60 * fmod((($g - $b) / $d), 6);
          if ($b > $g) $h += 360;
          break;
        case $g:
          $h = 60 * (($b - $r) / $d + 2);
          break;
        case $b:
          $h = 60 * (($r - $g) / $d + 4);
          break;
      }
    }
    return [round($h, 2), round($s, 2), round($l, 2)];
  }

  static function hslToRgb ($hsl) {
    list($h, $s, $l) = $hsl;
    $r;
    $g;
    $b;
    $c = (1 - abs(2 * $l - 1)) * $s;
    $x = $c * (1 - abs(fmod(($h / 60), 2) - 1));
    $m = $l - ($c / 2);
    if ($h < 60) {
      $r = $c;
      $g = $x;
      $b = 0;
    } else if ($h < 120) {
      $r = $x;
      $g = $c;
      $b = 0;
    } else if ($h < 180) {
      $r = 0;
      $g = $c;
      $b = $x;
    } else if ($h < 240) {
      $r = 0;
      $g = $x;
      $b = $c;
    } else if ($h < 300) {
      $r = $x;
      $g = 0;
      $b = $c;
    } else {
      $r = $c;
      $g = 0;
      $b = $x;
    }
    $r = ($r + $m) * 255;
    $g = ($g + $m) * 255;
    $b = ($b + $m) * 255;

    return [floor($r), floor($g), floor($b)];
  }
}
