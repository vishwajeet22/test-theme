<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function minimalistblogger_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stayscribbler' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stayscribbler' ),
		'before_widget' => '<div class="w3-card w3-margin widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="w3-container w3-padding">',
		'after_title'   => '</div>',
		) 
	);
}

add_action( 'widgets_init', 'minimalistblogger_widgets_init' );

add_theme_support( 'post-thumbnails' );
?>