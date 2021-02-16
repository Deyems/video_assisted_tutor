<?php
/*
Plugin Name: Transition Slider Lite
Plugin URI: https://codecanyon.net/item/transition-slider-wordpress-plugin/23531533
Description: Responsive HTML5 WebGL Slider with beautiful seamless transitions and animated layers. Supports images and videos.
Version: 2.14.1
Author: creativeinteractivemedia
Author URI: https://codecanyon.net/user/creativeinteractivemedia
*/
include_once( plugin_dir_path(__FILE__).'/includes/main.php' );
$transitionslider = TransitionSlider::get_instance();
$transitionslider->PLUGIN_VERSION = '2.14.1';
$transitionslider->PLUGIN_DIR_URL = plugin_dir_url( __FILE__ );
$transitionslider->PLUGIN_DIR_PATH = plugin_dir_path( __FILE__ );
