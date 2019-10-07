<?php

// NOTE: This is for prototyping purpose only : the mock data structure does not
// need to match the final backend structure.

$_GLOBALS['__dev.data'] = [
  'site' => [
    'title' => 'Fédération Française du Paysage',
    'address' => '4 rue Hardy 78000 Versailles',
    'phone' => '01 30 21 47 45'
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
