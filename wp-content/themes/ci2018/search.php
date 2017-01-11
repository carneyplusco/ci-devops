<section class="page-header">
  <span class="section-number"><i class="icon-search"></i></span>
  <?php get_search_form(); ?>
</section>

<section class="page-content">
  <div class="article-list">
    <?php $count = count($wp_query->posts); ?>
    <?php while (have_posts()): the_post(); ?>
      <div class="article-item">
        <h2 class="article-item__title"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
        <h3 class="article-item__date"><?php the_time("d M Y"); ?></h2>
        <?php the_excerpt(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>
