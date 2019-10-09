<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if (isWebpack()) : ?>
    <base href="http://localhost:8080/">
    <script type="text/javascript">window.env = 'development'</script>
  <?php endif ?>

  <title>
    <?php
      // XXX
      // "site.title" on homepage
      // "page.title | site.title" on subpages
      mock('site.title')
    ?>
  </title>
  <?= liveCSS('assets/bundle.css') ?>
</head>
<body>
