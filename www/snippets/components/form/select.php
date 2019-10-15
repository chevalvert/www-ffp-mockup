<div class="form__field" class="<?= ($required ?? false) ? 'is-required' : '' ?>">
  <?php if ($label ?? null) : ?>
    <label for="<?= $id ?>">
      <?= $label ?>
      <?php if ($required ?? false) : ?>
        <abbr class="form__field-required" title="Ce champ est obligatoire">*</abbr>
      <?php endif ?>
    </label>
  <?php endif ?>

  <select id="<?= $id ?>" name="<?= $id ?>" <?= ($required ?? false) ? 'required' : '' ?>>
    <?php if ($placeholder) : ?>
      <option value=""><?= $placeholder ?></option>
    <?php endif ?>

    <?php foreach ($options as $option_value => $option_label) : ?>
      <option value="<?= $option_value ?>" <?= ($value ?? null) == $option_value ? 'selected' : '' ?>>
        <?= $option_label ?>
      </option>
    <?php endforeach ?>
  </select>

  <div class="form__field-error"></div>
</div>
