<?php snippet('html.header') ?>
<?php snippet('components/menu', ['region' => mock('regions.' . $_GET['r'])]) ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/header', [
      'DO_NOT_PAINT' => true,
      'title' => mock('pages.region.title'),
      'text' => mock('pages.region.intro'),
      'cover' => 'https://picsum.photos/id/15/1600/1000'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Contact',
      'text' => mock('pages.region.contact')
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'À ne pas manquer dans la région',
      'link' => 'actualites/events',
      // XXX: limit to 4 most recent events
      'pages' => mock('pages.actualites.events'),
      'renderer' => 'components/preview--event',
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Soumettre un événement',
        'url' => 'actualites/events/add'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Actualités de la région',
      'link' => 'actualites',
      // XXX: limit to 4 most recent articles filtered by this region
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Soumettre une actualité',
        'url' => 'actualites/form-article'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets de l’observatoire de la région',
      'link' => 'projets-et-actions/observatoire-des-projets',
      // XXX: limit to 4 most recent articles filtered by this region
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets des adhérents de la région',
      'link' => 'annuaire',
      // XXX: limit to 4 most random user projects filtered by this region
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
