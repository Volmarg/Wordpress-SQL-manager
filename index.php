<?php
/*
Plugin Name: Wpisy SQL
Description: SQL entries manager
Author: <a href="------">------</a>
Version: 1.0
*/

include_once 'common/databaseConnection.php';
include_once 'common/databaseTableToJson.php';
include_once 'hooks.php';

#Plugin hook to admin Panel
if(is_admin()){ #checks if thats admin panel
  include_once 'backend/index.php';

  #include scripts
  wp_enqueue_script('bootstrapBundle', plugin_dir_url(__FILE__) . 'common/bootstrap/js/bootstrap.bundle.js','','',true); #true moves to footer
  wp_enqueue_script('bootstrap', plugin_dir_url(__FILE__) . 'common/bootstrap/js/bootstrap.js','','',true); #true moves to footer
  wp_enqueue_script('interface', plugin_dir_url(__FILE__) . 'backend/js/interface.js','','',true); #true moves to footer
  wp_enqueue_script('ajax', plugin_dir_url(__FILE__) . 'backend/js/ajax.js','','',true); #true moves to footer
  wp_enqueue_script('validations', plugin_dir_url(__FILE__) . 'backend/js/validations.js','','',true); #true moves to footer

  #include styles
  wp_enqueue_style( 'boostrap', plugin_dir_url(__FILE__) . 'common/bootstrap/css/bootstrap.css', '', '', 'all' );
  wp_enqueue_style( 'panelsBack', plugin_dir_url(__FILE__) . 'backend/css/panels.css', '', '', 'all' );
}#include styles and sripts if it's front end
else{
  wp_enqueue_script('ajaxFront', plugin_dir_url(__FILE__) . 'frontend/js/ajax.js','','',true); #true moves to footer
  wp_enqueue_script('interfaceFront', plugin_dir_url(__FILE__) . 'frontend/js/userInterface.js','','',true); #true moves to footer
  wp_enqueue_script('carManageFront', plugin_dir_url(__FILE__) . 'frontend/js/car-types-tabs.js','','',true); #true moves to footer
  wp_enqueue_script('jQuery', plugin_dir_url(__FILE__) . 'common/jq.3.3.1.js','','');
  wp_enqueue_style( 'registerForm', plugin_dir_url(__FILE__) . 'frontend/css/car-register-form.css', '', '', 'all' );
}


#hooks
add_action('admin_menu', 'hook_plugin_in_panel'); #add admin menu option
add_action( 'wp', 'entriesPages' ); #add handling virutal pages
add_action( 'wp', 'entriesJsons' ); #add handling virtualJsonFiles

#Functions for hooks
function entriesPages(){
  $dir = get_template_directory( __FILE__ ); #this variable stores curr theme path
  $hook=new hooks();
  $hook->entriesPages($dir);
}

function entriesJsons(){
  $hook=new hooks();
  $hook->entriesJsons($dir);
}

function hook_plugin_in_panel(){ #hook options in admin panel
        add_menu_page( 'Wpisy SQL', 'Wpisy SQL', 'manage_options', 'sql-entries', 'load_plugin_backend' ); #settings for menu acces
}


?>
