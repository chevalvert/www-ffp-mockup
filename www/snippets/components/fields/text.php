<input
  type="text"
  id="<?= $id ?>"
  name="<?= $id ?>"
  placeholder="<?= $placeholder ?? $label ?>"
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
