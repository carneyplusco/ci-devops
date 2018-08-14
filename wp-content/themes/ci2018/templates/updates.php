<?php if (have_rows('updates')): ?>
  <article class="updates">
    <?php $updates_heading = get_field('updates_heading'); ?>
    <?php if (!empty($updates_heading)): ?>
      <h2><?= $updates_heading ?></h2>
    <?php else: ?>
      <h2 class="screen-reader-text">Updates</h2>
    <?php endif; ?>

    <ul class="updates__list">
      <?php while (have_rows('updates')): the_row(); ?>
        <?php
          $link = get_sub_field('link');
          $is_internal = preg_match('/((https?:)?\/\/)?(([A-Za-z0-9_]*\.)?cmoa.org)/i', $link['url']);
        ?>
        <li>
          <a class="<?= !$is_internal ? 'external-link' : '' ?>"
             href="<?= $link['url'] ?>"
             target="<?= $link['target'] ?>"
          >
            <?= $link['title'] ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </article>
<?php endif; ?>
