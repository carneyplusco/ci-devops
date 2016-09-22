(function($){
  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  var result_template = loadResultTemplate();

  var dev_programs = 'http://andre3k.local:3000/wp-json/events/v1/categories/carnegie-international-2018';

  $(document).ready(function(){

    if($('body').is('.programs')) {
      $.when(result_template)
      .then(function(data){
        result_template = data;

        $.get(dev_programs)
        .success(function(programs){
          var sorted = sortByDate(programs);
          displayResults(sorted);
          appendPastEventsLink();
        });

      });
    }

  });



  // function definitions

  function appendPastEventsLink() {
    var link = '<span class="bullet">&bull;</span><a class="past-events" href="http://www.cmoa.org/calendar/">VIEW PAST EVENTS</a><span class="external-link-arrow"</span>';
    $('main').append(link);
  }

  function appendToPage(result, template) {
    var date = parseDate(result.start);

    var data = {
      date: date.day + ' ' + date.month + ' ' + date.year,
      description: result.description,
      name: result.name.toUpperCase(),
      time: date.time,
      url: result.url
    };

    var rendered = Mustache.render(template, data);
    $('main').append(rendered);
  }

  function displayResults(results) {
    if ($(results).length == 0) {
      $('main').append('<p>No programs found.</p>');
    } else {
      $(results).each(function(i, el) {
        appendToPage(el, result_template);
      });
    }
  }

  function loadResultTemplate() {
    return $.get('/wp-content/themes/ci2018/templates/programs.mst', function(temp) {
      return temp;
    });
  }

  function parseDate(data) {
    var date   = new Date(data),
        day    = date.getDate(),
        month  = months[date.getMonth()],
        year   = date.getFullYear(),
        hour   = date.getHours(),
        minute = date.getMinutes(),
        time   = hour % 12;

    if (minute != 0) { time += ':' + minute; }
    if (hour > 12) {
      time += ' pm';
    } else {
      time += ' am';
    }

    return {
      day: day,
      month: month,
      year: year,
      time: time
    }
  }

  function sortByDate(programs) {
    return programs.sort(function(a,b) {
      if (a.start < b.start)       { return -1; }
      else if (a.start == b.start) { return  0; }
      else                         { return  1; }
    });
  }

})(jQuery);
