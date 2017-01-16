<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $ci_blog_category = 25;
  $posts = json_decode(file_get_contents("http://blog.cmoa.org/wp-json/wp/v2/posts?categories={$ci_blog_category}"));
  $post_count = count($posts);
?>

<div class="article-list">
  <?php foreach($posts as $p): ?>
    <span class="article-list__section-number"><?= $menu_number .'.'. $post_count-- ?></span>
    <article class="article-item" itemscope itemtype="http://schema.org/NewsArticle">
      <h2 itemprop="headline"><a itemprop="url" href="<?= $p->link ?>" class="external-link"><?= $p->title->rendered ?><span class="screen-reader-text"> (Link opens on an external site)</span></a></h2>
      <?= wpautop($p->post_list_text) ?>
    </article>
  <?php endforeach; ?>
</div>
