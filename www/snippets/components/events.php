<?php // TODO: merge components/events and components/articles  ?>
<section class="events" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <div class="max-width--container">

    <?php if (isset($title) && $title) : ?>
    <h2 class="events__title">
      <?= (isset($link) && $link) ? "<a href='$link' title='Voir tout'>$title</a>" : $title ?>
      <?php isset($cta) && snippet('components/cta', $cta) ?>
    </h2>
    <?php endif ?>

    <?php if (isset($events) && count($events)) : ?>
      <ul class="events__entries">
        <?php foreach ($events as $event) : ?>
          <li class="events__entry">
            <?php snippet('components/event-preview', compact('event')) ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php else : // ??? ?>
      Aucun événement pour cette période.
    <?php endif ?>

  </div>
</section>
