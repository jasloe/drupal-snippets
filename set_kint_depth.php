// Change kint max_depth setting.
if (class_exists('Kint')) {
  // Set the max_depth to prevent out-of-memory.
  \Kint::$max_depth = 4;
}

// Enable ClassMethodsPlugin, ClassStaticsPlugin, and IteratorPlugin
if (class_exists('Kint')) {
  // Set the max_depth to prevent out-of-memory.
  \Kint::$max_depth = 4;
  // Set Kint plugins
  \Kint::$plugins = array_merge(\Kint::$plugins, [
  	'\\Kint\\Parser\\ClassMethodsPlugin',
  	'\\Kint\\Parser\\ClassStaticsPlugin',
  	'\\Kint\\Parser\\IteratorPlugin',
  ]);
}
