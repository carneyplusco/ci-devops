<?php $category = get_the_category()[0]; ?>
<?php $menu_items = wp_get_nav_menu_items('Home Nav'); ?>
<?php
  $category_number = 0;
  foreach ($menu_items as $key => $value) {
    if (strtoupper($value->title) == strtoupper($category->name)) {
      $category_number = $key + 1;
    }
  }
?>

<section class="page-header">
  <?php
    $title = strtoupper(wp_title('', false, 'right'));
    $title_length = strlen($title);
    echo '<span class="section-number">' . $category_number . '.</span><a id="page-title" href="">' . $title . '</a>';
  ?>
  <span class="title-underline"></span>
  <a class="back-button" href="/">BACK</a>
</section>

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
