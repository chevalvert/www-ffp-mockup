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
      'à ne pas manquer' => [
        'context' => true,
        'excerpt' => true,
        'date_start' => true,
        'date_end' => true
      ]
    ],
    'Annuaire' => [],
    'Annonces' => [],
    'Observatoire des projets' => [],
    'Expériences de paysage' => []
  ]
];
