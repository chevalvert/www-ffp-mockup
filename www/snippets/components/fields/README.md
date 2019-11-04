# Components/fields [<img src="https://github.com/chevalvert.png?size=100" align="right">](http://chevalvert.fr/)

<br>

## [`checkboxes`](checkboxes.php)
```php
snippet('fields/checkboxes', [
  'id' => // required
  'label' => // required
  'placeholder' => null // default is $label
  'required' => false,
  'options' => [
    'value' => 'label'
  ]
  'value' => []
])
```

## [`date`](date.php)
```php
snippet('fields/date', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
])
```

## [`email`](email.php)
```php
snippet('fields/email', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
])
```

## [`file`](file.php)
```php
snippet('fields/file', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
  'multiple' => true
  'accept' => '*'
])
```

## [`password`](password.php)
```php
snippet('fields/password', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
])
```

## [`radio`](radio.php)
```php
snippet('fields/radio', [
  'id' => // required
  'label' => // required
  'placeholder' => null // default is $label
  'required' => false
  'options' => [
    'value' => 'label'
  ]
  'value' => []
])
```

## [`select`](select.php)
```php
snippet('fields/select', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false,
  'options' => [
    'value' => 'label'
  ]
])
```

## [`text`](text.php)
```php
snippet('fields/text', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
])
```

## [`textarea`](textarea.php)
```php
snippet('fields/textarea', [
  'id' => // required
  'label' => // required
  'value' => null
  'placeholder' => null // default is $label
  'required' => false
  'rows' => 4
])
```

