<?php foreach ($options as $option_value => $label) : ?>
<div class="radio-wrapper">
  <input
    type="radio"
    id="<?= "$id-$option_value" ?>"
    name="<?= $id ?>"
    value="<?= $option_value ?>"
    <?= ($value ?? null) == $option_value ? 'checked' : '' ?>
  >
  <label for="<?= "$id-$option_value" ?>"><?= $label ?></label>
</div>
<?php endforeach ?>
