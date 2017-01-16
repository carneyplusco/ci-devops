<form class="search-form" action="/party-records/">
  <input type="search" placeholder="<?= esc_attr_x( 'SEARCH PAST INTERNATIONALS', 'placeholder' ) ?>" value="<?= esc_attr(get_query_var( 'search' )) ?>" name="search" />
  <span class="input-underline"></span>
</form>
