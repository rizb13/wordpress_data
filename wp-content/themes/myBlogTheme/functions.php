<?php

if( !defined('THEME_IMG_PATH')){
	define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
}

function myBlogTheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'myBlogTheme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'myBlogTheme' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'myBlogTheme_widgets_init' );


function myBlogTheme_header_setup() {
	$args = array(
		'flex-width'    => true,
		'width'         => 1510,
		'flex-height'   => true,
		'height'        => 250,
		'default-image' => get_template_directory_uri() . '/images/logo.jpg',
	);
    add_theme_support( 'custom-header', $args );

}
add_action( 'after_setup_theme', 'myBlogTheme_header_setup' );

function myBlogTheme_theme_support(){
	//dynamically add title by word press.
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','myBlogTheme_theme_support');

function myBlogTheme_menus(){
	$locations = array(
		'primary'  => __( 'Menu list', 'myBlogTheme' ),
	);
	register_nav_menus( $locations );
}
add_action('init','myBlogTheme_menus');

function myBlogTheme_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('myBlogTheme-customStyle',get_template_directory_uri()."/style.css",array(),$version,'all');
	wp_enqueue_style('myBlogTheme-fontawesomeCdn',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css",array(),'5.15.4','all');
	wp_enqueue_style('myBlogTheme-Bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",array(),'4.0.0','all');
}
add_action('wp_enqueue_scripts','myBlogTheme_register_styles');


function myBlogTheme_register_scripts(){
	wp_enqueue_script('myBlogTheme-jqueryCdn',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",array(),'3.6.0',true);
	wp_enqueue_script('myBlogTheme-customJquery',get_template_directory_uri()."/assets/javascript/main.js",array(),'1.0',true);
	wp_enqueue_script('myBlogTheme-slimBuild',"https://code.jquery.com/jquery-3.2.1.slim.min.js",array(),'3.2.1',true);
	wp_enqueue_script('myBlogTheme-Cdn',"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js",array(),'1.12.9',true);
	wp_enqueue_script('myBlogTheme-Bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js",array(),'4.0.0',true);

}
add_action('wp_enqueue_scripts','myBlogTheme_register_scripts');

?>
