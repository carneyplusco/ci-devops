<?php
  use Roots\Sage\Extras;
  $category = get_queried_object();
?>

<section class="page-header">
  <span class="section-number"><i class="up-arrow"></i></span>
  <h1 class="page-header__title"><a href="/programs/">Programs</a></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-header">
  <h2 class="page-header__title underline"><span class="page-title"><?= $category->name ?></a></h2>
</section>

<section class="page-content">
  <div class="article-list">
    <div class="page-content__body">
      <?= wpautop($category->description) ?>
    </div>
    <?php while (have_posts()) : the_post(); ?>
      <span class="article-list__section-number"></span>
      <article class="article-item" vocab="http://schema.org/" typeof="NewsArticle">
        <h3 class="article-item__title" property="headline"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
        <h4 class="article-item__date" aria-label="<?= the_time("F jS, Y") ?>">
          <time property="datePublished" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("d M Y"); ?></time>
        </h4>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>
