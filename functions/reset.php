<?php

namespace Functions;

// removes extra junk
function reset() {
  // wp emojis
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('admin_print_styles', 'print_emoji_styles');
  // dns prefetching
  remove_action( 'wp_head', 'wp_resource_hints', 2 );
  // embeds
  wp_deregister_script('wp-embed');
  add_theme_support( 'post-thumbnails' );
}

add_action('init', '\Functions\reset');
