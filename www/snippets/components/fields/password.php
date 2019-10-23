<input
  type="password"
  id="<?= $id ?>"
  name="<?= $id ?>"
  placeholder="<?= $placeholder ?? $label ?>"
  <?= $value ?? null ? "value='$value'" : '' ?>
  <?= ($required ?? false) ? 'required' : '' ?>
>
<div class="password__forgot">
  <a href="login/forgot">Mot de passe oublié ?</a>
</div>
