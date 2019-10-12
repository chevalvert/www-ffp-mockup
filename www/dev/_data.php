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
    'phone' => '01 30 21 47 45'
  ],

  'regions' => [
    'ile-de-france' => ['title' => 'Île-de-France'],
    'hauts-de-france' => ['title' => 'Hauts-de-France'],
    'grand-est-champagne-ardenne' => ['title' => 'Grand-Est, Champagne-Ardenne'],
    'grand-est-alsace-lorraine' => ['title' => 'Grand-Est, Alsace-Lorraine'],
    'rhone-alpes-auvergne-bourgogne-franche-comte' => ['title' => 'Rhône-Alpes, Auvergne, Bourgogne, Franche-Comté'],
    'provence-alpes-cote-d-azur-corse' => ['title' => 'Provence-Alpes-Côte d\'Azur, Corse'],
    'occitanie-languedoc-roussillon' => ['title' => 'Occitanie, Languedoc-Roussillon'],
    'occitanie-midi-pyrenees' => ['title' => 'Occitanie, Midi-Pyrénées'],
    'nouvelle-aquitaine' => ['title' => 'Nouvelle Aquitaine'],
    'bretagne-pays-de-la-loire-centre-val-de-loire' => ['title' => 'Bretagne, Pays de la Loire, Centre Val de Loire'],
    'normandie' => ['title' => 'Normandie'],
    'outre-mer' => ['title' => 'Outre-Mer']
  ],

  'pages' => [
    'la-ffp' => [
      'title' => 'La FFP'
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
          'text' => "Monsieur le <a href='https://www.novethic.fr/fileadmin/_processed_/csm_Nicolas-Hulot_3642a0156c.jpg'>Ministre</a>,\nMerci d’ouvrir ici une  fenêtre sur le projet de paysage.\nPour ce qui me concerne suis tombée dedans dès le plus jeune âge.\n\nLe monde depuis les champs, les arbres, les fossés,\nles ruisseaux, m’était plus familier que l’école.\n\nComme il fallait avancer, et que la priorité était tournée vers le dehors plutôt que vers le dedans, j’ai puisé dans les Sciences de la Nature et de la Vie, Biologie, Physique Chimie à Louis Pasteur de Strasbourg.\n\nL’horizon depuis une fenêtre de laboratoire se montrait là trop étroit, pour investir le dehors.\n\nJe suis alors entrée à l’Ecole Nationale Supérieure du Paysage de Versailles où Jacques Simon, Michel Corajoud ont posé les préalables aux projets de  paysage en France, et par-delà les frontières.\n\nAu terme des quatre années passées à l’école, s’amorçait le début de\nla fin après des années à déconstruire ce que l’on était censé savoir.\n\nPour se sortir de l’angoisse du vide, on s’est resserré entre nous avec Marc Claramunt, Pascale Jacotot, Vincent Tricaud en créant l’Association Paysage et Diffusion pour produire pages paysages de 1987 à 2002.\n\nOn y a invité tous les acteurs concernés de près ou de loin par le paysage — les entreprises, les maîtres d’ouvrages, les philosophes, les artistes, les architectes bien sûr… afin de bâtir  ensemble les outils, les points de vue critiques sur ce qui était en train de se produire ici et ailleurs. Je puisais en toile de fond dans  l’Ecole des Hautes Etudes en Sciences Sociales ou j’ai eu la chance de côtoyer  Bernard le Petit, Pierre Fedida, Georges Didi Huberman, Odile Marcel… Pascal Convert, Eric Poitevin et bien d’autres encore. Quand on baigne dans ce brassage d’idées et d’exigences tout est possible et accessible.\n\nJe veux rendre hommage ici à :<ul><li>Alain Juppé, Philippe Richard, Michèle Larue Charlus pour le jardin botanique de Bordeaux et le renouveau de cette ville depuis que j’y ai investi un de mes projets fondateur.</li><li>Henri Loyrette, Daniel Percheron et Katia Lamy, sans qui le Louvre Lens n’aurait pu se concrétiser.</li></ul>\nMerci de nous accompagner en ce sens"
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

    'observatoire-des-projets' => [
      'title' => 'Observatoire des projets',
      'text' => "Le principe de l’observatoire est de proposer sur le site web de la FFP, une promotion du savoir-faire des entreprises au travers de projets réalisés ensemble.\nCette promotion est assurée par la publication de reportages sur les chantiers en insistant sur une ou plusieurs spécificités, de nouvelles techniques…\nChaque écho des chantiers est mis en ligne pour deux ans dans la partie libre du site Internet de la FFP.\nUne alerte à chacun de nos membres est envoyée à chaque nouvelle publication.\n\nSur une même opération les entreprises peuvent se répartir entre elles le financement de cette promotion collective. \nLe concepteur valorise aussi son travail. Progressivement les écho des chantiers vont constituer une riche bibliothèque de projets et un baromètre de l'activité."],

    'experiences-de-paysage' => [
      'title' => 'Expériences de paysage'
    ]
  ]
];
