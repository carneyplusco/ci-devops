<?php

namespace Roots\Sage\Setup;

/**
 * Custom post types / taxonomies
*/
function create_post_types() {
  register_post_type('program',
    array(
      'labels' => array(
        'name' => __('Programs'),
        'singular_name' => __('Program'),
        'add_new' => __('Add New' ),
        'add_new_item' => __('Add New Program'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Program'),
        'new_item' => __('New Program'),
        'view' => __('View Program'),
        'view_item' => __('View Program'),
        'search_items' => __('Search Programs'),
        'all_items' => __('Program Archive'),
        'not_found' => __('No programs found.'),
        'not_found_in_trash' => __('No programs found in Trash')
      ),
      'public' => true,
      'hierarchical' => false,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'map_meta_cap' => true,
      'capabilities' => array(
        'read_posts' => 'read_programs',
        'read_private_posts' => 'read_private_programs',
        'edit_posts' => 'edit_programs',
        'edit_others_posts' => 'edit_others_programs',
        'edit_private_posts' => 'edit_private_programs',
        'edit_published_posts' => 'edit_programs',
        'publish_posts' => 'publish_programs',
        'create_posts' => 'edit_programs',
        'delete_posts' => 'delete_programs',
        'delete_published_posts' => 'delete_programs',
        'delete_others_posts' => 'delete_others_programs',
        'delete_private_posts' => 'delete_private_programs',
      ),
      'rewrite' => array('slug' => 'programs', 'with_front' => false),
      'menu_icon' => 'dashicons-art'
    )
  );
}
add_action('init', __NAMESPACE__ . '\\create_post_types');

?>
