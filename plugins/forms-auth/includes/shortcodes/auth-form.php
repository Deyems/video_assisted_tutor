<?php

function db_sign_in_shortcode(){
    if(is_user_logged_in()){
        return '';
    }
    $formHTML = file_get_contents('sign-in-template.php', true);
    $formHTML = str_replace('NONCE_FIELD_PH', 
                wp_nonce_field('db_sign_in','_wpnonce', true, false),
                $formHTML);
    $post = get_post(1816);
    $link = get_the_permalink($post);
    $formHTML = str_replace('SIGNUP_REDIRECT', $link, $formHTML);
    return $formHTML;
}

function db_sign_up_shortcode(){
    if(is_user_logged_in()){
        return '';
    }
    $formHTML = file_get_contents('sign-up-template.php', true);
    $formHTML = str_replace('NONCE_FIELD_PH', 
                wp_nonce_field('db_sign_up','_wpnonce', true, false),
                $formHTML);
    $post = get_post(1808);
    $link = get_the_permalink($post);
    $formHTML = str_replace('SIGNIN_REDIRECT', $link, $formHTML);
    return $formHTML;
}

function db_reset_password_shortcode(){
    $formHTML = file_get_contents('reset-pass-template.php', true);
    $formHTML = str_replace('NONCE_FIELD_PH', 
                wp_nonce_field('db_reset_pass','_wpnonce', true, false),
                $formHTML);
    return $formHTML;
}