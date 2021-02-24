<?php
// require_once __DIR__ . '/app/video-upload/index.php';
function vu_enqueue_block_editor_assets(){
    wp_register_script(
        'vu_blocks_bundle', 
        plugins_url('/blocks/dist/bundle.js', DASHBOARD_DOMAIN_FILE),
        ['wp-i18n', 'wp-element', 'wp-blocks', 
        'wp-components','wp-editor', 'wp-api'],
        filemtime(plugin_dir_path(DASHBOARD_DOMAIN_FILE) . '/blocks/dist/bundle.js')
    );
    wp_enqueue_script('vu_blocks_bundle');
}

function vu_enqueue_block_assets(){
    wp_register_style('vu_blocks',
    plugins_url('/blocks/dist/blocks-main.css', DASHBOARD_DOMAIN_FILE),
    [],
    filemtime(plugin_dir_path(DASHBOARD_DOMAIN_FILE) . '/blocks/dist/blocks-main.css')
    );
    wp_enqueue_style('vu_blocks');
    
    wp_register_style('vu_web_fonts',
    'https://fonts.googleapis.com/css2?family=Lato&display=swap',
    ['https://fonts.gstatic.com'],
    filemtime(plugin_dir_path(DASHBOARD_DOMAIN_FILE) . '/blocks/dist/blocks-main.css')
    );
    wp_enqueue_style('vu_web_fonts');
}

/**Script to control front end display of Block */

function db_pages_block_enqueue_scripts(){
    
    wp_register_script('db_video_script', 
    plugins_url('/blocks/app/video-upload/front-end/index.js', DASHBOARD_DOMAIN_FILE),
    ['jquery'],
    '1.0.0',
    true);
    
    wp_enqueue_script('db_video_script');
}