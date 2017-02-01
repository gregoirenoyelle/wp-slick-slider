<?php
/*
Plugin Name: Slick Slider pour WordPress
Plugin URI: http://wwww.gregoirenoyelle.com
Description: Slick slider pour WordPress
Version: 11.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wp-plugin-name
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


/**************************
* LIENS FICHIER PHP
**************************/

//* Appel de fichiers PHP
// Fichier de fonctions pour WordPress
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de fonctions pour Genesis
// include_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
// Fichier de fonctions pour intégrer des CSS et JS
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.enqueue.php');
