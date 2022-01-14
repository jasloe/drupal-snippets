It's staggering to me that there isn't a simple example for preprocessing a given field presented in a render array. While the often out-of-date information strewn haphazardly around the documentation chapters of the site, d.o sorely lacks *simple*, replicable examples for the developer. Reading and re-reading the API is undoubtedly part of the developer's job, sometimes you just need to get stuff done.  

As such, here's quick snippet for removing the protocol prefix for a link field. Not that resilient, no tests, and likely won't help your use case.

```
@field--node--field-external-link.html.twig

{% for item in items %}
  <div{{attributes.addClass(classes,'field-item')}}>{{ item.content }}
  {{ vardumper(item) }}
	</div>
{% endfor %}

...returns the content array.

@yourtheme.theme

```
/**
 * Implements yourtheme_preprocess_field().
 */
function yourtheme_preprocess_field(&$variables) {
  // probably add a check here   
  if ($variables['element']['#field_name'] == 'field_external_link') {
    xdebug_break();
    $item_uri = $variables["items"][0]["content"]["#title"];
    $item_uri_rewrite = preg_replace("(^http?://)", "", $item_uri);
    $variables["items"][0]["content"]["#title"] = $item_uri_rewrite;
  }
}
```

The debugger will return the ```items``` array key and the ```#title``` array. Incidentally, the # notation is specific to Drupal. More to come on that.
