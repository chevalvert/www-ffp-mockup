<?php snippet('html.header') ?>
<?php snippet('components/menu') ?>

<main role="main">
  <article class="article">
    <?php
      $prototype_article = mock('pages.Actualités.articles', true)[0];
      snippet('components/header', [
        'date' => $prototype_article['pubdate'],
        'context' => $prototype_article['context'],
        'title' => $prototype_article['title'],
        'text' => $prototype_article['intro'],
        'cover' => $prototype_article['cover_url']
      ]);
    ?>

    <div class="max-width--container">
      <section class="article__body">
        <?php snippet('text', ['text' => $prototype_article['text']]) ?>
      </section>

      <aside class="article__sidebar">
        TODO
      </aside>
    </div>

    <?php snippet('components/articles', [
      'title' => 'Plus d’actualités',
      'class' => 'article__related',
      // XXX: last 4 articles
      'articles' => array_slice(mock('pages.Actualités.articles', true), 0, 4)
    ]) ?>
  </article>
</main>

<?php snippet('components/footer') ?>
<?php snippet('html.footer') ?>
