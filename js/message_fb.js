/**
 * @file
 * JS to allow Facebook style comments.
 */

(function($) {

Drupal.behaviors.messageFb = {
  attach: function (context, settings) {
    $('.babble-comment-form:not(.message-fb-processed)', context)
      .addClass('message-fb-processed')
      .find('.form-textarea')
      .keypress(function (event) {
        if (event.which == 13) {
          event.preventDefault();
          var $this = $(this);
          if ($this.val()) {
            $this.parents('form').submit();
          }
        }
      });
  }
}

})(jQuery);

