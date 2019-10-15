<form action="<?= $action ?>" method="<?= $method ?? 'post' ?>" class="form <?= $class ?? '' ?>" <?php ($DO_NOT_PAINT ?? false) || FFP::paint() ?>>
  <?php foreach ($form as $fieldset => $fields) : ?>
    <fieldset <?php FFP::paint() ?>>
      <div class="container">
        <legend><?= $fieldset ?></legend>
        <?php foreach ($fields as $field_id => $field) {
          snippet('components/form/' . ($field['type'] ?? 'text'), array_merge($field, ['id' => $field_id]));
        } ?>
      </div>
    </fieldset>
  <?php endforeach ?>
  <?php snippet('components/btn', array_merge(($btn ?? []), ['action' => 'submit'])) ?>
</form>
