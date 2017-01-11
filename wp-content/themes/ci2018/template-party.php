<?php
/**
 * Template Name: Party Records
 */
?>

<section class="page-header">
  <h1 class="page-header__title"><span class="page-title">Party Records Search</span></h1>
  <a class="page-header__back-button" href="/">Back</a>
</section>

<section class="page-header">
  <span class="section-number"><i class="icon-search"></i></span>
  <form class="search-form">
    <input type="search" placeholder="<?= esc_attr_x( 'SEARCH', 'placeholder' ) ?>" value="<?= esc_attr(get_query_var( 'search' )) ?>" name="search" />
    <span class="input-underline"></span>
  </form>
</section>

<section class="page-content">
  <div class="article-list">
    <div id="search-results"></div>

    <div id="ajax-results" style="display: none;">
      <span class="section-number"><i class="icon-loop"></i></span>
      <div class="page-content__body">
        <a href="#">LOAD MORE</a>
      </div>
    </div>
  </div>
</section>
