<?php
/*
 * Plugin Name: Per Question Timer Quiz
 * Description: A quiz plugin with a per question timer
 * Version: 1.0
 * Author: Omomoh Agiogu
 *
 */


/**
 *
* Enqueue the plugin's scripts and styles
*/
// Load the stylesheet
function pqtq_load_stylesheet() {
    wp_enqueue_style( 'pqtq-style', plugins_url( '/css/style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'pqtq_load_stylesheet' );

// Load the script
function pqtq_load_script() {
    wp_enqueue_script( 'pqtq-script', plugins_url( '/js/timer.js', __FILE__ ), array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'pqtq_load_script' );

require_once plugin_dir_path( __FILE__ ) . '/class-quiz-plugin.php';
    
