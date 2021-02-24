<?php
/**To make a dynamic Block */
function db_plugin_override(){
	register_block_type('deyems/video-upload', [
		'render_callback' => 'd_render_video_upload'
	]);
}

function db_render_video_upload_block(){
    ?>
    
<?php
}

add_action( 'plugins_loaded', 'db_plugin_override' );