(function($) {

  $(document).ready(function() {
    if ($('body').is('.home')) {
      var characters = ["c", "i", "5", "7", "1", "8"],
          i          = 1;

      setInterval(function(){
        $('.main').css('background', "url('wp-content/themes/ci2018/assets/images/CI5718/ci-" + characters[i] + ".svg') no-repeat top");

        i = (i + 1) % 6;
      }, 10000);
    }
  });

})(jQuery);
