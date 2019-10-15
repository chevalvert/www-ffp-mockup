<?php

class FFP {
  public const SWATCHES = [
    59 => ['rgb(198,17,52)','rgb(223,20,42)','rgb(255,96,192)','rgb(255,122,141)','rgb(255,170,69)','rgb(255,199,148)'],
    60 => ['rgb(202,47,203)','rgb(254,68,255)','rgb(181,73,255)','rgb(191,107,255)','rgb(255,244,155)','rgb(254,254,218)'],
    61 => ['rgb(221,179,0)','rgb(254,218,0)','rgb(0,207,54)','rgb(1,252,1)','rgb(35,254,255)','rgb(219,255,255)'],
    62 => ['rgb(108,58,254)','rgb(128,90,255)','rgb(118,170,191)','rgb(149,180,201)','rgb(82,253,121)','rgb(178,252,153)'],
    63 => ['rgb(101,59,43)','rgb(137,115,101)','rgb(229,115,0)','rgb(255,139,0)','rgb(169,202,211)','rgb(200,220,231)'],
    64 => ['rgb(0,119,89)','rgb(0,149,119)','rgb(150,125,255)','rgb(157,172,255)','rgb(114,244,208)','rgb(178,254,224)'],
    65 => ['rgb(182,75,39)','rgb(202,91,12)','rgb(255,253,0)','rgb(255,248,87)','rgb(200,153,255)','rgb(210,201,254)'],
    66 => ['rgb(77,130,162)','rgb(98,160,181)','rgb(255,24,24)','rgb(254,65,61)','rgb(255,166,166)','rgb(255,216,235)'],
    67 => ['rgb(142,44,163)','rgb(172,50,193)','rgb(45,186,255)','rgb(0,220,255)','rgb(221,200,179)','rgb(236,219,199)'],
    68 => ['rgb(11,114,33)','rgb(1,168,36)','rgb(0,179,149)','rgb(44,229,198)','rgb(180,206,255)','rgb(193,236,255)'],
    69 => ['rgb(1,37,255)','rgb(0,125,254)','rgb(177,145,130)','rgb(211,180,159)','rgb(254,122,120)','rgb(255,191,191)'],

    81 => ['rgb(41,20,1)','rgb(71,40,19)','rgb(108,58,254)','rgb(130,89,255)','rgb(255,96,194)','rgb(255,122,141)'],
    82 => ['rgb(82,25,102)','rgb(111,37,132)','rgb(0,119,89)','rgb(43,121,107)','rgb(255,253,0)','rgb(255,248,87)'],
    83 => ['rgb(76,129,160)','rgb(98,160,181)','rgb(255,166,166)','rgb(255,216,235)','rgb(0,6,92)','rgb(1,19,163)'],
    84 => ['rgb(181,73,255)','rgb(191,107,255)','rgb(227,116,0)','rgb(255,140,1)','rgb(221,200,179)','rgb(235,220,199)'],
    85 => ['rgb(114,244,208)','rgb(179,254,224)','rgb(141,114,1)','rgb(181,140,0)','rgb(255,24,24)','rgb(254,65,61)'],
    86 => ['rgb(177,145,130)','rgb(211,180,159)','rgb(180,206,255)','rgb(193,236,255)','rgb(202,47,203)','rgb(254,68,255)'],
    87 => ['rgb(255,244,155)','rgb(254,254,218)','rgb(91,3,41)','rgb(152,11,63)','rgb(45,186,255)','rgb(0,220,255)'],
    88 => ['rgb(170,200,210)','rgb(200,220,231)','rgb(38,74,0)','rgb(28,94,7)','rgb(183,76,40)','rgb(202,91,12)'],
    89 => ['rgb(121,12,101)','rgb(163,31,153)','rgb(1,37,255)','rgb(0,125,254)','rgb(0,207,54)','rgb(1,252,0)'],
    90 => ['rgb(255,170,67)','rgb(255,200,149)','rgb(142,44,163)','rgb(172,50,193)','rgb(0,179,147)','rgb(44,229,198)'],
    91 => ['rgb(35,255,255)','rgb(219,255,255)','rgb(11,114,33)','rgb(1,168,36)','rgb(198,16,54)','rgb(223,20,42)'],
    92 => ['rgb(222,180,0)','rgb(254,218,0)','rgb(255,121,118)','rgb(255,191,191)','rgb(28,61,92)','rgb(57,101,130)'],
    93 => ['rgb(44,18,153)','rgb(84,37,203)','rgb(200,153,255)','rgb(210,201,255)','rgb(0,59,39)','rgb(0,89,59)'],
    94 => ['rgb(82,253,121)','rgb(178,252,153)','rgb(101,47,81)','rgb(93,93,93)','rgb(101,59,43)','rgb(137,115,101)'],
    95 => ['rgb(118,170,191)','rgb(93,93,93)','rgb(150,125,255)','rgb(157,172,255)','rgb(122,13,102)','rgb(163,31,153)'],
  ];

  // IMPORTANT: this color is hue shifted, meaning that comparison with
  // FFP::SWATCHES will result in unexpected behaviors
  public static $last_computed_color = NULL;
  public static $current_swatch = NULL;

  private static $previous_base_colors = [];
  private static $previous_base_colors_max_length = 2;

  /**
   * Apply FPP color scheme to an HTML element by applying all attributes needed
   */
  public static function paint ($recompute = true, $return = false) {
    $backgroundColor = $recompute
      ? FFP::computeColor()
      : FFP::$last_computed_color;

    $color = FFPColorHelpers::computeContrast($backgroundColor);

    if ($return) return compact('backgroundColor', 'color');

    if (!$recompute) echo "data-color-no-recompute ";
    echo 'data-color="' . implode(',', FFPColorHelpers::rgbStringToRGB($backgroundColor)) . '" ';
    // TODO allow style injection
    echo "style='background-color:$backgroundColor; color:$color'";
  }

  /**
   * Get the key of the current swatch, computing one if none computed yet
   * @return int
   */
  public static function getCurrentSwatchIndex () {
    if (FFP::$current_swatch == NULL) FFP::computeSwatch();
    return array_search(FFP::$current_swatch, FFP::SWATCHES, true);
  }

  /**
   * Compute a swatch based on a daily seed
   */
  public static function computeSwatch () {
    // NOTE: One swatch is used for one day
    $seed = date('d');

    // Randomly pick one swatch, based on the specified $seed
    FFP::$current_swatch = FFP::random_of(FFP::SWATCHES, [], $seed);

    // NOTE: seed used for color picking in FFP::computeColor is set here so
    // that it won't be reset at each color pick, but at each swatch pick
    $seed = 1; // $_SERVER['PHP_SELF'];
    srand(crc32($seed));
  }

  /**
   * Compute the right color based on a specific seeded swatch, a specific seed
   * for color order, and the previous computed colors
   * @return rgbString
   */
  private static function computeColor () {
    // Ensure a swatch has been computed
    if (FFP::$current_swatch == NULL) FFP::computeSwatch();

    // NOTE: no seed is specified here when picking a random color from the
    // swatch because it has already been assigned after computing the swatch
    $color = FFP::random_of(FFP::$current_swatch, FFP::$previous_base_colors);

    // Keep track of the used colors so that we can exclude them from the next pick
    FFP::storeColor($color);

    // Shift the color's hue of $hueShift degrees
    $hueShift = time();
    FFP::$last_computed_color = FFPColorHelpers::hueShift($color, $hueShift);
    return FFP::$last_computed_color;
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
