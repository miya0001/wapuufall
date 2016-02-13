<?php
/*
Plugin Name: Wapuu Fall
Plugin URI:  https://github.com/TickleCode/wapuufall
Description: A lot of Wapuu Fall 
Version:     1.0
Author:      Yoshinori Kobayashi
Author URI:  http://ticklecode.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wapuufall
*/

function wapuufall_install() {
  // Clear the permalinks after the post type has been registered
  flush_rewrite_rules();
}
register_activation_hook(__FILE__,'wapuufall_install');

function wapuufall_deactivation() {
  // Our post type will be automatically removed, so no need to unregister it
  
  // Clear the permalinks to remove our post type's rules
  flush_rewrite_rules();
}
register_deactivation_hook(__FILE__,'wapuufall_deactivation');

/**
* Enqueu script and css
*/
function wapuufall_script_css_add(){
  wp_enqueue_script('snowfall-jquery',plugins_url('/js/snowfall.jquery.js',__FILE__),array('jquery'));
  wp_enqueue_script('wapuufall-jquery',plugins_url('/js/wapuufall.js',__FILE__),array('snowfall-jquery'));
  
  wp_localize_script('wapuufall-jquery','wapuufall_plugin_url',plugins_url('',__FILE__));
  
}
add_action('wp_enqueue_scripts','wapuufall_script_css_add');