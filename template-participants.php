<?php
/**
 * Template Name: Participants
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'participants'); ?>
<?php endwhile; ?>
