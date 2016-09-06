<!--form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>"-->
<form class="search-form">
    <label>
        <input type="search"
            placeholder="<?php echo esc_attr_x( 'SEARCH', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
             />
    </label>
</form>

<!-- <input class="search-form" placeholder="SEARCH"></input> -->
