<?php if (isset($article) && $article) : ?>

<article class="article-preview">
  <a href="article">
    <div class="article-preview__cover">
      <img src="<?= $article['cover_url'] ?>">
    </div>

    <div class="article-preview__pubdate">
      <?php snippet('date', ['timestamp' => $article['pubdate'], 'format' => $format ?? '%d–%m-%Y']) ?>
    </div>

    <div class="article-preview__context">
      <?= $article['context'] ?>
    </div>

    <h3 class="article-preview__title">
      <?= $article['title'] ?>
    </h3>
  </a>
</article>

<?php endif ?>
