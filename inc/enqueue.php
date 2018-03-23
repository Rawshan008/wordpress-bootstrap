<?php 


function bootstrap_enqueue_js_css(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'half-slider', get_template_directory_uri().'/css/half-slider.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all' );

	wp_enqueue_script('Bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts','bootstrap_enqueue_js_css');