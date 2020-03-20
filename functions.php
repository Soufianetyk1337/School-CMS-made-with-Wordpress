<?php 

function loadstylesheet(){
wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('bootstrap');
wp_register_style('bootstrap-min' , get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('bootstrap-min');
wp_register_script('animate', get_template_directory_uri() . '/css/animate.css');
wp_enqueue_script('animate');
wp_register_script('nav', get_template_directory_uri() . '/css/classy-nav.min.css');
wp_enqueue_script('nav');
wp_register_script('fonts', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_script('fonts');
wp_register_script('magnific', get_template_directory_uri() . '/css/magnific-popup.css');
wp_enqueue_script('magnific');
wp_register_script('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
wp_enqueue_script('owl');
}

add_action('wp_enqueue_scripts','loadstylesheet');

function addjs(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js',array(),1,1,1);
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap',get_template_directory_uri() .'/js/bootstrap/bootstrap.min.js',array(),1,1,1);
	wp_enqueue_script('bootstrap');
	wp_register_script('popper', get_template_directory_uri() . '/js/bootstrap/popper.min.js',array(),1,1,1);
	wp_enqueue_script('popper');
	wp_register_script('plugins', get_template_directory_uri() . '/js/plugins/plugins.js',array(),1,1,1);
	wp_enqueue_script('plugins');
	wp_register_script('active', get_template_directory_uri() . '/js/active.js',array(),1,1,1);
	wp_enqueue_script('active');
}
 add_action('wp_enqueue_scripts','addjs');

?>