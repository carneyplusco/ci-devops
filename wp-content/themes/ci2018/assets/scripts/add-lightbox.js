(function($) {

  $(document).ready(function() {

    $('img').on('click', function() {
      if(!$(this).is('.featherlight-inner')) {
        $.featherlight($(this), {
            closeOnClick: 'anywhere',
            closeSpeed: 0,
            openSpeed: 0
        });
      }
    });

  });

})(jQuery);
