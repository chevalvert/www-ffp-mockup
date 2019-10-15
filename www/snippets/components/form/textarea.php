<div class="form__field" class="<?= ($required ?? false) ? 'is-required' : '' ?>">
  <?php if ($label ?? null) : ?>
    <label for="<?= $id ?>">
      <?= $label ?>
      <?php if ($required ?? false) : ?>
        <abbr class="form__field-required" title="Ce champ est obligatoire">*</abbr>
      <?php endif ?>
    </label>
  <?php endif ?>

  <textarea
    id="<?= $id ?>"
    name="<?= $id ?>"
    wrap="soft"
    rows="<?= $rows ?? 4 ?>"
    placeholder="<?= $placeholder ?? $label ?>"
    <?= ($required ?? false) ? 'required' : '' ?>
  ><?= $value ?? null ? $value : '' ?></textarea>

  <div class="form__field-error"></div>
</div>
