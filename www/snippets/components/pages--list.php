<?php if (count($pages ?? []) || !($HIDE_EMPTY ?? false)) : ?>

<?php // TODO: re-sort via JavaScript ?>

<section class="pages--list" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <div class="container">

    <?php if (isset($title) && $title) : ?>
    <h2 class="pages--list__title">
      <?= ($link ?? null) ? "<a href='$link' title='Voir plus'>$title</a>" : $title ?>
      <?php ($cta ?? null) && snippet('components/cta', $cta) ?>
    </h2>
    <?php endif ?>

    <?php if (isset($pages) && count($pages)) : ?>
      <table>
        <?php
          $sort_order = $sortBy[1] ?? 'DESC';

          if (!($HIDE_THEAD ?? false)) {
            echo '<thead>';
            foreach ($columns as $key => $column) {
              $label = $column['label'] ?? $key;
              $sortable = ($sortBy[0] ?? false) == $key;
              echo $sortable
                ? "<th data-sort='$sort_order'>$label</th>"
                : "<th>$label</th>";
            }
            echo '</thead>';
          }

          // XXX: useless with WP ?
          if (($sortBy ?? false) && ($sortBy[0] ?? false)) {
            $sortable_key = array_column($pages, $sortBy[0]);
            array_multisort($sortable_key, $sort_order == 'DESC' ? SORT_DESC : SORT_ASC, $pages);
          }

          echo '<tbody>';
          foreach ($pages as $page) {
            echo '<tr>';
            foreach ($columns as $key => $column) {
              echo '<td>';
                $value = $page[$key] ?? '&mdash;';
                if (array_key_exists('transform', $column) && is_callable($column['transform'])) {
                  $value = $column['transform']($value);
                }
                if ($value) echo $value;
              echo '</td>';
            }
            echo '</tr>';
          }
          echo '</tbody>';
        ?>
      </table>
    <?php else : ?>
      <?= $empty_placeholder ?? 'Aucune page disponible.' ?>
    <?php endif ?>

    <?php if ($btn ?? null) : ?>
      <div class="pages--list__button-container">
        <?php snippet('components/btn', $btn) ?>
      </div>
    <?php endif ?>

  </div>
</section>

<?php endif ?>
