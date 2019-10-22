<form action="<?= $action ?>" method="<?= $method ?? 'post' ?>" class="form <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <?php foreach ($form as $fieldset => $fields) : ?>
    <fieldset <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
      <div class="container">
        <?php if (!is_numeric($fieldset)) : // Support indexed and associative arrays ?>
          <legend><?= $fieldset ?></legend>
        <?php endif ?>

        <?php foreach ($fields as $id => $field) : ?>
          <?php
            $error = $errors[$id] ?? null;
            $value = $values[$id] ?? null;
            $label = $field['label'] ?? null;
            $required = $field['required'] ?? false;
            $classes = [''];
            if ($required) $classes[] = 'is-required';
            if ($error) $classes[] = 'has-error';
          ?>
          <div class="form__field <?= join($classes, ' ') ?>" <?= ($width = ($field['width'] ?? false)) ? "data-width='$width'" : '' ?>>
            <?php if ($label) : ?>
              <label for="<?= $id ?>">
                <?= $label ?>
                <?php if ($required) : ?>
                  <abbr class="form__field-required" title="Ce champ est obligatoire">*</abbr>
                <?php endif ?>
              </label>
            <?php endif ?>

            <?php snippet('components/fields/' . ($field['type'] ?? 'text'), array_merge($field, compact('id', 'value'))); ?>

            <?php if ($error) : ?>
              <div class="form__field-error">
                <span><?= $error ?></span>
              </div>
            <?php endif ?>
          </div>
        <?php endforeach ?>

      </div>
    </fieldset>
  <?php endforeach ?>

  <div class="form__button-container" <?php ($DO_NOT_PAINT ?? false) || FFP::paint(false) ?>>
    <div class="container">
      <?php if ($reset ?? false) snippet('components/btn', array_merge(($reset ?? []), ['action' => 'reset'])) ?>
      <?php snippet('components/btn', array_merge(($btn ?? []), ['action' => 'submit'])) ?>
    </div>
  </div>
</form>
