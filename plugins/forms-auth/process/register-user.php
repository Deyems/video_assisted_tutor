<?php

function db_register_user(){
    $output = ['status' => 1];
    var_dump($output);
    var_dump('Did we submit register');
    $nonce = isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';

    if(!wp_verify_nonce($nonce,'db_sign_up')){
        wp_send_json($output);
    }

    if(!isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['repassword'])
    ){
        wp_send_json($output);
    }

    // $name = sanitize_text_field($_POST['name']);
    $username = sanitize_text_field($_POST['username']);
    $email = sanitize_email($_POST['email']);
    $password = sanitize_text_field($_POST['password']);
    // $repassword = sanitize_text_field($_POST['repassword']);

    if(username_exists($username) || email_exists($email) ||
    $password !== $repassword || !is_email($email)
    ){
        wp_send_json($output);
    }
    
    $user_id = wp_insert_user([
        'user_login' => $username,
        'user_pass' => $password,
        'user_email' => $email,
    ]);

    if(is_wp_error($user_id)){
        wp_send_json($output);
    }

    wp_new_user_notification($user_id, null,'user');
    $user = get_user_by('id', $user_id);

    wp_set_current_user($user_id, $user->user_login);
    wp_set_auth_cookie($user_id);
    do_action('wp_login', $user->user_login, $user);

    $output['status'] = 2;
    wp_send_json($output);
}