<?php // TODO: merge components/events and components/articles  ?>
<section class="articles" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <div class="max-width--container">

    <?php if (isset($title) && $title) : ?>
    <h2 class="articles__title">
      <?= (isset($link) && $link) ? "<a href='$link' title='Voir tout'>$title</a>" : $title ?>
      <?php isset($cta) && snippet('components/cta', $cta) ?>
    </h2>
    <?php endif ?>

    <?php if (isset($articles) && count($articles)) : ?>
      <ul class="articles__entries">
        <?php foreach ($articles as $article) : ?>
          <li class="articles__entry">
            <?php snippet('components/article-preview', compact('article')) ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

  </div>
</section>
