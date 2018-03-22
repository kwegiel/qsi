(function ($, Drupal) {
  Drupal.behaviors.qsi = {
    attach: function (context, settings) {      
      $('.qsi li', context).once().each(function(index) {
        $(this).delay(400*index).fadeIn(300);
    });
    }
  };
})(jQuery, Drupal);