<?php

// set namespace
namespace Functions;

// load helper functions
require_once(dirname(__FILE__).'/functions/enqueue.php');
require_once(dirname(__FILE__).'/functions/reset.php');

// remove unused features
reset();

// enqueue theme js and css
enqueue();
