<?php 

function loadstylesheet(){
wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('bootstrap');
wp_register_script('icons', get_template_directory_uri() . '/css/ionicons.css');
	wp_enqueue_script('icons');
wp_register_script('font', get_template_directory_uri() . '/css/beyond_the_mountains-webfont.css');
	wp_enqueue_script('font');

}
add_action('wp_enqueue_scripts','loadstylesheet');
function addjs(){
	wp_deregister_script('jquery');

	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js',array(),1,1,1);
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),1,1,1);
	wp_enqueue_script('bootstrap');
	wp_register_script('jquery-way', get_template_directory_uri() . '/js/jquery.waypoints.min.js',array(),1,1,1);
	wp_enqueue_script('jquery-way');


	

}
 add_action('wp_enqueue_scripts','addjs');

#Custom Image Sizes

add_image_size('product_image_large', 700 , 700,false);
add_image_size('product_image_small', 400 , 400,false);
add_theme_support('menus');
register_nav_menus(
	array(
		'top-menu' => __('Top Menu' ,'theme'),
	)
);
?>