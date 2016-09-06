<!-- <?php get_template_part('templates/page', 'header'); ?> -->
<?php get_search_form(); ?>

<!--?php if (!have_posts()) : ?-->
  <!--div class="alert alert-warning"-->
    <!--?php _e('Sorry, no results were found.', 'sage'); ?-->
  <!--/div-->
<!--?php endif; ?-->

<!--?php query_posts($query_string . '&showposts=3'); ?-->
<!--?php while (have_posts()) : the_post(); ?-->
  <!--?php get_template_part('templates/content', 'search'); ?-->
<!--?php endwhile; ?-->

<div id="search-results"></div>

<!--?php the_posts_navigation(); ?-->
<span id="ajax-results" style="display: none;"><a href="#">LOAD MORE</a></span>
