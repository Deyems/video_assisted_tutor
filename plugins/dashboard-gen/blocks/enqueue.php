<?php
require_once __DIR__ . '/app/latest-post-block/index.php';
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