(function($) {

  $(document).ready(function() {
    if ($('body').is('.home')) {
      var characters = ["c", "i", "5", "7", "1", "8"],
          i          = 1;

      $('.content').addClass("icon-c");

      setInterval(function(){
        if (i != 0) {
          $('.content').removeClass("icon-" + characters[i-1]);
        } else {
          $('.content').removeClass("icon-" + characters[5]);
        }
        $('.content').addClass("icon-" + characters[i]);

        i = (i + 1) % 6;
      }, 10000);
    }
  });

})(jQuery);
