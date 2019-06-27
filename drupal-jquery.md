Still have to support jQuery. Here's a reminder to wrap jQuery in a....wrapper?

```
(function ($) {
  console.log('i');
  window.onload = function () {
    if (window.jQuery) {
      // jQuery is loaded
      console.log("I am jQuery.");
    } else {
      // jQuery is not loaded
      console.log("I am not jQuery");
    }
  }
})(jQuery);
```
