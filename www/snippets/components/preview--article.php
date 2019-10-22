<?php if ($page ?? null) : ?>

<article class="preview--article">
  <a href="article">
    <div class="preview--article__cover">
      <?php snippet('image', [
        'url' => $page['cover_url'],
        'lazy' => true,
        'width' => 160,
        'height' => 100
      ]) ?>
    </div>

    <div class="preview--article__pubdate">
      <?php snippet('date', ['timestamp' => $page['pubdate'], 'format' => $format ?? '%d–%m-%Y']) ?>
    </div>

    <div class="preview--article__context">
      <?= $page['context'] ?>
    </div>

    <h3 class="preview--article__title">
      <span><?= $page['title'] ?></span>
    </h3>
  </a>
</article>

<?php endif ?>
