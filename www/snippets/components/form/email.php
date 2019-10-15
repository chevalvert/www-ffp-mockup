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
    type="email"
    id="<?= $id ?>"
    name="<?= $id ?>"
    placeholder="martine.dupont@exemple.fr"
    <?= $value ?? null ? "value='$value'" : '' ?>
    <?= ($required ?? false) ? 'required' : '' ?>
  >

  <div class="form__field-error"></div>
</div>
