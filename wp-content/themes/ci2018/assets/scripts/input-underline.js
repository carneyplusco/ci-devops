const Underliner = (function($) {

  function init() {
    var input = $('.search-form input');

    if( input.val() == '' ) {
      add_dashes(6);
    } else {
      add_dashes(input.val().length);
    }

    input.on('input', function() {
      var length = input.val().length;

      if (length == 0) { add_dashes(6); }
      else { add_dashes(length); }
    });
  }

  function add_dashes(amount) {
    $('.input-underline').html('-'.repeat(amount));
  }

  return {
    init
  }

})(jQuery);

export default Underliner;
