<?php
  use Roots\Sage\Extras;

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
      <article class="article-item" vocab="http://schema.org/" typeof="Event">
        <h2 class="article-item__title" property="name"><a property="url" href="<?= $p->url ?>" class="external-link"><?= $p->name ?></a></h2>
        <span class="screen-reader-text">(Link opens on an external site)</span>
        <h3 class="article-item__date" aria-label="<?= $date->format("F jS, Y \a\\t g a") ?>">
          <time property="startDate" datetime="<?= $date->format("Y-m-d") ?>"><?= $date->format("d M Y") ?><br /><?= $date->format("g a") ?></time>
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
    $programs = get_posts($args);
  }
  $post_count = 1;
?>

<?php if(count($program_categories)): ?>
  <section class="page-header">
    <span class="section-number"></span>
    <h2 class="page-header__title underline"><span class="page-title">Past Programs</span></h2>
  </section>
  <?php foreach($program_categories as $category): ?>
    <section class="page-header">
      <span class="section-number"><?= $menu_number .'.'. $post_count++ ?></span>
      <h3 class="page-header__title"><a href="<?= get_term_link($category) ?>" class="page-title"><?= $category->name ?></a></h2>
    </section>
  <?php endforeach; ?>
<?php endif; ?>
