<?php foreach ($options as $option_value => $label) : ?>
<div class="checkbox-wrapper">
  <input
    type="checkbox"
    id="<?= "$id-$option_value" ?>"
    name="<?= $id ?>"
    value="<?= $option_value ?>"
    <?php in_array($option_value, $value ?? []) ? 'checked' : '' ?>
  >
  <label for="<?= "$id-$option_value" ?>"><?= $label ?></label>
</div>
<?php endforeach ?>
