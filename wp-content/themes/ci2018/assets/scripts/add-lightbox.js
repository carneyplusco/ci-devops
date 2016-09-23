(function($) {

  $(document).ready(function() {
    console.log($('img'));

    $('img').on('click', function() {
      if(!$(this).is('.featherlight-inner')) {
        $.featherlight($(this));
      }
    });
  });

})(jQuery);
