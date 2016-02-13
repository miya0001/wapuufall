<?php
/*
Plugin Name: Wapuu Fall
Plugin URI:  https://github.com/TickleCode/wapuufall
Description: A lot of Wapuu Fall 
Version:     1.0
Author:      Yoshinori Kobayashi
Author URI:  http://ticklecode.com/
License:     GPL3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Domain Path: /languages
Text Domain: wapuufall
*/

/**
* Enqueu script and css
*/
function wapuufall_script_css_add(){
  wp_enqueue_script('snowfall-jquery',plugins_url('/js/snowfall.jquery.js',__FILE__),array('jquery'));
  wp_enqueue_script('wapuufall-jquery',plugins_url('/js/wapuufall.js',__FILE__),array('snowfall-jquery'));
  wp_localize_script('wapuufall-jquery','wapuufall_plugin_url',plugins_url('',__FILE__));
}
add_action('wp_enqueue_scripts','wapuufall_script_css_add');