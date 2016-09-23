(function($) {

  $(document).ready(function() {

    $('img').on('click', function() {
      if(!$(this).is('.featherlight-inner')) {
        $.featherlight($(this));
      }
    });
    
  });

})(jQuery);
