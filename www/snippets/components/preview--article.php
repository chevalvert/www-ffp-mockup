<?php if ($page ?? null) : ?>

<article class="preview--article">
  <a href="article">
    <div class="preview--article__cover">
      <img src="<?= $page['cover_url'] ?>">
    </div>

    <div class="preview--article__pubdate">
      <?php snippet('date', ['timestamp' => $page['pubdate'], 'format' => $format ?? '%d–%m-%Y']) ?>
    </div>

    <div class="preview--article__context">
      <?= $page['context'] ?>
    </div>

    <h3 class="preview--article__title">
      <?= $page['title'] ?>
    </h3>
  </a>
</article>

<?php endif ?>
