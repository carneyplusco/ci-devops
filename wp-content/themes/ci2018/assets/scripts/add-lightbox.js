(function($) {

  $(document).ready(function() {

    $('img').on('click', function() {
      if(!$(this).is('.featherlight-inner')) {
        $.featherlight($(this), {
            openSpeed: 0,
            closeSpeed: 0
        });
      }
    });

  });

})(jQuery);
