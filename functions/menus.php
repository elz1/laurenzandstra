<?php

namespace Functions;

// registers theme menus
function register_menus() {
  register_nav_menu('main', 'Main navigation');
}
add_action('init', '\Functions\register_menus');

function add_home_button($items) {
  $homelink = '<li class="home"><a href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
  // add the home link to the end of the menu
  $items = $items . $homelink;
  return $items;
}
add_filter('wp_nav_menu_main_items', 'add_home_button');
