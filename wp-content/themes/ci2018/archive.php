<?php
  use Roots\Sage\Extras;
  $category = get_the_category()[0];
  $category_number = Extras\menu_number('Home Nav', $category->name);
?>

<section class="page-header">
  <span class="section-number"><?= $category_number ?>.</span>
  <h1 class="page-header__title underline"><?php the_category(' ') ?></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>">Back</a>
</section>

<section class="page-content">
  <div class="article-list">
    <?php $count = $category->category_count; ?>
    <?php while (have_posts()) : the_post(); ?>
      <span class="article-list__section-number"><?= $category_number .'.'. $count-- ?></span>
      <div class="article-item">
        <h2 class="article-item__title"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
        <h3 class="article-item__date"><?php the_time("d M Y"); ?></h2>
        <?php the_excerpt(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>
