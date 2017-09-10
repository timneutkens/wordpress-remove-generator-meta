<?php
/*
Plugin Name:  Remove generator meta
Description:  Remove generator meta tag from head
Version:      1.0.0
Author:       Tim Neutkens
Author URI:   https://github.com/timneutkens
License:      MIT License
*/

add_filter('the_generator', '__return_false');
