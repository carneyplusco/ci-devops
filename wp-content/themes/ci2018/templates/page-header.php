<?php
  $title = get_the_title();
  $menu_items = array_map(function($item) {
    return $item->title;
  }, wp_get_nav_menu_items('Home Nav'));
  $title_number = array_search($title, $menu_items) + 1;
?>

<section class="page-header">
  <span class="section-number"><?= $title_number ?>.</span>
  <h1><a id="page-title" href="<?= get_the_permalink() ?>"><?= $title ?></a></h1>
  <a class="back-button" href="/">BACK</a>
</section>
<span class="title-underline"></span>
