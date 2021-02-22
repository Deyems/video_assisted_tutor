<?php
function auto_redirect_after_logout(){
    wp_safe_redirect( home_url() );
    exit;
}  