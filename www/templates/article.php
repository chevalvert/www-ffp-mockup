<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main" id="main">
  <div class="barba-container article">
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
            TODO
          </aside>
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
