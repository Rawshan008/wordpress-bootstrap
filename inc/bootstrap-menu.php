<?php 

function bootstrap_menu_display(){
	register_nav_menus(array(
		'primary_menu' => __('Primary Menu', 'textdomain'),
		'footer_menu' => __('Footer Menu', 'textdomain'),
	));
}
add_action('after_setup_theme','bootstrap_menu_display');