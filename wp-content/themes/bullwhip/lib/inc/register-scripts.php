<?php
/*
 * Add styles and scripts
*/
add_action('wp_print_styles', 'msd_add_styles');

function msd_add_styles() {
	global $is_IE;
	if(!is_admin()){
		wp_enqueue_style('msd-style',get_stylesheet_directory_uri().'/lib/css/style.css');
		if($is_IE){
			wp_enqueue_script('ie-style',get_stylesheet_directory_uri().'/lib/css/ie.css');
		}
		if(is_front_page()){
			wp_enqueue_style('msd-homepage-style',get_stylesheet_directory_uri().'/lib/css/homepage.css');
		}
	}
}
add_action('wp_print_scripts', 'msd_add_scripts');

function msd_add_scripts() {
	global $is_IE;
	if(!is_admin()){
		wp_enqueue_script('msd-jquery',get_stylesheet_directory_uri().'/lib/js/theme-jquery.js');
		wp_enqueue_script('equalHeights',get_stylesheet_directory_uri().'/lib/js/jquery.equalheights.js');
		if($is_IE){
			wp_enqueue_script('columnizr',get_stylesheet_directory_uri().'/lib/js/jquery.columnizer.js');
			wp_enqueue_script('ie-fixes',get_stylesheet_directory_uri().'/lib/js/ie-jquery.js');
		}
		if(is_front_page()){
			wp_enqueue_script('msd-homepage-jquery',get_stylesheet_directory_uri().'/lib/js/homepage-jquery.js');
		}
	}
}