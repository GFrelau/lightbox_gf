<?php
/**
*
* Plugin Name: Gwénael Frelau - lightbox
* Description: lightbox
* Version: 0.1
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// this plugin will execute when we are not in the admin area
if (!is_admin()) { 

	wp_enqueue_script('jquery');
	wp_enqueue_script('lightbox', WP_PLUGIN_URL.'/lightbox_gf/lightbox.js', array('jquery'), '1.0');
	wp_enqueue_style('lightbox', WP_PLUGIN_URL.'/lightbox_gf/lightbox.css', false, '1.0');

}
?>
