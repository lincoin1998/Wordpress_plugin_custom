<?php
ob_start();

/*
 * Plugin Name: Form Content
 * Plugin URI: https://www.91weblessons.com
 * Description: Handle the basics with this plugin.
 * Author: Partha
 * Author URI: https://author.example.com/partha
 * Version: 1.0
 */

register_activation_hook( __FILE__, 'form_activation' );
register_deactivation_hook( __FILE__, 'form_deactivation' );

 function form_activation()
 {
  //  global $wpdb;
  //  $table = $wpdb->prefix.'form_content';
  //  $sql = "CREATE TABLE $table (
  //     `id` int(11) NOT NULL,
  //     `name` varchar(500) NOT NULL
  //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;ALTER TABLE $table
  // ADD PRIMARY KEY (`id`);ALTER TABLE $table
  // MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
  //  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  //   dbDelta($sql);
   

 }
 function form_deactivation()
 {
  //  global $wpdb;
  //  $table = $wpdb->prefix.'form_content';
  //  $sql = "DROP TABLE $table";
  //  $wpdb->query($sql);
  

 }

//  add_action('admin_menu','form_data_menu');
//  function form_data_menu()
//  {
//      add_menu_page('Form Content','Form Content',8,__FILE__,'form_data_list');
//  }


//  add_shortcode('form_data_list_shortcode','form_data_list');
//  function form_data_list()
//  {
//      include('form_data_list.php');
//  }






?>