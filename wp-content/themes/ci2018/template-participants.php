<?php
/**
 * Template Name: Participants
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
  <section class="page-content">
    <?php get_template_part('templates/content', 'participants'); ?>
  </section>
<?php endwhile; ?>

<section class="page-content">
  <section class="page-header">
    <span class="section-number"><i class="icon-search"></i></span>
    <?php get_template_part('templates/party', 'searchform'); ?>
  </section>
</section>
