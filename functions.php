<?php 








function loadstylesheet(){
wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('bootstrap');
wp_register_script('icons', get_template_directory_uri() . '/css/ionicons.css');
	wp_enqueue_script('icons');

}
add_action('wp_enqueue_scripts','loadstylesheet');
function addjs(){
	wp_deregister_script('jquery');

	wp_register_script('jquery', get_template_directory_uri() . '/css/jquery-3.2.1.min.js',array(),1,1,1);
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.js',array(),1,1,1);
	wp_enqueue_script('bootstrap');

		wp_register_script('icons', get_template_directory_uri() . '/css/ionicons.css',array(),1,1,1);
	wp_enqueue_script('icons');

}
 add_action('wp_enqueue_scripts','addjs');


 ?>