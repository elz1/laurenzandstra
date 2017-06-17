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
    'menu_class'     => 'links',
    'container'      => false,
    'echo'           => false
  ];
  $nav_menu = wp_nav_menu($params);

  // link to homepage
  $home_uri = home_url( '/' );
  $home = "<a href='$home_uri'>HOME</a>";

  // hamburger toggle
  $toggle_src = get_template_directory_uri() . '/img/ic_menu_black_24px.svg';
  $toggle = "<img class ='toggle' src='$toggle_src' />";

  // entire nav markup
  $navigation = "<nav class='main'>$home$nav_menu$toggle</nav>";

  // echo
  echo $navigation;
}
