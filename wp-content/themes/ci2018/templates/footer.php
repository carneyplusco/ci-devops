<?php use Roots\Sage\Assets; ?>

<footer class="main-footer">
  <div class="container">
    <section class="logo">
        <?= Assets\inline_svg('images/cmoa.svg'); ?>
      </section>

      <section class="location">
        <?= do_shortcode('[static_data global="location"]') ?>
        <p><small>One of the four <a href="http://www.carnegiemuseums.org/">Carnegie Museums of Pittsburgh</a></small></p>
      </section>

      <section class="navigation">
        <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(['theme_location' => 'footer_navigation', 'container' => '', 'menu_class' => 'nav-footer']);
          endif;
        ?>
      </section>

      <section class="social">
        <ul class="links">
          <li>
            <a href="http://www.facebook.com/CarnegieMuseumofArt" aria-label="facebook" title="Facebook"><i class="icon -facebook" aria-hidden="true"></i><span class="screen-reader-text">Carnegie Musemu of Art on Facebook</span></a>
          </li>
          <li>
            <a href="http://twitter.com/cmoa" aria-label="twitter" title="Twitter"><i class="icon -twitter" aria-hidden="true"></i><span class="screen-reader-text">Carnegie Musemu of Art on Twitter</span></a>
          </li>
          <li>
            <a href="http://instagram.com/thecmoa" aria-label="instagram" title="Instagram"><i class="icon -instagram" aria-hidden="true"></i><span class="screen-reader-text">Carnegie Musemu of Art on Instagram</span></a>
          </li>
          <li>
            <a href="http://vimeo.com/cmoa" aria-label="vimeo" title="Vimeo"><i class="icon -vimeo" aria-hidden="true"></i><span class="screen-reader-text">Carnegie Musemu of Art on Vimeo</span></a>
          </li>
        </ul>
        <p>
          <?= do_shortcode('[app_store_badge]') ?>
        </p>
      </section>
    </div>
    <p class="legal">
      <small>&copy; <?= date('Y') ?> Carnegie Museum of Art, Carnegie Institute<a href="http://cmoa.org/about/terms-of-use/">Terms of Use</a><a href="http://www.carnegiemuseums.org/interior.php?pageID=100">Privacy Policy</a></small>
    </p>
  </div>
</footer>

<?php $internal_domains = get_field('internal_domains', 'options') ?: ''; ?>
<script type="text/javascript">
  const INTERNAL_DOMAINS = <?= json_encode(explode("\n", $internal_domains), true) ?>;
</script>
