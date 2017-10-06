<?php

namespace Functions;

// registers theme menus
function register_menus() {
  register_nav_menu('main', 'Main navigation');
}
add_action('init', '\Functions\register_menus');

// output main navigation menu
function header_setup() {

  
  $logo = logo_markup();
  $toggle = toggle_markup();
  $params = [
    'theme_location' => 'main',
    'menu_class'     => 'menu-items',
    'container'      => false,
    'echo'           => false,
    'menu_id'        => 'menu'
  ];

  
  $nav = '<div id="menuToggle" class="hamburger toggle">
                    <input type="checkbox" />'.wp_nav_menu($params) . '
                    <span></span>
                    <span></span>
                    <span></span>
                </div>';
  echo $logo;
  echo "<nav role='navigation' class='main'>$nav</nav>";

}

function logo_markup() {
  $home_uri = home_url( '/' );
  $logo_id = get_theme_mod( 'custom_logo' );
  $logo_src = wp_get_attachment_image_src( $logo_id , 'full' )[0];
  //$logo = "<img class='logo' src='$logo_src'>";
  $logo = "<div class='logo'>LZ</div>";
  return "<a class='logo-link' href='$home_uri'>$logo</a>";
}

function toggle_markup() {
  return '<div class="hamburger toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>';
}
