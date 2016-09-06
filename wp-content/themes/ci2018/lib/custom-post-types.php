<?php
register_post_type('publication',
    array(
      'labels' => array(
        'name' => __('Publications'),
        'singular_name' => __('Publication'),
        'add_new' => __('Add New' ),
        'add_new_item' => __('Add New Publication'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Publication'),
        'new_item' => __('New Publication'),
        'view' => __('View Publication'),
        'view_item' => __('View Publication'),
        'search_items' => __('Search Publications'),
        'all_items' => __('All Publications'),
        'not_found' => __('No publications found.'),
        'not_found_in_trash' => __('No publications found in Trash')
      ),
      'public' => true,
      'hierarchical' => false,
      'has_archive' => true,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'rewrite' => array('slug' => 'publications', 'with_front' => false),
      'menu_icon' => 'dashicons-awards'
    )
  );
?>
