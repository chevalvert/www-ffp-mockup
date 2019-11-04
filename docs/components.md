# [Components](../www/snippets/components) [<img src="https://github.com/chevalvert.png?size=100" align="right">](http://chevalvert.fr/)

<br>

## [`btn`](../www/snippets/components/btn.php)
```php
snippet('components/btn',  [
  'action' => // required if no $url
  'url' => // required if no $action
  'label' => // required
  'title' => null
])
```

## [`cta`](../www/snippets/components/cta.php)
```php
snippet('components/cta',  [
  'url' => // required
  'icon' => 'add' // 'add' or 'edit'
  'tooltip' => null
])
```

## [`footer`](../www/snippets/components/footer.php)
```php
snippet('components/footer')
```

## [`form`](../www/snippets/components/form.php)
```php
snippet('components/form', [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'action' => // required
  'method' => 'post'
  'class' => ''

  'form' => [ // requred
    // anonymous fieldset
    ['field-id' => ['type' => <field-type>, ...field_options]] // SEE components/fields

    // named fieldset
    'Fieldset title' => [
      'field-id' => ['type' => <field-type>, ...field_options]
      'field-id' => ['type' => <field-type>, ...field_options]
    ]

    'errors' => [
      'field-id' => 'error message'
    ]

    'values' => [
      'field-id' => value
    ]
  ]

  'btn' => $btn_options // SEE components/btn
 ])
```

## [`header`](../www/snippets/components/header.php)
```php
snippet('components/header',  [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'class' => ''
  
  'date' => <unix timestamp>
  'format' => '%d–%m-%Y'

  'context' => null
  'title' => null
  'link' => null // href value of the title (if null, no link on title)
  'cta' => null // provide a cta on the title (SEE components/cta)
  'text' => null
  'cover' => null // url of the cover
])
```

## [`menu--mobile`](../www/snippets/components/menu--mobile.php)
```php
snippet('components/menu--mobile',  [
  'message' => null
  'region' => null
])
```

## [`menu--regions`](../www/snippets/components/menu--regions.php)
```php
snippet('components/menu--regions')
```

## [`menu`](../www/snippets/components/menu.php)
```php
snippet('components/menu',  [
  'message' => null
  'region' => null
])
```

## [`pages--grid`](../www/snippets/components/pages--grid.php)
```php
snippet('components/pages--grid',  [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'class' => ''

  'title' => null
  'link' => null // href value of the title (if null, no link on title)
  'cta' => null // provide a cta on the title (SEE components/cta)
  
  'HIDE_EMPTY' => false
  'empty_placeholder' => 'Aucune page disponible.'
  
  'pages' => []
  'renderer' => // [required] snippet to use for pages rendering, ie preview--article
  
  'btn' => null // options for a button, ie "load more", SEE components/btn
])
```

## [`pages--list`](../www/snippets/components/pages--list.php)
```php
snippet('components/pages--list',  [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'class' => ''

  'title' => null
  'link' => null // href value of the title (if null, no link on title)
  'cta' => null // provide a cta on the title (SEE components/cta)
  
  'HIDE_EMPTY' => false
  'empty_placeholder' => 'Aucune page disponible.'
  
  'columns' => [
    'column-id' => [
      'label' => 'Column label' // default label is column-id
      'transform' => null // custom function to transform output value
    ]
  ]
  'sortBy' => ['column-id', 'ASC'] // default sorting order when page is loaded, order be 'ASC' or 'DESC'
  'sortable' => ['column-id'] // allow user to manually sort some columns
  
  'pages' => []
  
  'btn' => null // options for a button, ie "load more", SEE components/btn
])
```

## [`photoswipe`](../www/snippets/components/photoswipe.php)
```php
snippet('components/photoswipe')
```

## [`preview--article`](../www/snippets/components/preview--article.php)
```php
// NOTE: this should as a renderer with pages--grid
snippet('components/preview--article',  [
  'page' => // required
  'cover_url' => 
  
  'pubdate' => // required
  'format' => '%d–%m-%Y'
  
  'context' => // required
  'title' => // required
])
```

## [`preview--event`](../www/snippets/components/preview--event.php)
```php
snippet('components/preview--event',  [
  'page' => // required
  'SHOW_YEAR' => false
  'date_start' => <unix timestamp>
  'date_end' => <unix timestamp>
  'context' => // required
  'title' => // required
])
```

## [`preview--people`](../www/snippets/components/preview--people.php)
```php
snippet('components/preview--people',  [
  'page' => // required
  'pp_url' =>
  'context' =>
  'name' =>
])
```

## [`section`](../www/snippets/components/section.php)
```php
snippet('components/section',  [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'class' => ''

  'title' => null
  'link' => null // href value of the title (if null, no link on title)
  'cta' => null // provide a cta on the title (SEE components/cta)
  
  'text' => null
  'columns' => [ // default is null
    'title' => null
    'text' => // required
  ]
  
  'btn' => null // options for a button, ie "sign in", SEE components/btn
])
```

## [`sponsor`](../www/snippets/components/sponsor.php)
```php
snippet('components/sponsor',  [
  'PAINT' => true
  'MATCH_PREVIOUS_COLOR' => false // TODO: avoid negation in bool

  'class' => ''

  'url' => // required
  'logo_url' => // required
  'name' => // required
  'baseline' => // required

  'label' => 'Partenaire'
])
```
