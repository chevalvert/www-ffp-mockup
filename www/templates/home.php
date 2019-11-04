<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container home" data-view="home">
    <?php snippet('components/section', [
      'title' => 'La fédération Française du Paysage regroupe aujourd’hui plus de 800 membres, répartis dans 12 entités régionales, soit près d’1 paysagiste-concepteur sur 3.',
      'class' => 'section--baseline js-landscape'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Pourquoi adhérer&nbsp;?',
      'class' => 'section--cta',
      'columns' => [
        ['title' => 'Une assistance juridique', 'text' => 'C’est à dire ici, c’est le contraire, au lieu de panacée, l’ensemble des 5 sens vers ce qu’on appelle la dynamique des sports tarde à partager une certaine compétitivité propre(s) aux Français, tu sais ça.'],
        ['title' => 'Un réseau, un annuaire de professionnels', 'text' => 'Comme la coumbacérie ou le script de Aze, la lexicomatisation autour de la Géo Physique Spatiale peut incristaliser le conpemdium autour des dialogues intercommunautaires, bonnes fêtes.'],
        ['title' => 'Des annonces (emplois, formations, concours)', 'text' => 'Lorsque l’on parle des végétaliens, du végétalisme, l’ensemble des 5 sens de la technicité informatisée fait allusion à faceter cet environnement de 2 345 410 km² vers Lovanium, je vous en prie.']
      ],
      'btn' => [
        'label' => 'Adhérer',
        'url' => '/adhesion'
      ]
    ]) ?>

    <?php snippet('components/sponsor', [
      'PAINT' => false,
      'name' => 'ID Verde',
      'url' => 'https://idverde.com/',
      'logo_url' => 'https://idverde.com/content/themes/idverdeFR/app/assets/images/logo.png',
      'baseline' => 'Créer et entretenir le payage'
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'À ne pas manquer',
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
      'title' => 'Actualités',
      'link' => 'actualites',
      // XXX: limit to 4 most recent articles
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
      'cta' => [
        'icon' => 'add',
        'tooltip' => 'Soumettre une actualité',
        'url' => 'actualites/form-article'
      ]
    ]) ?>

    <?php snippet('components/pages--grid', [
      'title' => 'Observatoire des projets',
      'link' => 'projets-et-actions/observatoire-des-projets',
      // XXX: limit to 4 most recent articles
      'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
      'renderer' => 'components/preview--article',
    ]) ?>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
