<?php if ($page ?? null) : ?>

<article class="preview--people">
  <a href="article">
    <div class="preview--people__cover" data-lazyload data-background-image="<?= $page['pp_url'] ?>"></div>

    <div class="preview--people__content">
      <div class="preview--people__context">
        <?= $page['context'] ?>
      </div>

      <h3 class="preview--people__name">
        <span><?= $page['name'] ?></span>
      </h3>
    </div>
  </a>
</article>

<?php endif ?>
