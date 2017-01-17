<?php
  use Roots\Sage\Extras;

  $menu_items = wp_get_nav_menu_items('Home Nav');
  $menu_number = Extras\menu_number('Home Nav', get_the_title());

  $posts = json_decode(file_get_contents("http://cmoa.org/wp-json/events/v1/categories/carnegie-international"));
  $post_count = count($posts);
?>

<div class="article-list">
  <?php if(!empty($post_count)): ?>
    <?php foreach($posts as $p): ?>
      <?php
        $date = new DateTime($p->start);
        $excerpt = $p->excerpt.' <a class="moretag" href="'. $p->url . '">Read more <span class="screen-reader-text">about ' . $p->name . '</span></a>';
      ?>
      <!-- <span class="article-list__section-number"><?= $menu_number .'.'. $post_count-- ?></span> -->
      <article class="article-item" itemscope itemtype="http://schema.org/Event">
        <h2 class="article-item__title" itemprop="name"><a itemprop="url" href="<?= $p->url ?>" class="external-link"><?= $p->name ?><span class="screen-reader-text"> (Link opens on an external site)</span></a></h2>
        <h3 class="article-item__date" aria-label="<?= $date->format("F jS, Y \a\\t g a") ?>">
          <time itemprop="startDate" datetime="<?= $date->format("Y-m-d") ?>"><?= $date->format("d M Y") ?><br /><?= $date->format("g a") ?></time>
        </h2>
        <?= wpautop($excerpt) ?>
      </article>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="article-item">
      <p>No programs are currently scheduled. Check back soon!</p>
    </div>
  <?php endif; ?>
</div>

<?php
  $program_categories = get_terms('program_categories');
  foreach ($program_categories as $category) {
    $args = array(
      'post_type' => 'program',
      'categories' => $category,
      'post_status' => 'publish'
    );
    $programs = get_posts( $args );
  }
?>

<?php if(count($program_categories)): ?>
  <section class="page-header">
    <span class="section-number"></span>
    <h2 class="page-header__title underline"><span class="page-title">Past Programs</span></h2>
  </section>
  <?php foreach($program_categories as $category): ?>
    <section class="page-header">
      <span class="section-number"></span>
      <h3 class="page-header__title"><a href="<?= get_term_link($category) ?>" class="page-title"><?= $category->name ?></a></h2>
    </section>
  <?php endforeach; ?>
<?php endif; ?>
