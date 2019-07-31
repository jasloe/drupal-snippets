https://www.lehelmatyus.com/947/drupal-8-view-template-naming-convention

```
//-------------------------
// Display output: 
// The overall wrapper for the view.
//-------------------------
views-view.html.twig, *
views-view--{VIEW_ID}.html.twig,
views-view--block.html.twig,
views-view--{VIEW_ID}--block.html.twig,
views-view--default.html.twig,
views-view--{BLOCK_ID}.html.twig,
views-view--{VIEW_ID}--{BLOCK_ID}.html.twig

//-------------------------
// Style output: 
// Wrapper for the actual content of the view
//-------------------------
views-view-unformatted.html.twig, *
views-view-unformatted--{VIEW_ID}.html.twig,
views-view-unformatted--block.html.twig,
views-view-unformatted--{VIEW_ID}--block.html.twig,
views-view-unformatted--default.html.twig,
views-view-unformatted--{BLOCK_ID}.html.twig,
views-view-unformatted--{VIEW_ID}--{BLOCK_ID}.html.twig

//-------------------------
// Row style output: 
// Individually returned records of the view
//-------------------------
views-view-fields.html.twig, *
views-view-fields--{VIEW_ID}.html.twig,
views-view-fields--block.html.twig,
views-view-fields--{VIEW_ID}--block.html.twig,
views-view-fields--default.html.twig,
views-view-fields--{BLOCK_ID}.html.twig,
views-view-fields--{VIEW_ID}--{BLOCK_ID}.html.twig

//-------------------------
// Field Content:
// Individual field items inside of a record
//-------------------------
views-view-field.html.twig, *
views-view-field--{FIELD_NAME}.html.twig,
views-view-field--{VIEW_ID}.html.twig,
views-view-field--{VIEW_ID}--{FIELD_NAME}.html.twig,
views-view-field--block.html.twig,
views-view-field--block--{FIELD_NAME}.html.twig,
views-view-field--{VIEW_ID}--block.html.twig,
views-view-field--{VIEW_ID}--block--{FIELD_NAME}.html.twig,
views-view-field--{BLOCK_ID}.html.twig,
views-view-field--{BLOCK_ID}--{FIELD_NAME}.html.twig,
views-view-field--{VIEW_ID}--{BLOCK_ID}.html.twig,
views-view-field--{VIEW_ID}--{BLOCK_ID}--{FIELD_NAME}.html.twig
```
