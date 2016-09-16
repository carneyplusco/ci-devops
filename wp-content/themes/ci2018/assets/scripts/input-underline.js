(function($) {

  $(document).ready(function() {
    if($('body').is('.search')) {
      var input = $('.search-form input');

      if (input.length != 0) {
        if( input.val() == '' ) {
          add_dashes(6);
        } else {
          add_dashes(input.val().length);
        }
      }

      input.on('input', function() {
        var length = input.val().length;

        if (length == 0) {
          add_dashes(6);
        } else {
          add_dashes(length);
        }
      });
    }
  });

  function add_dashes(amount) {
    // to accomodate mobile until a better solution is found
    if (amount > 16) { amount = 16; }
    $('.input-underline').html('-'.repeat(amount));
  }

})(jQuery);
