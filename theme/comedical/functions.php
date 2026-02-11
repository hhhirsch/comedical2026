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

add_action('init', function () {
  register_post_type('project', [
    'labels' => [
      'name' => __('Projekte', 'comedical'),
      'singular_name' => __('Projekt', 'comedical'),
      'add_new_item' => __('Projekt hinzufügen', 'comedical'),
      'edit_item' => __('Projekt bearbeiten', 'comedical'),
      'new_item' => __('Neues Projekt', 'comedical'),
      'view_item' => __('Projekt ansehen', 'comedical'),
      'search_items' => __('Projekte durchsuchen', 'comedical'),
      'not_found' => __('Keine Projekte gefunden', 'comedical'),
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => [
      'slug' => 'projekte',
      'with_front' => false,
    ],
    'menu_icon' => 'dashicons-portfolio',
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
  ]);
});
