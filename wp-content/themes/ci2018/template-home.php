<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php
  if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ol id="%!$s" class="%2$s">%3$s</ol>']);
  endif;
?>

<?php get_search_form(); ?>
