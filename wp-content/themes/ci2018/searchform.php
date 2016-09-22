<form class="search-form">
  <span class="icon">
    <span class="icon-search"></span>
  </span>
  <input type="search"
      placeholder="<?php echo esc_attr_x( 'SEARCH', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
       />
</form>
<span class="input-underline"></span>
