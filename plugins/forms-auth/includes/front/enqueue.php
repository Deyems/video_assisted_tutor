<?php

function db_enqueue_scripts(){
    
    wp_register_style('db_bootstrap', 
    plugins_url('/assets/css/bootstrap.css', AUTH_FORM_PLUGIN_URL));

    wp_register_style('db_font_awesome', 
    plugins_url('/assets/css/font-awesome.css', AUTH_FORM_PLUGIN_URL));

    wp_register_style('db_custom', 
    plugins_url('/assets/css/mycss.css', AUTH_FORM_PLUGIN_URL));
    
    wp_enqueue_style('db_bootstrap');
    wp_enqueue_style('db_font_awesome');
    wp_enqueue_style('db_custom');
    
    wp_register_script('db_main', 
    plugins_url('/assets/js/main.js', AUTH_FORM_PLUGIN_URL),
    ['jquery'],
    '1.0.0',
    true);
    
    wp_localize_script('db_main', 'db_auth_obj', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'home_url' => home_url('/'),
        'dashboard_url' => get_permalink(1627)
    ]);

    wp_enqueue_script('db_main');
}