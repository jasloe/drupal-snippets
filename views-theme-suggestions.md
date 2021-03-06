A bug in the Views module prevents theme hook suggestions from being rendered in Twig debug mode.

Here's what Drupal is looking for:
```
View, named foobar
Style: unformatted 
Row style: fields 
Display: page

views-view--foobar--page.html.twig
views-view--page.html.twig
views-view--foobar.html.twig
views-view.html.twig
views-view-unformatted--foobar--page.html.twig
views-view-unformatted--page.html.twig
views-view-unformatted--foobar.html.twig
views-view-unformatted.html.twig
views-view-fields--foobar--page.html.twig
views-view-fields--page.html.twig
views-view-fields--foobar.html.twig
views-view-fields.html.twig
```
&:
```
[base template name]--[view machine name]--[view display id].html.twig
[base template name]--[view machine name]--[view display type].html.twig
[base template name]--[view display type].html.twig
[base template name]--[view machine name].html.twig
[base template name].html.twig

E.g.: "unformatted list" with machine name "view_name" and with a single block, "block_1"
views-view-unformatted--view-name--block-1.html.twig
```
More here: <br />
http://redcrackle.com/blog/drupal-8/theme-views-templates<br />
https://api.drupal.org/api/drupal/core%21modules%21views%21views.theme.inc/group/views_templates/8.2.x
