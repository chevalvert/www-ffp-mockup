<form action="<?= $action ?>" method="<?= $method ?? 'post' ?>" class="form <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <?php foreach ($form as $fieldset => $fields) : ?>
    <fieldset <?php FFP::paint() ?>>
      <div class="container">
        <legend><?= $fieldset ?></legend>

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
          <div class="form__field <?= join($classes, ' ') ?>" <?= ($width = ($field['width'] ?? false)) ? "data-width='$width'" : '1' ?>>
            <?php if ($label) : ?>
              <label for="<?= $id ?>">
                <?= $label ?>
                <?php if ($required) : ?>
                  <abbr class="form__field-required" title="Ce champ est obligatoire">*</abbr>
                <?php endif ?>
              </label>
            <?php endif ?>

            <?php snippet('components/form/' . ($field['type'] ?? 'text'), array_merge($field, compact('id', 'value'))); ?>

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

  <div class="form__button-container" <?php FFP::paint(false) ?>>
    <div class="container">
      <?php snippet('components/btn', array_merge(($btn ?? []), ['action' => 'submit'])) ?>
    </div>
  </div>
</form>
