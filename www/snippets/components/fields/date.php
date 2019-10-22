<input
  type="date"
  placeholder="dd/mm/yyyy"
  id="<?= $id ?>"
  name="<?= $id ?>"
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
