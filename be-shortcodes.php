<?php
/**
 * Plugin Name:  Be Shortcodes
 * Plugin URI:   https://github.com/beautimour/be-shortcodes
 * Description:  A lightweight shortcodes plugin created by Beautimour.
 * Version:      1.0.0
 * Author:       Beautimour
 * Author URI:   https://beautimour.com/
 * Author Email: beautimour@gmail.com
 * Text Domain:  be-shortcodes
 * Domain Path:  /languages
 * License:      GPL 2.0
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 */

/*
   Copyright to the original author Rescue Themes https://rescuethemes.com/
   Modified by Beautimour https://beautimour.com/
*/

/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'Be_Shortcodes' ) ) {

	class Be_Shortcodes {

		/**
		 * PHP5 constructor method.
		 */
		public function __construct() {

			// Set the constants needed by the plugin.
			add_action( 'plugins_loaded', array( &$this, 'constants' ), 1 );

			// Internationalize the text strings used.
			add_action( 'plugins_loaded', array( &$this, 'i18n' ), 2 );

			// // Load the functions files.
			add_action( 'plugins_loaded', array( &$this, 'includes' ), 3 );

			// Load the functions files.
			add_action( 'plugins_loaded', array( &$this, 'shortcodes' ), 4 );

			// Enqueue the admin styles and scripts.
			add_action( 'admin_enqueue_scripts', array( &$this, 'admin_assets' ) );

			// Enqueue the front-end styles and scripts.
			add_action( 'wp_enqueue_scripts', array( &$this, 'plugin_assets' ), 99 );

		}

		/**
		 * Defines constants used by the plugin.
		 */
		public function constants() {

			// Set constant path to the plugin directory.
			define( 'BE_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

			// Set the constant path to the plugin directory URI.
			define( 'BE_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

			// Set the constant path to the inc directory.
			define( 'BE_INCLUDES', BE_DIR . trailingslashit( 'inc' ) );

			// Set the constant path to the shortcodes directory.
			define( 'BE_SHORTCODES', BE_INCLUDES . trailingslashit( 'shortcodes' ) );

			// Set the constant path to the assets directory.
			define( 'BE_ASSETS', BE_URI . trailingslashit( 'assets' ) );

		}

		/**
		 * Loads the translation files.
		 */
		public function i18n() {
			load_plugin_textdomain( 'be-shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}

		/**
		 * Loads the initial files needed by the plugin.
		 */
		public function includes() {
			require_once( BE_INCLUDES . 'button.php' );
			require_once( BE_INCLUDES . 'functions.php' );
		}

		/**
		 * Loads the shortcodes.
		 */
		public function shortcodes() {
			require_once( BE_SHORTCODES . 'spacing.php' );
			require_once( BE_SHORTCODES . 'highlight.php' );
			require_once( BE_SHORTCODES . 'dropcap.php' );
			require_once( BE_SHORTCODES . 'button.php' );
			require_once( BE_SHORTCODES . 'box.php' );
			require_once( BE_SHORTCODES . 'column.php' );
			require_once( BE_SHORTCODES . 'toggle.php' );
			require_once( BE_SHORTCODES . 'tab-group.php' );
			require_once( BE_SHORTCODES . 'progress.php' );
			require_once( BE_SHORTCODES . 'map.php' );
			require_once( BE_SHORTCODES . 'icon.php' );
			require_once( BE_SHORTCODES . 'animation.php' );
			require_once( BE_SHORTCODES . 'clear.php' );
		}

		/**
		 * Enqueue admin styles and scripts.
		 */
		public function admin_assets() {
			wp_register_script( 'be-shortcode-buttons', BE_ASSETS . 'js/shortcode-buttons.js', array( 'jquery' ), null, true );
		}

		/**
		 * Enqueue front-end styles and scripts.
		 */
		public function plugin_assets() {
			// Scripts
			wp_register_script( 'be-wow', BE_ASSETS . 'js/wow.min.js', array( 'jquery' ), null, true );
			wp_register_script( 'be-wow-init', BE_ASSETS . 'js/wow-init.js', array( 'jquery' ), null, true );
			wp_register_script( 'be-tabs', BE_ASSETS . 'js/tabs.js', array( 'jquery', 'jquery-ui-tabs' ), null, true );
			wp_register_script( 'be-toggle', BE_ASSETS . 'js/toggle.js', array( 'jquery' ), null, true );
			wp_register_script( 'be-googlemap',  BE_ASSETS . 'js/googlemap.js', array( 'jquery' ), null, true );
			wp_register_script( 'be-progressbar', BE_ASSETS . 'js/progressbar.js', array( 'jquery' ), null, true );
			wp_register_script( 'be-waypoints', BE_ASSETS . 'js/jquery.waypoints.min.js', array( 'jquery' ), null, true );

			// Styles
			wp_register_style( 'be-animation', BE_ASSETS . 'css/animate.min.css' );
			wp_register_style( 'be-font-awesome', BE_ASSETS . 'css/font-awesome.min.css' );

			wp_enqueue_style( 'be-shortcodes', BE_ASSETS . 'css/be-shortcodes.min.css' );
		}

	}

}

new Be_Shortcodes;
