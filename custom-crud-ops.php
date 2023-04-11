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
 register_activation_hook( __FILE__, 'crudOperationsTable');
 function crudOperationsTable() {
   
 }