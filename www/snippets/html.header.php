<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if (isWebpack()) : // XXX: This whole if block can be safely deleted on production ?>
    <base href="http://localhost:8080/">
    <script type="text/javascript">window.env = 'development'</script>
  <?php endif ?>

  <title>
    <?php
      // XXX
      // "site.title" on homepage
      // "page.title | site.title" on subpages
      if ($title = $_GLOBALS['page']['title'] ?? null) echo "$title | ";
      echo mock('site.title');
    ?>
  </title>
  <?= liveCSS('assets/bundle.css') ?>

  <script type="text/javascript">
    window.FFP_SWATCH_INDEX = <?= json_encode(FFP::getCurrentSwatchIndex()) ?>;
    window.FFP_SWATCH_SHIFTED = <?= json_encode(FFP::$current_shifted_swatch) ?>;
  </script>
</head>
<body>
