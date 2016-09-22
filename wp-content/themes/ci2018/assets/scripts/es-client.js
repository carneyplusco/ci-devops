(function($) {
  var results_limit = 10;
  var current_result_index = 0;
  var result_template = loadResultTemplate();

  $(document).ready(function() {
    // ElasticSearch JQuery client
    var client = new $.es.Client({
      host: esclient.es_host
    });

    var query = $('.search-form').find('input').val();

    // If not search results page, redirect
    // If search results page, call query with pagination enabled
    $.when(result_template)
    .then(function(data){
      result_template = data;
      if ( $('body').is('.search') ) {
        search(client, query);
      }
    });

    // Search field listener
    $('.search-form').submit(function(e) {
      e.preventDefault();
      query = $(this).find('input').val();
      window.location = '/search/' + query;
    });

    // "LOAD MORE" listener
    $('#ajax-results').click(function(e){
      e.preventDefault();
      current_result_index += results_limit;
      search(client, query);
    });

  });



  //
  // function definitions
  //

  function appendToPage(result, template) {

    var data = {
      id: result.id,
      internationals: [],
      title: result.name.toUpperCase()
    };

    $(result.internationals).each(function(i, el){
      data.internationals.push({
        name: el.name.toUpperCase(),
        roles: el.roles.join(', ')
      });
    });

    var rendered = Mustache.render(template, data);
    $('#search-results').append(rendered);

  }

  function displayResults(results) {
    if ($(results).length == 0) {
      $('#ajax-results').hide();
      $('#search-results').append('<p class="no-results">No results found.</p>');
    } else {
      $(results).each(function(i, el) {
        var result = el['_source'];
        appendToPage(result, result_template);

        if ($(results).length < results_limit) {
          $('#ajax-results').hide();
        } else {
          $('#ajax-results').show();
        }
      });
    }
  }

  function loadResultTemplate() {
    return $.get('/wp-content/themes/ci2018/templates/search-result.mst', function(temp) {
      return temp;
    });
  }

  function resetResults() {
    $('#search-results').empty();
    current_result_index = 0;
  }

  function search(client, query) {
    // query names of artist, exhibition, and role of participant
    client.search({
      index: 'party',
      type: 'record',
      body: {
        query: {
          "multi_match": {
              "query": query,
              "fields": ["name", "internationals.name", "internationals.roles"]
          }
        }
      },
      // PAGINATION OPTIONS
      size: results_limit,
      from: current_result_index
    }).then(function (resp) {
      var hits = resp.hits.hits;
      displayResults(hits);

    }, function (err) {
      console.trace(err.message);
    });
  }

})(jQuery);
