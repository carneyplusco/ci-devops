<?php
register_post_type('reading',
    array(
      'labels' => array(
        'name' => __('Readings'),
        'singular_name' => __('Reading'),
        'add_new' => __('Add New' ),
        'add_new_item' => __('Add New Reading'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Reading'),
        'new_item' => __('New Reading'),
        'view' => __('View Reading'),
        'view_item' => __('View Reading'),
        'search_items' => __('Search Readings'),
        'all_items' => __('All Readings'),
        'not_found' => __('No readings found.'),
        'not_found_in_trash' => __('No readings found in Trash')
      ),
      'public' => true,
      'hierarchical' => false,
      'has_archive' => true,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'rewrite' => array('slug' => 'readings', 'with_front' => false),
      'menu_icon' => 'dashicons-awards'
    )
  );
?>
