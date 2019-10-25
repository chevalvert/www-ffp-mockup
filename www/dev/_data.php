<?php

/**
 * NOTE:
 * This is for prototyping purpose only : the mock data structure does not need
 * to match the final backend structure.
 */

$_GLOBALS['__dev.data'] = [
  'site' => [
    'title' => 'Fédération Française du Paysage',
    'address' => '4 rue Hardy 78000 Versailles',
    'phone' => '01&nbsp;30&nbsp;21&nbsp;47&nbsp;45'
  ],

  'regions' => [
    'ile-de-france' => 'Île-de-France',
    'hauts-de-france' => 'Hauts-de-France',
    'grand-est-champagne-ardenne' => 'Grand-Est, Champagne-Ardenne',
    'grand-est-alsace-lorraine' => 'Grand-Est, Alsace-Lorraine',
    'rhone-alpes-auvergne-bourgogne-franche-comte' => 'Rhône-Alpes, Auvergne, Bourgogne, Franche-Comté',
    'provence-alpes-cote-d-azur-corse' => 'Provence-Alpes-Côte d\'Azur, Corse',
    'occitanie-languedoc-roussillon' => 'Occitanie, Languedoc-Roussillon',
    'occitanie-midi-pyrenees' => 'Occitanie, Midi-Pyrénées',
    'nouvelle-aquitaine' => 'Nouvelle Aquitaine',
    'bretagne-pays-de-la-loire-centre-val-de-loire' => 'Bretagne, Pays de la Loire, Centre Val de Loire',
    'normandie' => 'Normandie',
    'outre-mer' => 'Outre-Mer'
  ],

  'menu' => ['la-ffp', 'actualites', 'annuaire', 'annonces', 'observatoire-des-projets', 'experiences-de-paysage'],

  'pages' => [
    'la-ffp' => [
      'title' => 'La FFP',
      'header' => 'La Fédération Française du Paysage (FFP) est la seule organisation représentative de la profession de paysagiste concepteur. Elle regroupe aujourd’hui plus de 800 membres, soit près d’un professionnel sur trois. Les préoccupations de la Fédération concernent autant les débats sur le Paysage que la valorisation de la profession de paysagiste concepteur. C’est une structure d’accueil capable de prendre en compte toutes les évolutions en matière de qualification, de formation, d’éthique et de déontologie, de développement. Elle se structure comme une organisation professionnelle, regroupant les personnes physiques et morales.',
      'text' => <<<HTML
        <p>
          La Fédération fait connaître au niveau national et international la spécificité du paysage et l’intérêt de sa prise en compte pour la collectivité ainsi que les études, projets et pratiques qui contribuent à sa qualité.
          <br>Elle initie et participe au débat d'idées sur le paysage en éditant brochures, périodiques et ouvrages. Organise des conférences, congrès, expositions et concours, les Rencontres Nationales ou les Assises Européennes du Paysage par exemple.
        </p>
        <p>Elle concourt au développement des enseignements du paysage, de la formation continue et de la recherche.</p>
        <p>Elle contribue à l’élaboration des textes législatifs et réglementaires nationaux et européens relatifs au paysage.</p>
        <p>Elle recherche une complémentarité et une coopération entre les différentes professions de la filière paysage : producteurs, entrepreneurs.</p>
      HTML,
      'members-office' => [
        ['name' => 'Aurélien Albert', 'context' => 'Président', 'pp_url' => 'https://randomuser.me/api/portraits/men/75.jpg'],
        ['name' => 'Michel Audouy', 'context' => 'Secrétaire général', 'pp_url' => 'https://randomuser.me/api/portraits/men/74.jpg'],
        ['name' => 'Béatrice Julien-Labruyère', 'context' => 'Secrétaire général adjointe', 'pp_url' => 'https://randomuser.me/api/portraits/women/50.jpg'],
        ['name' => 'Nikola Watté', 'context' => 'Vice-président en charge des relations entre les régions FFP', 'pp_url' => 'https://randomuser.me/api/portraits/men/32.jpg'],
        ['name' => 'Karin Helms', 'context' => 'Vice-présidente en charge de l’international', 'pp_url' => 'https://randomuser.me/api/portraits/women/12.jpg'],
        ['name' => 'Jean-Marc Bouillon', 'context' => 'Président d’honneur', 'pp_url' => 'https://randomuser.me/api/portraits/men/10.jpg'],
        ['name' => 'Claire Gautier', 'context' => 'Vice-présidente en charge des relations avec les institutions', 'pp_url' => 'https://randomuser.me/api/portraits/women/8.jpg'],
        ['name' => 'Éric Chabot', 'context' => 'Trésorier', 'pp_url' => 'https://randomuser.me/api/portraits/men/21.jpg']
      ],
      'members-admin' => [
        ['name' => 'Jean-Marc Bouillon', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/10.jpg'],
        ['name' => 'Béatrice Julien-Labruyère', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/women/50.jpg'],
        ['name' => 'Éric Chabot', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/21.jpg'],
        ['name' => 'Béatrice Julien-Labruyère', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/women/50.jpg'],
        ['name' => 'Claire Gautier', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/women/8.jpg'],
        ['name' => 'Jean-Marc Bouillon', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/10.jpg'],
        ['name' => 'Aurélien Albert', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/75.jpg'],
        ['name' => 'Éric Chabot', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/21.jpg'],
        ['name' => 'Michel Audouy', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/74.jpg'],
        ['name' => 'Nikola Watté', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/32.jpg'],
        ['name' => 'Aurélien Albert', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/75.jpg'],
        ['name' => 'Claire Gautier', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/women/8.jpg'],
        ['name' => 'Nikola Watté', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/men/32.jpg'],
        ['name' => 'Karin Helms', 'context' => 'Région', 'pp_url' => 'https://randomuser.me/api/portraits/women/12.jpg']
      ]
    ],

    'actualites' => [
      'title' => 'Actualités',
      'events' => [
        ['date_start' => 1570622469, 'date_end' => 1571632469, 'context' => 'Arc-et-Senans', 'title' => '19° Festival des jardins Flower Power, Woodstock côté jardin'],
        ['date_start' => 1570622469, 'date_end' => null, 'context' => 'Amiens', 'title' => '5° édition du Grand forum du patrimoine'],
        ['date_start' => 1570622469, 'date_end' => null, 'context' => 'Arras', 'title' => 'Congrès annuel Hortis'],
        ['date_start' => 1573622469, 'date_end' => 1583622469, 'context' => 'Lille', 'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'],
      ],
      'articles' => [
        [
          'pubdate' => 1570622469,
          'title' => 'Mener la transition avec la nature en ville, lorsqu’on parle de tous ces points de vues.',
          'context' => 'climat',
          'intro' => false, // 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
          'cover_url' => 'https://picsum.photos/id/11/1600/1000',
          'text' => <<<HTML
            <p>Monsieur le <a href='https://www.novethic.fr/fileadmin/_processed_/csm_Nicolas-Hulot_3642a0156c.jpg'>Ministre</a>,</p>
            <p>Merci d’ouvrir ici une  fenêtre sur le projet de paysage. Pour ce qui me concerne suis tombée dedans dès le plus jeune âge.</p>
            <p>Le monde depuis les champs, les arbres, les fossés, les ruisseaux, m’était plus familier que l’école.
            <p>Comme il fallait avancer, et que la priorité était tournée vers le dehors plutôt que vers le dedans, j’ai puisé dans les Sciences de la Nature et de la Vie, Biologie, Physique Chimie à Louis Pasteur de Strasbourg.</p>
            <p>L’horizon depuis une fenêtre de laboratoire se montrait là trop étroit, pour investir le dehors.</p>
            <p>Je suis alors entrée à l’Ecole Nationale Supérieure du Paysage de Versailles où Jacques Simon, Michel Corajoud ont posé les préalables aux projets de  paysage en France, et par-delà les frontières.</p>
            <p>Au terme des quatre années passées à l’école, s’amorçait le début de la fin après des années à déconstruire ce que l’on était censé savoir.</p>
            <p>Pour se sortir de l’angoisse du vide, on s’est resserré entre nous avec Marc Claramunt, Pascale Jacotot, Vincent Tricaud en créant l’Association Paysage et Diffusion pour produire pages paysages de 1987 à 2002.</p>
            <p>On y a invité tous les acteurs concernés de près ou de loin par le paysage — les entreprises, les maîtres d’ouvrages, les philosophes, les artistes, les architectes bien sûr… afin de bâtir  ensemble les outils, les points de vue critiques sur ce qui était en train de se produire ici et ailleurs. Je puisais en toile de fond dans  l’Ecole des Hautes Etudes en Sciences Sociales ou j’ai eu la chance de côtoyer  Bernard le Petit, Pierre Fedida, Georges Didi Huberman, Odile Marcel… Pascal Convert, Eric Poitevin et bien d’autres encore. Quand on baigne dans ce brassage d’idées et d’exigences tout est possible et accessible.</p>
            <p>Je veux rendre hommage ici à :
              <ul>
                <li>Alain Juppé, Philippe Richard, Michèle Larue Charlus pour le jardin botanique de Bordeaux et le renouveau de cette ville depuis que j’y ai investi un de mes projets fondateur.</li>
                <li>Henri Loyrette, Daniel Percheron et Katia Lamy, sans qui le Louvre Lens n’aurait pu se concrétiser.</li>
              </ul>
            </p>
            <p>Merci de nous accompagner en ce sens.</p>
          HTML,
          'metas' => [
            'Maître d’ouvrage' => 'Nantes Métropole',
            'Maître d’œuvre' => 'Reichen & Robert et Associés (mandataire), Phytolab, MAGEO',
            'Entreprises' => 'IDVERDE',
            'Coût' => '1 967 342,19€ (Lot espaces verts, maçonnerie, passerelles métalliques et fontainerie)',
            'Calendrier' => 'Septembre 2018 – Juin 2019',
            'Lieu' => '<a href="#">Carrière Misery, Nantes</a>'
          ],
          'sponsors' => [
            ['name' => 'IDVERDE', 'url' => 'https://idverde.com/', 'logo_url' => 'https://idverde.com/content/themes/idverdeFR/app/assets/images/logo.png']
          ],
          'gallery' => [
            ['url' =>'https://picsum.photos/id/11/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/12/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/19/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/18/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/15/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/16/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/17/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/12/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/18/1600/1000', 'width' => 1600, 'height' => 1000],
            ['url' =>'https://picsum.photos/id/15/1600/1000', 'width' => 1600, 'height' => 1000],
          ]
        ],
        ['pubdate' => 1570622469, 'context' => 'note de lecture', 'title' => 'Villes-Jardins, vers une fusion entre le végétal et la ville lorem', 'cover_url' => 'https://picsum.photos/id/11/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Récompense', 'title' => 'Un grand prix du paysage à l’épreuve du temps', 'cover_url' => 'https://picsum.photos/id/12/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Hommage', 'title' => 'Florence Dollfus-Heilbronn, paysagiste et jardnière', 'cover_url' => 'https://picsum.photos/id/19/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Climat', 'title' => 'Mener la transition avec la nature en ville', 'cover_url' => 'https://picsum.photos/id/18/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Juridique', 'title' => 'La loi ELAN est promulguée', 'cover_url' => 'https://picsum.photos/id/15/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Juridique', 'title' => 'Comment faire une demande d’autorisation pour l’utilisation du titre de paysagiste concepteur ?', 'cover_url' => 'https://picsum.photos/id/16/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Allocution', 'title' => 'Catherine Mosbach reçoit la légion d’honneur', 'cover_url' => 'https://picsum.photos/id/17/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Récompense', 'title' => 'Un grand prix du paysage à l’épreuve du temps', 'cover_url' => 'https://picsum.photos/id/12/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Climat', 'title' => 'Mener la transition avec la nature en ville', 'cover_url' => 'https://picsum.photos/id/18/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'Juridique', 'title' => 'La loi ELAN est promulguée', 'cover_url' => 'https://picsum.photos/id/15/1600/1000'],
      ]
    ],

    'annuaire' => [
      'title' => 'Annuaire',
      'pages' => [
        ['name' => 'Abarnou Antoine', 'agency' => 'Post-Moderne', 'address' => "115 avenue Raymond Naves\nAppartement 97, Bâtiment 6\n31500 Toulouse", 'contact' => "06 20 05 83 01\n<a href='https://abarnou.fr'>abarnou.fr</a>"],
        ['name' => 'Abé-Goulier Jean-Christophe', 'agency' => 'CAUE 76', 'address' => "27 rue François Mitterand\n76140 Le Petit Quevilly", 'contact' => '02 35 72 94 50'],
        ['name' => 'Adam Aurélien', 'agency' => 'Résonance Urbanisme & Paysage', 'address' => "2, rue Camille Claudel\n49000 Ecouflant", 'contact' => '02 41 88 46 95'],
        ['name' => 'Adenauer Karin', 'agency' => 'Les Racines', 'address' => "Quartier les Devens\n84220 Gordes ", 'contact' => '06 63 40 45 21'],
        ['name' => 'Affres Barthélémy', 'agency' => 'Agence C. Leblan A. Vénacque', 'address' => "20, rue de Brigode\n59000 Lille", 'contact' => '03 20 95 02 43'],
        ['name' => 'Alaguillaume Stanislas', 'agency' => 'L’atelier des Méditerranées', 'address' => "73, la Canebière\n13001 Marseille", 'contact' => '06 74 78 62 60'],
        ['name' => 'Alazetta Pascale', 'agency' => 'Traverses', 'address' => "9, rue Vézian\n34000 Montpellier", 'contact' => "04 67 75 25 88\n<a href='https://traverses.fr'>traverses.fr</a>"],
        ['name' => 'Alban Christine', 'agency' => 'Arpents Paysages', 'address' => "3, ruelle des Ecoliers\n95320 St-Leu-la-Forêt", 'contact' => "01 39 60 74 22\n<a href='https://arpentspaysages.fr'>arpentspaysages.fr</a>"]
      ]
    ],

    'annonces' => [
      'title' => 'Annonces',
      'pages' => [
        ['type' => 'Emploi', 'pubdate' => 1530622469, 'location' => 'Haute-Vienne', 'description' => 'Chargé∙e d’études paysagiste'],
        ['type' => 'Formation', 'pubdate' => 1370622469, 'location' => 'Paris', 'description' => 'Chargé∙e d’étude paysagiste concepteur H/F'],
        ['type' => 'Concours', 'pubdate' => 1560622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste'],
        ['type' => 'Concours', 'pubdate' => 1545622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste concepteur ou architecte'],
        ['type' => 'Formation', 'pubdate' => 1525622469, 'location' => 'Hauts-de-Seine', 'description' => 'Responsable du pôle forêt'],
        ['type' => 'Emploi', 'pubdate' => 1570634469, 'location' => 'Nantes', 'description' => 'Chargé∙e∙s de projet paysagiste '],
        ['type' => 'Emploi', 'pubdate' => 1512322469, 'location' => 'Nantes', 'description' => 'Offre de stage'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Angers', 'description' => 'Paysagiste chargé∙e du suivi des travaux'],
        ['type' => 'Concours', 'pubdate' => 18540622469, 'location' => 'Paris', 'description' => 'Chargé∙e de projet paysagiste'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Saône-et-Loire', 'description' => 'Chargé∙e de projets aménagement/paysagiste'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Nancy', 'description' => 'Paysagiste et/ou urbaniste et/ou infographiste'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Nantes', 'description' => 'Chargé∙e∙s de projet paysagiste '],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Saône-et-Loire', 'description' => 'Chargé∙e de projets aménagement/paysagiste'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Nantes', 'description' => 'Offre de stage'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Nantes', 'description' => 'Chargé∙e∙s de projet paysagiste '],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Angers', 'description' => 'Paysagiste chargé∙e du suivi des travaux'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Hauts-de-Seine', 'description' => 'Responsable du pôle forêt'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Chargé∙e d’étude paysagiste concepteur H/F'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Chargé∙e de projet paysagiste'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Nancy', 'description' => 'Paysagiste et/ou urbaniste et/ou infographiste'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste concepteur ou architecte'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Nantes', 'description' => 'Offre de stage'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Haute-Vienne', 'description' => 'Chargé∙e d’études paysagiste'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Chargé∙e de projet paysagiste'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste concepteur ou architecte'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Saône-et-Loire', 'description' => 'Chargé∙e de projets aménagement/paysagiste'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Chargé∙e d’étude paysagiste concepteur H/F'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Angers', 'description' => 'Paysagiste chargé∙e du suivi des travaux'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Nancy', 'description' => 'Paysagiste et/ou urbaniste et/ou infographiste'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste'],
        ['type' => 'Emploi', 'pubdate' => 1570622469, 'location' => 'Haute-Vienne', 'description' => 'Chargé∙e d’études paysagiste'],
        ['type' => 'Formation', 'pubdate' => 1570622469, 'location' => 'Hauts-de-Seine', 'description' => 'Responsable du pôle forêt'],
        ['type' => 'Concours', 'pubdate' => 1570622469, 'location' => 'Paris', 'description' => 'Offre de stage paysagiste'],
      ]
    ],

    'adhesion' => [
      'title' => 'Adhérer à la FFP',
      'text' => <<<HTML
        <h3>Des échanges avec des paysagistes concepteurs en région</h3>
        <p>Actuellement, la lexicomatisation de la technicité informatisée semble faceter l'upensmie possédant la francophonie, bonnes fêtes.</p>
        <h3>Des événements, rencontres et formations multiples</h3>
        <p>Imbiber, porter la contextualisation à l'égard de la complexité se résoud à incristaliser une position axisienne vers Lovanium, je vous en prie.</p>
        <h3>Des événémenents, rencontres et formations multiples</h3>
        <p>C’est à dire ici, c’est le contraire, au lieu de panacée, l'imbroglio à forciori, continue à rabibocher la quatripartie avec la formule 1+(2x5), mais oui.</p>
        <p>C’est à dire quand on parle de ces rollers, la politique vers la compromettance pour des saint-bioules nous incite à incristaliser les sens dynamitiels dans la sous-régionalité, Bonne Année.</p>
      HTML
    ],

    'observatoire-des-projets' => [
      'title' => 'Observatoire des projets',
      'text' => <<<HTML
        <p>Le principe de l’observatoire est de proposer sur le site web de la FFP, une promotion du savoir-faire des entreprises au travers de projets réalisés ensemble. Cette promotion est assurée par la publication de reportages sur les chantiers en insistant sur une ou plusieurs spécificités, de nouvelles techniques.</p>
      HTML
    ],

    'experiences-de-paysage' => [
      'title' => 'Expériences de paysage',
      'text' => <<<HTML
        <p>Imbiber, porter la lexicomatisation indispensable(s) en science et culture nous incite à établir cette climatologie axé(e)(s) sur la réalité du terrain, bonnes fêtes.</p>
      HTML,
      'articles' => [
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'La terre donne', 'cover_url' => 'https://picsum.photos/id/101/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'De la marge au paysage', 'cover_url' => 'https://picsum.photos/id/103/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Mutatis Mutandis 1, une approche sensible du projet', 'cover_url' => 'https://picsum.photos/id/94/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Les carnets du paysage : une revue à la croisée du projet et de la culture', 'cover_url' => 'https://picsum.photos/id/100/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Sainte-Baume, «paysage en projet»', 'cover_url' => 'https://picsum.photos/id/106/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Paysages de garrigue, une inspiration pour les jardins du futur', 'cover_url' => 'https://picsum.photos/id/117/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Explorer le Grand Paris de la Marche au Paysage', 'cover_url' => 'https://picsum.photos/id/110/1600/1000'],
        ['pubdate' => 1570622469, 'context' => 'thème', 'title' => 'Projets de campagne', 'cover_url' => 'https://picsum.photos/id/111/1600/1000'],
      ]
    ],

    'region' => [
      'title' => 'Entre champs et volcans',
      'intro' => 'Actuellement, l’activisme de la technicité informatisée nous incite à catapulter le trabajo, le travail, la machinale, la robotisation belvédère, Bonne Année. Vous avez le système de check-up vers les anti-valeurs, vous avez le curuna, or la société civile autour de l’ergonométrie vise à se baser sur cet environnement de 2 345 410 km² comparé la rénaque, tu sais ça. Lorsque l’on parle des végétaliens, du végétalisme, l’activisme de l’orthodoxisation doit se baser sur les encadrés propres aux Français, Bonne Année. Parallèlement, la compétence vers la compromettance pour des saint-bioules se résoud à aider la nucléarité axée sur la réalité du terrain, je vous en prie.',
      'contact' => <<<HTML
        <ul>
          <li><b>Séverine Clédat</b> présidente</li>
          <li><b>Fanny Cassani</b> vice-présidente, déléguée régionale de Bourgogne-Franche-Compté</li>
          <li><b>David Schulz</b> vice-président</li>
          <li><b>Samuel Bonnefoi</b> secrétaire</li>
          <li><b>Pricilla Tétaz</b> vice-secrétaire</li>
          <li><b>Christelle David</b> trésorière</li>
          <li><b>Clément Forest</b> vice trésorière</li>
          <br>
          <li><b>Permanence</b> 9 rue Danielle Faynel-Duclos 69003&nbsp;Lyon</li>
          <li><b>Tél</b> 04 78 93 55 19</li>
        </ul>
      HTML
    ],

    'login' => [
      'signup-text' => <<<HTML
        <p>Vous n’avez pas encore de compte ? Sa création est indispensable pour voir les dernières <a href="annonces">annonces</a>, avoir accès à l’<a href="annuaire">annuaire</a> professionnel et centraliser vos documents.</p>
      HTML
    ],

    'profil' => [
      'fiche-presentation-text' => <<<HTML
        <p>Parallèlement, la lexicomatisation de l'orthodoxisation nous pousse à porter d'avis sur ce qu'on appelle une discipline vers Lovanium, je vous en prie.</p>
        <ul>
          <li><b>Statut</b> Libéral</li>
          <li><b>Agence</b> Dupont</li>
          <li><b>Adresse</b> 12, rue des azalés, 75001 Paris</li>
          <li><b>Tél</b> 00 38 54 35 81 91</li>
          <li><b>Fax</b> 00 38 54 35 81 91</li>
          <li><b>Courriel</b> martine.dupont@gmail.com</li>
          <li><b>Site</b> <a href="#">dupont.fr</a></li>
          <li><b>Diplôme</b> Diplôme d’architecte paysagiste</li>
        </ul>
      HTML,
      'reference-text' => <<<HTML
        <p>
          Quand on prend les triangles rectangles, la réflexologie inter-continentaliste continue à défendre les revenus axé sur la réalité du terrain, mais oui.
          <br>Nous n’allons pas seulement danser ou jouer au football, la compétence purement technique oblige à prévaloir les sens dynamitiels dans les camps militaires non-voyants, c’est clair.
        </p>
        <p>Lorsqu’on parle de tous ces points de vues, la cosmogonisation purement technique paraît régler cet environnement de 2 345 410 km² vers Lovanium, Bonne Année. Une semaine passée sans parler du peuple c’est errer sans abri, autrement dit la politique purement technique vise à partager la nucléarité autour des dialogues intercommunautaires, tu sais ça.
      HTML
    ]
  ]
];
