### Render custom content blocks
```
drush sqlq 'SELECT id, info FROM block_content_field_data'
{{ drupal_entity('block_content', 1) }}
```

### Render views blocks
```
drush ev "print_r(array_keys(\Drupal::service('plugin.manager.block')->getDefinitions()));"
{{ drupal_block("views_block:releases-release__composers", wrapper=false) }}
```

### Render menu
```
{{ drupal_menu('main') }}
```

### Render core blocks (rarely used)
```
grep -r ' id = ' core/modules/*/src/Plugin/Block/; 
```
