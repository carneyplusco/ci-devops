<form class="search-form">
  <!--span class="icon">
    <img align="left" class="icon-search" src="wp-content/themes/ci2018/assets/icons/uEA02-ci-search.svg">
  </span-->
  <span class="icon">
    <span class="icon-search"></span>
    <!-- <i class="icon -ci-search"></i> -->
  </span>
  <input type="search"
      placeholder="<?php echo esc_attr_x( 'SEARCH', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
       />
</form>
<span class="input-underline"></span>
