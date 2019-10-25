<select id="<?= $id ?>" name="<?= $id ?>" <?= ($required ?? false) ? 'required' : '' ?>>
  <?php if ($placeholder) : ?>
    <option value=""><?= $placeholder ?></option>
    <option disabled>─</option>
  <?php endif ?>

  <?php foreach ($options as $option_value => $option_label) : ?>
    <option value="<?= $option_value ?>" <?= ($value ?? null) == $option_value ? 'selected' : '' ?>>
      <?= $option_label ?>
    </option>
  <?php endforeach ?>
</select>

