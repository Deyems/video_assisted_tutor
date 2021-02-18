<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Dashboard Generator
 * Plugin URI:        https://github.com/video_assited_tutor.git
 * Description:       Handles showing Dashboard pages to users.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Deyems Dprince
 * Author URI:        https://github.com/Deyems
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dashboard
 * Domain Path:       /languages
 */

if(!function_exists('add_action')) {
    echo "Hi, there! I'm a plugin not much to do directly";
    exit;
}

/** 
 * Setups  
 */

if ( ! defined( 'DASHBOARD_DOMAIN_VER' ) ) {
    define( 'DASHBOARD_DOMAIN_VER', '1.0.0' );
}

if ( ! defined( 'DASHBOARD_DOMAIN_FILE' ) ) {
    define('DASHBOARD_DOMAIN_FILE', __FILE__ );
}

if ( ! defined( 'DASHBOARD_DOMAIN_BASE' ) ) {
	define( 'DASHBOARD_DOMAIN_BASE', plugin_basename( DASHBOARD_DOMAIN_FILE ) );
}

if ( ! defined( 'DASHBOARD_DOMAIN_DIR' ) ) {
	define( 'DASHBOARD_DOMAIN_DIR', plugin_dir_path( DASHBOARD_DOMAIN_FILE ) );
}

if ( ! defined( 'DASHBOARD_DOMAIN_URI' ) ) {
	define( 'DASHBOARD_DOMAIN_URI', plugins_url( '/', DASHBOARD_DOMAIN_FILE ) );
}

/**
 * Includes
 */
require_once __DIR__ . '/includes/activate.php';
require_once __DIR__ . '/includes/init.php';
require_once __DIR__ . '/includes/deactivate.php';
 
/**
 * Hooks
 */
register_activation_hook( DASHBOARD_DOMAIN_FILE, 'db_activate_plugin' );
register_deactivation_hook( DASHBOARD_DOMAIN_FILE, 'db_deactivate_plugin' );
add_action('init', 'db_setup_dashboard_post_type', 0);
 
/**
 * Shortcodes
 */
