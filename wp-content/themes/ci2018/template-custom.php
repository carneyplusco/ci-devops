<?php
/**
 * Template Name: Custom Template
 */
?>

<?php
  $title = get_the_title();

  echo '<a id="page-title" href="/' . strtolower($title) . '"><span class="up-arrow"></span>' . $title . '</a>';
?>
<a class="back-button" href="/">BACK</a>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/page', 'header'); ?> -->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
