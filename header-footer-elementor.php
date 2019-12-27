<?php
/**
 * Plugin Name: Elementor - Header, Footer & Blocks
 * Plugin URI:  https://github.com/Nikschavan/header-footer-elementor
 * Description: Create Header and Footer for your site using Elementor Page Builder.
 * Author:      Brainstorm Force, Nikhil Chavan
 * Author URI:  https://www.brainstormforce.com/
 * Text Domain: header-footer-elementor
 * Domain Path: /languages
 * Version: 1.2.2-beta.1
 *
 * @package         header-footer-elementor
 */

define( 'HFE_VER', '1.2.2-beta.1' );
define( 'HFE_DIR', plugin_dir_path( __FILE__ ) );
define( 'HFE_URL', plugins_url( '/', __FILE__ ) );
define( 'HFE_PATH', plugin_basename( __FILE__ ) );

/**
 * Load the class loader.
 */
require_once HFE_DIR . '/inc/class-header-footer-elementor.php';

/**
 * Load the Plugin Class.
 */
function hfe_init() {
	Header_Footer_Elementor::instance();
}

add_action( 'plugins_loaded', 'hfe_init' );
