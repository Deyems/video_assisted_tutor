<?php

function db_activate_plugin(){
    db_setup_dashboard_post_type();
    flush_rewrite_rules();
}