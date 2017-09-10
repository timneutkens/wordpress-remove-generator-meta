<?php
namespace TimNeutkens\Wordpress\RemoveGeneratorMeta;

/*
Plugin Name:  Remove generator meta
Description:  Remove generator meta tag from head
Version:      1.0.0
Author:       Tim Neutkens
Author URI:   https://github.com/timneutkens
License:      MIT License
*/

function generator() {
    return '';
}

add_filter('the_generator', __NAMESPACE__.'\\generator');
