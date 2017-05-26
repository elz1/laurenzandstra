<?php

namespace Functions;

// registers theme menus
function register() {
  register_nav_menu('main', 'Main navigation');
  add_action('init', 'register');
}
