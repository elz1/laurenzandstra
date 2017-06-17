<?php

// load all functions in the functions directory
foreach(glob(dirname(__FILE__).'/functions/*.php') as $f) { require_once($f); }
