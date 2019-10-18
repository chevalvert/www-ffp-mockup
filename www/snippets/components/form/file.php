<input
  type="file"
  id="<?= $id ?>"
  name="<?= $id ?>"
  accept="<?= $accept ?? '*' ?>"
  <?= $multiple ?? true ? 'multiple="true"' : '' ?>
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
