<?php

//* Générateur en ligne pour les script et les css
// https://generatewp.com/register_script/

/**************************
* ENQUEUE POUR LE FRONT
**************************/

//* enqueue style front
add_action('wp_enqueue_scripts','slick_styles_front', 99);
function slick_styles_front() {
	wp_register_style('slick', plugins_url( 'css/slick.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	wp_register_style('slick-theme', plugins_url( 'css/slick-theme.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	if ( is_home() ) {
		wp_enqueue_style('slick');
		wp_enqueue_style('slick-theme');
	}
	
}

//* enqueue script front
add_action('wp_enqueue_scripts','slick_scripts_front');
function slick_scripts_front() {
	wp_register_script('slick',plugins_url( 'js/slick.min.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	if ( is_home() ) {
		wp_enqueue_script('slick');
	}
	
}

/**************************
* ENQUEUE POUR LE BACK
**************************/

//* enqueue style back
// add_action('admin_enqueue_scripts','slick_styles_back', 99);
function slick_styles_back() {
	wp_register_style('styles-projet-back', plugins_url( 'css/styles-projet-back.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}

//* enqueue script back
// add_action('admin_enqueue_scripts','slick_scripts_back');
function slick_scripts_back() {
	wp_register_script('scripts-projet-back',plugins_url( 'js/scripts-projet-back.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-back');
}
