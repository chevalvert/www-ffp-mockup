<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<div data-barba="wrapper">
  <main role="main" data-barba="container" data-barba-view="article">
    <article class="article">
      <?php
        $prototype_article = mock('pages.actualites.articles', true)[0];
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
            <?php snippet('textblock', ['text' => $prototype_article['text']]) ?>
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
        'pages' => array_slice(mock('pages.actualites.articles', true), 0, 4),
        'renderer' => 'components/preview--article'
      ]) ?>
    </article>
  </main>
</div>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
