<?php

namespace Functions;

// registers theme menus
function menus() {
  register_nav_menu('main', 'Main navigation');
}

add_action('init', 'Functions\menus');
