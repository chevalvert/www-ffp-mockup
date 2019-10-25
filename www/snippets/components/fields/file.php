<input
  type="file"
  id="<?= $id ?>"
  name="<?= $id ?>"
  accept="<?= $accept ?? '*' ?>"
  <?= $multiple ?? true ? 'multiple="true"' : '' ?>
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
<label class="better-input-file" for="<?= $id ?>" data-files=''>
  <?= $multiple ?? true ? 'Sélectionner un ou plusieurs fichiers…' : 'Sélectionner un fichier…'?>
</label>
