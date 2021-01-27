<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              level7.id
 * @since             1.0.0
 * @package           (wp_Book)
 *
 * @wordpress-plugin
 * Plugin Name:       WP Book 
 * Plugin URI:        https://github.com/Adhi-Coffeedev/book
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Adhi
 * Author URI:        level7.id
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       (wp-book)
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( '(WP_BOOK)_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-(wp-book)-activator.php
 */
function activate_(wp_book)() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-(wp-book)-activator.php';
	(wp_Book)_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-(wp-book)-deactivator.php
 */
function deactivate_(wp_book)() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-(wp-book)-deactivator.php';
	(wp_Book)_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_(wp_book)' );
register_deactivation_hook( __FILE__, 'deactivate_(wp_book)' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-(wp-book).php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_(wp_book)() {

	$plugin = new (wp_Book)();
	$plugin->run();

}
run_(wp_book)();
