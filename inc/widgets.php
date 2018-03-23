<?php 

function bootstrap_widgets(){
	// footer widgets
	register_sidebar(array(
		'name'    => 'Footer Widgets',
		'id'    => 'footer_widgets',
		'description'    => 'please enter your sidebar',
		'before_widget'    => '<div class="col-md-3"><div class="single-widgets">',
		'after_widget'    => '</div></div>',
		'before_title'    => '<h3>',
		'after_title'    => '</h3>'
	));

	// right sidebar 
	register_sidebar(array(
		'name'    => 'Right Sidebar',
		'id'    => 'right_sidebar',
		'description'    => 'please enter your sidebar',
		'before_widget'    => '<div class="single-right-sidebar">',
		'after_widget'    => '</div>',
		'before_title'    => '<h3>',
		'after_title'    => '</h3>'
	));
}
add_action('after_setup_theme','bootstrap_widgets');