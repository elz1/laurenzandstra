<?php

namespace Functions;

// registers theme menus
function register_menus() {
  register_nav_menu('main', 'Main navigation');
}
add_action('init', '\Functions\register_menus');

// output main navigation menu
function main_navigation() {

  // main navigation
  $params = [
    'theme_location' => 'main',
    'menu_id'        => 'main-navigation',
    'container'      => false,
    'echo'           => false
  ];
  $nav_menu = wp_nav_menu($params);

  // hamburger toggle
  $toggle_src = get_template_directory_uri() . '/img/ic_menu_black_24px.svg';
  $toggle_img = "<img src='$toggle_src' />";

  // entire nav markup
  $navigation = "<nav>$nav_menu$toggle_img</nav";

  // echo
  echo $navigation;
}
