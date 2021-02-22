<?php 
function my_wp_nav_menu_args( $args = '' ) {
    $args['menu'] =  is_user_logged_in() ? 'Logout Menu' : 'Primary Menu';
    return $args;
}
