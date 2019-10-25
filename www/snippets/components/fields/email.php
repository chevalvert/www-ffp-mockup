<input
  type="email"
  id="<?= $id ?>"
  name="<?= $id ?>"
  placeholder="martine.dupont@exemple.fr"
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
