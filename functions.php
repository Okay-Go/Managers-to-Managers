<?php

function styles_n_scripts_resources() {
	// wp_enqueue_scripts('main', get_template_directory_uri() . ' 
	// 	/js/main.js');
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'styles_n_scripts_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'sidebar_nav' => __( 'Sidebar Navigation'),
	'footer' => __( 'Footer Menu'),
));
/**
 * Register Widget Area.
 *
 */
function wpnyan_widgets_init() {
 
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<nav class="sidebar-nav">',
		'after_widget' => '</nav>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'wpnyan_widgets_init' );
?>

