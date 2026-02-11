<?php
/**
 * Comedical Theme functions
 */

if (!defined('ABSPATH')) {
  exit;
}

add_action('wp_enqueue_scripts', function () {
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'comedical-main',
    get_theme_file_uri('assets/css/main.css'),
    [],
    $theme_version
  );

  wp_enqueue_script(
    'comedical-slider',
    get_theme_file_uri('assets/js/slider.js'),
    [],
    $theme_version,
    true
  );
});
