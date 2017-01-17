<?php
namespace Roots\Sage\Setup;
use Roots\Sage\Assets;

/**
 * Returns app store badge svg with link to app
 */
function app_store_badge() {
  return '<a href="https://itunes.apple.com/us/app/carnegie-museum-of-art/id700992890?mt=8" title="Download our app on the App Store">'.Assets\inline_svg('images/app-store-badge.svg').'<span class="screen-reader-text">Download our app on the App Store</span></a>';
}

/**
 * Returns app store link to app
 */
function app_store_link() {
  return '<a href="https://itunes.apple.com/us/app/carnegie-museum-of-art/id700992890?mt=8" title="Download our app on the App Store">download on the App Store</a>';
}

/**
 * Register shortcodes
 */
function register_shortcodes() {
	add_shortcode('app_store_badge', __NAMESPACE__ . '\\app_store_badge');
  add_shortcode('app_store_link', __NAMESPACE__ . '\\app_store_link');
}
add_action('init', __NAMESPACE__ . '\\register_shortcodes');

?>
