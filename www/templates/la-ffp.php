<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <section class="article" <?php FFP::paint() ?>>
    <div class="max-width--container">
      <h2>Les objectifs de la FFP</h2>
    </div>
    <div class="max-width--container">
      <div class="article__body">
        <?php snippet('text', ['text' => 'La Fédération Française du Paysage (FFP) est la seule organisation représentative de la profession de paysagiste concepteur. Elle regroupe aujourd’hui plus de 800 membres, soit près d’un professionnel sur trois. Les préoccupations de la Fédération concernent autant les débats sur le Paysage que la valorisation de la profession de paysagiste concepteur. C’est une structure d’accueil capable de prendre en compte toutes les évolutions en matière de qualification, de formation, d’éthique et de déontologie, de développement. Elle se structure comme une organisation professionnelle, regroupant les personnes physiques et morales.']) ?>
      </div>
    </div>
  </section>

  <section class="article" <?php FFP::paint() ?>>
    <div class="max-width--container">
      <h2>Promouvoir et développer le paysage dans le cadre de vie</h2>
    </div>
    <div class="max-width--container">
      <div class="article__body">
        <?php snippet('text', ['text' => "La Fédération fait connaître au niveau national et international la spécificité du paysage et l’intérêt de sa prise en compte pour la collectivité ainsi que les études, projets et pratiques qui contribuent à sa qualité. \nElle initie et participe au débat d'idées sur le paysage \nen éditant brochures, périodiques et ouvrages. Organise des conférences, congrès, expositions et concours, \nles Rencontres Nationales ou les Assises Européennes \ndu Paysage par exemple.\n\nElle concourt au développement des enseignements \ndu paysage, de la formation continue et de la recherche.\n\nElle contribue à l’élaboration des textes législatifs \net réglementaires nationaux et européens relatifs \nau paysage.\n\nElle recherche une complémentarité et une coopération entre les différentes professions de la filière paysage : producteurs, entrepreneurs."]) ?>
      </div>
    </div>
  </section>


</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
