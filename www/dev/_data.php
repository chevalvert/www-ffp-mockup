<?php

// NOTE: This is for prototyping purpose only : the mock data structure does not
// need to match the final backend structure.

$_GLOBALS['__dev.data'] = [
  'site' => [
    'title' => 'Fédération Française du Paysage',
    'address' => '4 rue Hardy 78000 Versailles',
    'phone' => '01 30 21 47 45'
  ],

  'regions' => [
    'Rhône-Alpes, Auvergne, Bourgogne, Franche-Comté' => [],
    'Île-de-France' => [],
    'Bretagne, Pays de la Loire, Centre Val de Loire' => [],
    'Grand-Est, Alsace-Lorraine' => [],
    'Grand-Est, Champagne-Ardenne' => [],
    'Hauts-de-France' => [],
    'Normandie' => [],
    'Nouvelle Aquitaine,' => [],
    'Occitanie, Languedoc-Roussillon' => [],
    'Occitanie, Midi-Pyrénées' => [],
    'Outre-Mer' => [],
    'Provence-Alpes-Côte d\'Azur, Corse' => []
  ],

  'pages' => [
    'La FFP' => ['title' => 'La FFP'],
    'Actualités' => [
      'events' => [
        ['date_start' => 1570622469, 'date_end' => 1571632469, 'context' => 'Arc-et-Senans', 'title' => '19° Festival des jardins Flower Power, Woodstock côté jardin'],
        ['date_start' => 1570622469, 'date_end' => null, 'context' => 'Amiens', 'title' => '5° édition du Grand forum du patrimoine'],
        ['date_start' => 1570622469, 'date_end' => null, 'context' => 'Arras', 'title' => 'Congrès annuel Hortis'],
        ['date_start' => 1573622469, 'date_end' => 1583622469, 'context' => 'Lille', 'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'],
      ],
      'articles' => [
        [
          'pubdate' => 1570622469,
          'title' => 'Mener la transition avec la nature en ville',
          'context' => 'climat',
          'intro' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.',
          'cover_url' => 'https://picsum.photos/id/11/1600/1000',
          'text' => "Monsieur le <a href='https://www.novethic.fr/fileadmin/_processed_/csm_Nicolas-Hulot_3642a0156c.jpg'>Ministre</a>,\nMerci d’ouvrir ici une  fenêtre sur le projet de paysage.\nPour ce qui me concerne suis tombée dedans dès le plus jeune âge.\n\nLe monde depuis les champs, les arbres, les fossés,\nles ruisseaux, m’était plus familier que l’école.\n\nComme il fallait avancer, et que la priorité était tournée vers le dehors plutôt que vers le dedans, j’ai puisé dans les Sciences de la Nature et de la Vie, Biologie, Physique Chimie à Louis Pasteur de Strasbourg.\n\nL’horizon depuis une fenêtre de laboratoire se montrait là trop étroit, pour investir le dehors.\n\nJe suis alors entrée à l’Ecole Nationale Supérieure du Paysage de Versailles où Jacques Simon, Michel Corajoud ont posé les préalables aux projets de  paysage en France, et par-delà les frontières.\n\nAu terme des quatre années passées à l’école, s’amorçait le début de\nla fin après des années à déconstruire ce que l’on était censé savoir.\n\nPour se sortir de l’angoisse du vide, on s’est resserré entre nous avec Marc Claramunt, Pascale Jacotot, Vincent Tricaud en créant l’Association Paysage et Diffusion pour produire pages paysages de 1987 à 2002.\n\nOn y a invité tous les acteurs concernés de près ou de loin par le paysage — les entreprises, les maîtres d’ouvrages, les philosophes, les artistes, les architectes bien sûr… afin de bâtir  ensemble les outils, les points de vue critiques sur ce qui était en train de se produire ici et ailleurs. Je puisais en toile de fond dans  l’Ecole des Hautes Etudes en Sciences Sociales ou j’ai eu la chance de côtoyer  Bernard le Petit, Pierre Fedida, Georges Didi Huberman, Odile Marcel… Pascal Convert, Eric Poitevin et bien d’autres encore. Quand on baigne dans ce brassage d’idées et d’exigences tout est possible et accessible.\n\nJe veux rendre hommage ici à :<ul><li>Alain Juppé, Philippe Richard, Michèle Larue Charlus pour le jardin botanique de Bordeaux et le renouveau de cette ville depuis que j’y ai investi un de mes projets fondateur.</li><li>Henri Loyrette, Daniel Percheron et Katia Lamy, sans qui le Louvre Lens n’aurait pu se concrétiser.</li></ul>\nMerci de nous accompagner en ce sens"
        ],
        ['pubdate' => 1570622469, 'context' => 'note de lecture', 'title' => 'Villes-Jardins, vers une fusion entre le végétal et la ville', 'cover_url' => 'https://picsum.photos/id/11/1600/1000'],
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
    'Annuaire' => [],
    'Annonces' => [],
    'Observatoire des projets' => [],
    'Expériences de paysage' => []
  ]
];
