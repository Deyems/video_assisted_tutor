<?php
/**
* Plugin Name: Authorize Users
* Description: Override the WP Login and Regiser Forms
* Version: 1.0
* Author: Deyems
* Author URI: https://github.com/Deyems
* Text Domain: dashboard
*/

if(!function_exists('add_action')){
    echo "This is just a plugin to override the Login and Registration Forms Nothing MUCH";
    exit;
}

//Set ups
define('AUTH_FORM_PLUGIN_URL', __FILE__);

//Includes
require_once __DIR__ . '/includes/shortcodes/auth-form.php';
require_once __DIR__ . '/includes/front/enqueue.php';
require_once __DIR__ . '/process/register-user.php';
require_once __DIR__ . '/process/login-user.php';
require_once __DIR__ . '/process/reset-password.php';

//Hooks
add_action('wp_enqueue_scripts', 'db_enqueue_scripts', 100);
add_action('wp_ajax_nopriv_db_register_user','db_register_user');
add_action('wp_ajax_db_register_user','db_register_user');
add_action('wp_ajax_nopriv_db_login_user','db_login_user');
add_action('wp_ajax_nopriv_db_reset_password','db_reset_password');

//Shortcodes
add_shortcode('db_sign_up', 'db_sign_up_shortcode');
add_shortcode('db_sign_in', 'db_sign_in_shortcode');
add_shortcode('db_reset_pass', 'db_reset_password_shortcode');
