<?php

// load helper functions
require_once(dirname(__FILE__).'/functions/enqueue.php');
require_once(dirname(__FILE__).'/functions/reset.php');
require_once(dirname(__FILE__).'/functions/menus.php');

// run
Functions\reset();
Functions\enqueue();
Functions\register();
