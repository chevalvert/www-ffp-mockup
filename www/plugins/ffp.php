<?php

class FFP {
  private const SWATCHES = [
    ['rgb(82,253,121)','rgb(178,252,153)','rgb(101,47,81)','rgb(93,93,93)','rgb(101,59,43)','rgb(137,115,101)'],
    ['rgb(118,170,191)','rgb(93,93,93)','rgb(150,125,255)','rgb(157,172,255)','rgb(122,13,102)','rgb(163,31,153)'],
    ['rgb(40,74,0)','rgb(27,95,10)','rgb(142,44,163)','rgb(172,50,193)','rgb(255,96,194)','rgb(255,122,141)']
  ];

  private static $current_swatch = NULL;
  private static $previous_base_colors = [];
  private static $previous_base_colors_max_length = 2;

  /**
   * WIP
   * [paint description]
   * @return [type] [description]
   */
  public static function paint ($return = false) {
    $backgroundColor = FFP::computeColor();
    $color = FFPColorHelpers::computeContrast($backgroundColor);

    if ($return) return compact($backgroundColor, $color);
    echo "data-color style='background-color:$backgroundColor; color:$color'";
  }

  /**
   * Compute the right color based on a specific seeded swatch, a specific seed
   * for color order, and the previous computed colors
   * @return rgbString
   */
  private static function computeColor () {
    // Ensure a swatch has been computed
    if (FFP::$current_swatch == NULL) {
      // NOTE: One swatch is used for one day
      $seed = date('d');

      // Randomly pick one swatch, based on the specified $seed
      FFP::$current_swatch = FFP::random_of(FFP::SWATCHES, [], $seed);

      // NOTE: seed used for color picking in FFP::computeColor is set here so
      // that it won't be reset at each color pick, but at each swatch pick
      $seed = $_SERVER['REQUEST_URI'];
      srand(crc32($seed));
    }

    // NOTE: no seed is specified here when picking a random color from the
    // swatch because it has already been assigned after computing the swatch
    $color = FFP::random_of(FFP::$current_swatch, FFP::$previous_base_colors);

    // Keep track of the used colors so that we can exclude them from the next pick
    FFP::storeColor($color);

    // Shift the color's hue of $hueShift degrees
    $hueShift = time();
    return FFPColorHelpers::hueShift($color, $hueShift);
  }

  /**
   * Push the given color to the internal FFP colors history, so that it can
   * later be excluded from random pick
   * @param  rgbString
   */
  private static function storeColor ($color) {
    if (!$color) return false;

    array_push(FFP::$previous_base_colors, $color);

    // Constrain history length to a specified value
    while (count(FFP::$previous_base_colors) > FFP::$previous_base_colors_max_length)
      array_shift(FFP::$previous_base_colors);
    FFP::$previous_base_colors = array_values(FFP::$previous_base_colors);
  }

  /**
   * Return a seeded random value from an array, with an optionnal exclude list
   * @param  array
   * @param  array
   * @param  string|int
   * @return mixed
   */
  private static function random_of ($array, $exclude = [], $seed = NULL) {
    if ($seed) {
      // Make sure $seed is a number
      if (is_string($seed)) $seed = crc32($seed);
      srand($seed);
    }

    $possible_values = array_values(array_diff($array, $exclude));
    if (count($possible_values) === 1) return $possible_values[0];
    if (count($possible_values) === 0) return NULL;

    $index = rand(0, count($possible_values) - 1);
    return $possible_values[$index];
  }
}

class FFPColorHelpers {
  /**
   * Find the best contrasted color possible
   * @param  rgbString|RGB $color
   * @param  string $light
   * @param  string $dark
   * @return string
   */
  public const CONTRAST_THRESHOLD = 127; // 180
  public static function computeContrast ($color, $light = 'rgb(255, 255, 255)', $dark = 'rgb(0, 0, 0)') {
    $rgb = is_array($color) ? $color : FFPColorHelpers::rgbStringToRGB($color);
    $threshold = FFPColorHelpers::CONTRAST_THRESHOLD;
    return (round(((intval($rgb[0]) * 299) + (intval($rgb[1]) * 587) + (intval($rgb[2]) * 114)) / 1000) <= $threshold)
      ? $light
      : $dark;
  }

  /**
   * Shift the hue of a color
   * @param  rgbString
   * @param  integer
   * @return string
   */
  public static function hueShift ($rgbString, $shift = 0) {
    $rgb = FFPColorHelpers::rgbStringToRGB($rgbString);
    list($h, $s, $l) = FFPColorHelpers::rgbToHsl($rgb);

    $hsl = [($h + $shift) % 360, $s, $l];

    $rgb = FFPColorHelpers::hslToRgb($hsl);
    $rgbString = FFPColorHelpers::rgbToRGBString($rgb);
    return $rgbString;
  }

  /**
   * Parse a rgbString to a RGB array
   * @param  rgbString
   * @return array
   */
  public static function rgbStringToRGB ($rgbString) {
    list($r, $g, $b) = sscanf($rgbString, 'rgb(%d, %d, %d)');
    return [$r, $g, $b];
  }

  /**
   * Merge a RGB array into a rgbString
   * @param  array
   * @return rgbString
   */
  public static function rgbToRGBString ($rgb) {
    list ($r, $g, $b) = $rgb;
    return "rgb($r, $g, $b)";
  }

  /**
   * Convert a RGB array to a HSL array
   * @param  array
   * @return array
   */
  private static function rgbToHsl ($rgb) {
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

  /**
   * Convert a HSL array to a RGB array
   * @param  array
   * @return array
   */
  private static function hslToRgb ($hsl) {
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
