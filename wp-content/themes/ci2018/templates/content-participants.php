<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $participants_query = array(
    'post_type'      => 'participant',
    'post_status'    => 'publish',
    'orderby'        => 'meta_value',
    'meta_key'       => 'last_name',
    'order'          => 'ASC',
  );
  $participants = new WP_Query($participants_query);
?>

<?php if($participants->have_posts()): ?>
  <?php $post_count = 1 ?>
  <div class="article-list -participants">
    <?php while ($participants->have_posts()) : $participants->the_post(); ?>
      <span class="article-list__section-number"><?= $menu_number .'.'. $post_count++ ?></span>
      <div class="article-link" itemscope itemtype="http://schema.org/Person">
        <h2 class="article-item__title" itemprop="name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
