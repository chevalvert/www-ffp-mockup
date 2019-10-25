<textarea
  id="<?= $id ?>"
  name="<?= $id ?>"
  wrap="soft"
  rows="<?= $rows ?? 4 ?>"
  placeholder="<?= $placeholder ?? $label ?>"
  <?= ($required ?? false) ? 'required' : '' ?>
><?= $value ?? null ? $value : '' ?></textarea>

