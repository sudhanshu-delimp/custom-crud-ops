<?php 
/** 
 * Hello World 
 * 
 * @package MoonLight Quotes 
 * @author Bhargav Raviya
 * @copyright 2022 Bhargav Raviya
 * @license GPL-2.0-or-later 
 * 
 * @wordpress-plugin 
 * Plugin Name: CUSTOM CRUD OPS
 * Plugin URI: #
 * Description: CUSTOM CRUD OPS 
 * Version: 0.0.1
 * Author: Delimp
 * Author URI: #
 * Text Domain: custom-curd-ops
 * License: GPL v2 or later
 * License URI: # */
 include_once 'include/function.php';
 include_once 'action/add.php';
 include_once 'action/method.php';
 register_activation_hook( __FILE__, 'createCelebritiesTable');
 function createCelebritiesTable() {
    // global $table_prefix, $wpdb;

    // global $wpdb;
    // $wp_track_table = $table_prefix . '2_bcc_celebrities_data';

    // #Check to see if the table exists already, if not, then create it

    // if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table) 
    // {

    //     $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
    //     $sql .= "  `ID`  int(11)   NOT NULL auto_increment, ";
    //     $sql .= "  `celebrity_name`  varchar(255)    NOT NULL, ";
    //     $sql .= "  `celebrity_imdb_id`  varchar(20)    NOT NULL, ";
    //     $sql .= "  `celebrity_birth_date`  date    DEFAULT NULL, "; 
    //     $sql .= "  `celebrity_birth_place`  varchar(255)    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_bio`  text    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_images`  longtext    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_image_galleries`  longtext    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_videos`  longtext    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_embeds`  longtext    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_external_media`  longtext    DEFAULT NULL, ";
    //     $sql .= "  `celebrity_filmography`  longtext    DEFAULT NULL, ";
    //     $sql .= "  PRIMARY KEY `order_id` (`id`) "; 
    //     $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
    //     require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
    //     dbDelta($sql);
    // }
 }