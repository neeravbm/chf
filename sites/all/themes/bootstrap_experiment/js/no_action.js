/**
 * Created by neeravbm on 2/17/14.
 */
(function ($) {
  Drupal.behaviors.no_action = {
    attach: function (context, settings) {
      $('.no-action', context).click(function(e) {
        e.preventDefault();
      });
    }
  }
})(jQuery);