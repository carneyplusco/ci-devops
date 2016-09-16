<?php $title = get_the_title(); ?>
<?php $menu_items = wp_get_nav_menu_items('Home Nav'); ?>
<?php
  $title_number = 0;
  foreach ($menu_items as $key => $value) {
    if (strtoupper($value->title) == strtoupper($title)) {
      $title_number = $key + 1;
    }
  }
?>

<header>
  <?php
    echo '<a id="page-title" href="/' . strtolower($title) . '"><span class="section-number">' . $title_number . '.</span>' . $title . '</a>';
  ?>
  <a class="back-button" href="/">BACK</a>
</header>
