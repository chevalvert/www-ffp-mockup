<?php snippet('html.header') ?>
<?php snippet('components/menu', ['region' => mock('regions.' . $_GET['r'])]) ?>

<main role="main" id="main">
  <div class="barba-container">
    <?php snippet('components/header', [
      'DO_NOT_PAINT' => true,
      'title' => 'Entre champs et volcans',
      'text' => 'Actuellement, l’activisme de la technicité informatisée nous incite à catapulter le trabajo, le travail, la machinale, la robotisation belvédère, Bonne Année. Vous avez le système de check-up vers les anti-valeurs, vous avez le curuna, or la société civile autour de l’ergonométrie vise à se baser sur cet environnement de 2 345 410 km² comparé la rénaque, tu sais ça. Lorsque l’on parle des végétaliens, du végétalisme, l’activisme de l’orthodoxisation doit se baser sur les encadrés propres aux congolais, Bonne Année. Parallèlement, la compétence vers la compromettance pour des saint-bioules se résoud à aider la nucléarité axée sur la réalité du terrain, je vous en prie.',
      'cover' => 'https://picsum.photos/id/11/1600/1000'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Contact',
      'text' => "<b>Séverine Clédat</b> présidente
        <b>Fanny Cassani</b> vice-présidente, déléguée régionale de Bourgogne-Franche-Compté
        <b>David Schulz</b> vice-président
        <b>Samuel Bonnefoi</b> secrétaire
        <b>Pricilla Tétaz</b> vice-secrétaire
        <b>Christelle David</b> trésorière
        <b>Clément Forest</b> vice trésorière

        <b>Permanence</b> 9 rue Danielle Faynel-Duclos 69003&nbsp;Lyon
        <b>Tél</b> 04 78 93 55 19
      "
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'À ne pas manquer dans la région',
      'link' => 'actualites/events',
      // XXX: limit to 4 most recent events
      'pages' => mock('pages.actualites.events'),
      'renderer' => 'components/preview--event',
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'Soumettre un événement',
        'action' => 'actualites/events/add'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Actualités de la région',
      'link' => 'actualites',
      // XXX: limit to 4 most recent articles
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
      'cta' => [
        'icon' => 'icon-add',
        'tooltip' => 'Soumettre une actualité',
        'action' => 'actualites/form-article'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets de l’observatoire de la région',
      'link' => 'observatoire-des-projets',
      // XXX: TODO
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Projets des adhérents de la région',
      'link' => 'observatoire-des-projets',
      // XXX: TODO
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
