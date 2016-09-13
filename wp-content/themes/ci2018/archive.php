<?php
  $title = strtoupper(wp_title('', false, 'right'));
  echo '<a id="page-title" href=""><span class="up-arrow"></span>' . $title . '</a>';
?>
<a class="back-button" href="/">BACK</a>

<?php $category = get_the_category()[0]; ?>
<?php $menu_items = wp_get_nav_menu_items('Home Nav'); ?>
<?php
  $category_number = 0;
  foreach ($menu_items as $key => $value) {
    if ($value->title == strtoupper($category->name)) {
      $category_number = $key + 1;
    }
  }
?>

<?php $count = $category->category_count; ?>
<?php while (have_posts()) : the_post(); ?>
  <article>
    <aside>
      <span><?php echo $category_number . '.' . $count; ?></span>
    </aside>
    <section>
      <header>
        <p class="entry-title">
          <?php the_title(); ?>
        </p>
      </header>
      <p>
        <?php the_content(); ?>
      </p>
    </section>
  </article>
  <?php $count -= 1; ?>
<?php endwhile; ?>
