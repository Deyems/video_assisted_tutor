<?php

function db_pages_enqueue_scripts(){
    
    wp_register_style('db_dashboard_css', 
    plugins_url('/assets/css/dashboard.css', DASHBOARD_DOMAIN_FILE));
    
    wp_enqueue_style('db_dashboard_css');
    
    // wp_register_script('db_main', 
    // plugins_url('/assets/js/main.js', DASHBOARD_DOMAIN_FILE),
    // ['jquery'],
    // '1.0.0',
    // true);
    
    // wp_localize_script('db_main', 'db_auth_obj', [
    //     'ajax_url' => admin_url('admin-ajax.php'),
    //     'home_url' => home_url('/')
    // ]);

    // wp_enqueue_script('db_main');
}