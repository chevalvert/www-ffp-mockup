<div class="form__field" class="<?= ($required ?? false) ? 'is-required' : '' ?>">
  <?php if ($label ?? null) : ?>
    <label for="<?= $id ?>">
      <?= $label ?>
      <?php if ($required ?? false) : ?>
        <abbr class="form__field-required" title="Ce champ est obligatoire">*</abbr>
      <?php endif ?>
    </label>
  <?php endif ?>

  <input
    type="text"
    id="<?= $id ?>"
    name="<?= $id ?>"
    placeholder="<?= $placeholder ?? $label ?>"
    <?= $value ?? null ? "value='$value'" : '' ?>
    <?= ($required ?? false) ? 'required' : '' ?>
  >

  <div class="form__field-error"></div>
</div>
