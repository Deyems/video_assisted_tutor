<?php

function db_reset_password(){
    $output = ['status' => 1];
    
    $nonce = isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';
    
    if(!wp_verify_nonce($nonce,'db_reset_pass')){
        wp_send_json($output);
    }
    
    if(!isset($_POST['old_password'], $_POST['new_password'], $_POST['c_new_password'] ))
    {
        wp_send_json($output);
    }

    $user = wp_signon([
        'old_password' => sanitize_text_field($_POST['old_password']),
        'new_password' => sanitize_text_field($_POST['new_password']),
        'c_new_password' => sanitize_text_field($_POST['c_new_password']),
        'remember' => true,
    ],false);

    if(is_wp_error($user)){
        wp_send_json($output);
    }

    $output['status']= 2;
    wp_send_json($output);
}