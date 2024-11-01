<?php
/**
 * Hayat Developers
 *
 * @package     Smart Pregnancy Calculator Lite
 * @author      Hayat Developers
 * @copyright   2021 Pregnancy Calculator
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Smart Pregnancy Calculator Lite 
 
 * Description: Pregnancy Calculator helps to calculate the pregnancy due date and conception date.

 * Version:     1.0
 * Author:      Hayat Developers | Pregnancy Calculator - Made for WordPress
 * Author URI:  https://hayyatapps.com
 * Text Domain: Pregnancy Calculator 
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

include __DIR__.'/functions-admin.php';
include __DIR__.'/functions-wp.php';

$short_code = 'smart-pregnancy-calculator';



add_action( 'admin_enqueue_scripts', 'SPCL_CSSJS' ,111);

add_action('admin_menu', 'SPCL_menu');
add_action('wp_enqueue_scripts', 'SPCL_scripts',111);

// add_action( "wp_ajax_nopriv_sofb_orderform_data", "sofb_orderform_data" );//for non-loggedin users
// add_action( "wp_ajax_sofb_orderform_data", "sofb_orderform_data" );//for loggedin users

$web_url =  sanitize_url( $_SERVER['REQUEST_URI'] );

$filter_w = 'wp-admin';
if(strpos($web_url, $filter_w) !== false){return 0;} else {
add_shortcode($short_code, 'SPCL_initiate');
}

?>