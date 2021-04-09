<?php

class FFP {
  // This is disabled because the colors were ugly. Previously 1/60
  public const HUE_SHIFT_FACTOR = 0;
  public const COLORS = [
    'rgb(120, 0, 100)',
    'rgb(160, 15, 150)',
    'rgb(200, 30, 200)',
    'rgb(250, 50, 255)',
    'rgb(255, 90, 190)',
    'rgb(255, 120, 140)',
    'rgb(255, 165, 165)',
    'rgb(255, 215, 235)',
    'rgb(80, 20, 100)',
    'rgb(110, 30, 130)',
    'rgb(140, 35, 160)',
    'rgb(170, 40, 190)',
    'rgb(180, 60, 255)',
    'rgb(190, 100, 255)',
    'rgb(200, 150, 255)',
    'rgb(210, 200, 255)',
    'rgb(45, 0, 150)',
    'rgb(85, 20, 200)',
    'rgb(110, 40, 255)',
    'rgb(130, 80, 255)',
    'rgb(150, 120, 255)',
    'rgb(160, 170, 255)',
    'rgb(180, 205, 255)',
    'rgb(195, 235, 255)',
    'rgb(0, 0, 90)',
    'rgb(0, 0, 160)',
    'rgb(0, 0, 255)',
    'rgb(0, 120, 255)',
    'rgb(60, 185, 255)',
    'rgb(0, 220, 255)',
    'rgb(60, 255, 255)',
    'rgb(220, 255, 255)',
    'rgb(30, 60, 90)',
    'rgb(60, 100, 130)',
    'rgb(80, 130, 160)',
    'rgb(100, 160, 180)',
    'rgb(120, 170, 190)',
    'rgb(150, 180, 200)',
    'rgb(170, 200, 210)',
    'rgb(200, 220, 230)',
    'rgb(0, 60, 40)',
    'rgb(0, 90, 60)',
    'rgb(0, 120, 90)',
    'rgb(0, 150, 120)',
    'rgb(20, 180, 150)',
    'rgb(60, 230, 200)',
    'rgb(120, 245, 210)',
    'rgb(180, 255, 255)',
    'rgb(40, 75, 0)',
    'rgb(30, 95, 20)',
    'rgb(20, 115, 40)',
    'rgb(10, 170, 50)',
    'rgb(0, 210, 70)',
    'rgb(0, 255, 50)',
    'rgb(90, 255, 130)',
    'rgb(180, 255, 160)',
    'rgb(140, 115, 0)',
    'rgb(180, 140, 0)',
    'rgb(220, 180, 0)',
    'rgb(255, 220, 0)',
    'rgb(255, 255, 40)',
    'rgb(255, 250, 100)',
    'rgb(255, 245, 160)',
    'rgb(255, 255, 200)',
    'rgb(100, 45, 80)',
    'rgb(140, 60, 60)',
    'rgb(180, 75, 40)',
    'rgb(200, 90, 20)',
    'rgb(225, 115, 10)',
    'rgb(255, 140, 0)',
    'rgb(255, 170, 75)',
    'rgb(255, 200, 150)',
    'rgb(90, 0, 40)',
    'rgb(150, 0, 60)',
    'rgb(195, 0, 50)',
    'rgb(220, 0, 40)',
    'rgb(255, 0, 20)',
    'rgb(255, 60, 60)',
    'rgb(255, 120, 120)',
    'rgb(250, 190, 190)',
    'rgb(40, 20, 0)',
    'rgb(70, 40, 20)',
    'rgb(100, 60, 45)',
    'rgb(135, 115, 100)',
    'rgb(175, 145, 130)',
    'rgb(210, 180, 160)',
    'rgb(220, 200, 180)',
    'rgb(235, 220, 200)'
  ];

  public static $current_swatch = NULL;
  public static $current_shifted_swatch = NULL;

  private static $last_applied_color = NULL;
  private static $previous_colors = [];
  private static $previous_colors_max_length = 2;

  public static function paint ($recompute = true, $return = false) {
    $backgroundColor = $recompute
      ? FFP::nextColor()
      : (FFP::$last_applied_color ?? FFP::nextColor());

    FFP::$last_applied_color = $backgroundColor;
    $color = FFPColorHelpers::computeContrast($backgroundColor);

    if ($return) return compact('backgroundColor', 'color');

    if (!$recompute) echo "data-color-no-recompute ";
    echo 'data-color="' . implode(',', FFPColorHelpers::rgbStringToRGB($backgroundColor)) . '" ';
    echo "style='background-color:$backgroundColor; color:$color'";
  }

  // Kept for retro-compatibility
  public static function getCurrentSwatchIndex () {
    if (FFP::$current_swatch == NULL) FFP::computeSwatch();
    return -1;
  }

  public static function computeSwatch () {
    // Randomly pick one swatch, based on the specified $seed
    // NOTE: Only one swatch is generated per day
    $seed = date('ymd');
    srand($seed);

    // Group FFP::COLORS by HUE (every 8 colors) and take three random hues
    $hues = array_slice(
      FFP::shuffleArray(
        array_chunk(FFP::COLORS, 8),
        $seed
      ),
      0, 3
    );

    FFP::$current_swatch = [];

    // Push the two darks colors
    $i = rand(0, 1);
    FFP::$current_swatch[] = $hues[0][$i++];
    FFP::$current_swatch[] = $hues[0][$i++];

    // Push the two medium colors
    if ($i < 3) $i = rand(0, 1);
    FFP::$current_swatch[] = $hues[1][$i++];
    FFP::$current_swatch[] = $hues[1][$i++];

    // Push the two bright colors
    $i += rand(0, 1);
    FFP::$current_swatch[] = $hues[2][$i++];
    FFP::$current_swatch[] = $hues[2][$i++];

    // Shift the color's hue of $hueShift degrees
    FFP::$current_shifted_swatch = FFP::HUE_SHIFT_FACTOR == 0
      ? FFP::$current_swatch
      : (
        array_map(function ($rgbString) {
          $hueShift = ceil(time() * FFP::HUE_SHIFT_FACTOR);
          return FFPColorHelpers::hueShift($rgbString, $hueShift);
        }, FFP::$current_swatch)
      );
  }

  private static function nextColor () {
    // Ensure a swatch has been computed
    if (FFP::$current_swatch == NULL) FFP::computeSwatch();

    // NOTE: no seed is specified here when picking a random color from the
    // swatch because it has already been assigned after computing the swatch
    $color = FFP::randomOfArray(FFP::$current_shifted_swatch, FFP::$previous_colors);

    // Keep track of the used colors so that we can exclude them from the next pick
    return FFP::storeColor($color);
  }

  private static function storeColor ($color) {
    if (!$color) return false;

    array_push(FFP::$previous_colors, $color);

    // Constrain history length to a specified value
    while (count(FFP::$previous_colors) > FFP::$previous_colors_max_length)
      array_shift(FFP::$previous_colors);
    FFP::$previous_colors = array_values(FFP::$previous_colors);

    return $color;
  }

  private static function shuffleArray ($array, $seed) {
    srand($seed);
    for ($i = count($array) - 1; $i > 0; $i--) {
        $j = rand(0, $i);
        $tmp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $tmp;
    }

    return $array;
  }

  private static function randomOfArray ($array, $exclude = [], $seed = NULL) {
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
