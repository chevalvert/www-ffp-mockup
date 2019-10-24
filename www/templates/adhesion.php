<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container" data-view="form">
    <?php snippet('components/header', [
      'title' => mock('pages.adhesion.title'),
      'text' => 'On peut être paysagiste concepteur parce qu’on exerce le métier. On peut aussi être paysagiste concepteur par la conscience d’appartenir à une profession et par une proximité active et solidaire avec ses confrères.'
    ]) ?>

    <?php snippet('components/section', [
      'title' => 'Pourquoi adhérer&nbsp;?',
      'text' => mock('pages.adhesion.text'),
      'class' => 'js-landscape'
    ]) ?>

    <?php snippet('components/form', [
      'action' => 'api/post-adhesion.php',
      'values' => [
        'email' => 'mail-invalide@example.com'
      ],
      'errors' => [
        'email' => 'l’e-mail fourni est invalide',
        'region' => 'champ obligatoire',
        'documents' => 'un diplôme est obligatoire',
      ],
      'form' => [
        'Contact' => [
          'email' => ['type' => 'email', 'label' => 'Votre e-mail', 'required' => true]
        ],

        'Dates de l’événement' => [
          'date_start' => ['type' => 'date', 'label' => 'Début', 'required' => true, 'width' => '1/2'],
          'date_end' => ['type' => 'date', 'label' => 'Fin', 'required' => true, 'width' => '1/2']
        ],

        'Lieu de l’événement' => [
          'region' => ['type' => 'select', 'label' => 'Région', 'placeholder' => 'Sélectionner votre région', 'options' => mock('regions'), 'required' => true],
          'city' => ['type' => 'text', 'label' => 'Ville', 'placeholder' => 'Nom de la ville', 'required' => true],
          'address' => ['type' => 'text', 'label' => 'Addresse', 'placeholder' => 'Addresse complète']
        ],

        'L’événement' => [
          'title' => ['type' => 'text', 'label' => 'Titre', 'required' => true],
          'description' => ['type' => 'textarea', 'label' => 'Description', 'rows' => 10, 'required' => true],
        ],

        'Documents' => [
          'images' => ['type' => 'file', 'label' => 'Images (png, jpeg)', 'accept' => 'image/*'],
          'documents' => ['type' => 'file', 'label' => 'Documents (pdf)', 'accept' => '.pdf'],
        ]
      ],
      'btn' => [
        'label' => 'Soumettre un événémenent'
      ]
    ]) ?>

  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
