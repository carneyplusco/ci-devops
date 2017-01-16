<?php
  use Roots\Sage\Extras;
  $category = get_the_category()[0];
  $category_number = Extras\menu_number('Home Nav', $category->name);
?>

<section class="page-header">
  <span class="section-number"><?= $category_number ?>.</span>
  <h1 class="page-header__title underline"><?php the_category(' ') ?></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-content">
  <div class="article-list">
    <?php $count = $category->category_count; ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php $pdf_link = get_field('pdf_link'); ?>
      <span class="article-list__section-number"><?= $category_number .'.'. $count-- ?></span>
      <article class="article-item" itemscope itemtype="http://schema.org/ScholarlyArticle">
        <h2 class="article-item__author" itemprop="author"><?php the_field('author_name') ?>
        <h2 class="article-item__title" itemprop="headline"><a href="<?= $pdf_link['url'] ?>"><?php the_title(); ?><span class="screen-reader-text">(PDF Download)</span></a></h2>
        <h3 class="article-item__date">
          <time itemprop="datePublished"><?php the_field('publication_date'); ?></time>
        </h2>
      </article>
    <?php endwhile; ?>
  </div>
</section>
