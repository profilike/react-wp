<?php 
/**
* @package VPB Plugin
*/
/*
Plugin Name: VPB Plugin
Plugin URI: http://sampler.in.ua
Description: Description
Version: 1.0.0
Author: Vasyl Pukii
Author URI: http://sampler.in.ua
License: GPLv2 or later
*/

defined( 'ABSPATH' ) or die( 'Hey, you can/t access this file , you silly human!' );

if( !class_exists( 'VPBPlugin' ) ){

class VPBPlugin
{

	// function __construct() {
		
	// }
	function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	function create_post_type(){
		add_action('init', array($this, 'custom_post_type') );
	}

	function custom_post_type() {
		register_post_type('book', ['public' => true, 'label' => 'Books']);
	}
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style('mupluginstyle', plugins_url('/assets/style.css', __FILE__ ) );
		wp_enqueue_script('mupluginscript', plugins_url('/assets/scripts.js', __FILE__ ) );
	}
	function activate() {
		require_once plugin_dir_path(__FILE__) . 'inc/vpbplugin-activate.php';
		VPBPluginActivate::activate();
	}

	$vpbPlugin = new VPBPlugin('Plugin initialized!');
	$vpbPlugin->register();
	//$vpbPlugin->create_post_type();
}

	// activation

	register_activation_hook(__FILE__, array( $vpbPlugin, 'activate') );

	// deactivation
	require_once plugin_dir_path(__FILE__) . 'inc/vpbplugin-deactivate.php';
	register_activation_hook(__FILE__, array('VPBPluginDeactivate', 'deactivate') );
}