<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container article" data-view="article">
    <article class="article">
      <?php
        $prototype_article = mock('pages.actualites.articles')[0];
        snippet('components/header', [
          'date' => $prototype_article['pubdate'],
          'context' => $prototype_article['context'],
          'title' => $prototype_article['title'],
          'text' => $prototype_article['intro'],
          'cover' => $prototype_article['cover_url']
        ]);
      ?>

      <section class="article__body">
        <div class="container">
          <div class="article__text">
            <?= $prototype_article['text'] ?>
          </div>

          <aside class="article__sidebar">
            <div class="article__buttons">
              <?php snippet('components/btn', [
                'label' => 'Partager sur Facebook',
                'url' => 'https://www.facebook.com/sharer/sharer.php?u=link'
              ]) ?>

              <?php snippet('components/btn', [
                'label' => 'Télécharger',
                'url' => 'https://www.facebook.com/sharer/sharer.php?u=link'
              ]) ?>

              <?php snippet('components/btn', [
                'label' => 'Acheter la brochure',
                'url' => 'https://www.facebook.com/sharer/sharer.php?u=link'
              ]) ?>
            </div>

            <?php if ($prototype_article['metas'] ?? false) : ?>
              <ul class="article__metas">
                <?php foreach ($prototype_article['metas'] as $meta_label => $meta_value) : ?>
                  <li class="article__meta" data-label="<?= $meta_label ?>"><?= $meta_value ?></li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>

            <?php if ($prototype_article['sponsors'] ?? false) : ?>
              <ul class="article__sponsors">
                <?php foreach ($prototype_article['sponsors'] as $sponsor) : ?>
                  <li class="article__sponsor">
                    <a href="<?= $sponsor['url'] ?>" target="_blank" class="icon">
                      <img src="<?= $sponsor['logo_url'] ?>" alt="<?= $sponsor['name'] ?>">
                    </a>
                  </li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
          </aside>
        </div>

        <div class="container">
          <?php if ($prototype_article['gallery'] ?? false) : ?>
            <ul class="article__gallery">
              <?php foreach ($prototype_article['gallery'] as $image) : ?>
                <li class="article__gallery-item">
                  <a href="<?= $image['url'] ?>" target="_blank">
                    <?php snippet('image', $image) ?>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          <?php endif ?>
        </div>
      </section>

      <?php snippet('components/pages--grid', [
        'title' => 'Plus d’actualités',
        'class' => 'article__related',
        // XXX: last 4 articles
        'pages' => array_slice(mock('pages.actualites.articles'), 0, 4),
        'renderer' => 'components/preview--article'
      ]) ?>
    </article>
  </div>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
