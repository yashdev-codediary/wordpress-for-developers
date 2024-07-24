<?php 

function vipassana_main_files() {
	wp_enqueue_style('vipassana_main_sylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'vipassana_main_files');

?>