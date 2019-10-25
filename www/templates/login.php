<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container login">
    <?php snippet('components/section', [
      'title' => 'Nouvel adhérent&nbsp;?',
      'text' => mock('pages.login.signup-text'),
      'btn' => [
        'url' => 'adhesion',
        'label' => 'Adhérer'
      ]
    ]) ?>

    <div <?php FFP::paint() ?>>
      <?php snippet('components/form', [
        'DO_NOT_PAINT' => true,
        'action' => 'api/login',
        'method' => 'POST',
        'form' => [
          'Connexion' => [
            'email' => ['type' => 'text', 'label' => 'Votre e-mail', 'required' => true],
            'password' => ['type' => 'password', 'label' => 'Votre mot de passe', 'required' => true],
          ]
        ],
        'btn' => [
          'label' => 'Se connecter'
        ]
      ]) ?>
    </div>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
