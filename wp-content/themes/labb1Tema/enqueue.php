<?php 

// Köa js- & css-fil

add_action('wp_enqueue_scripts', 'my_scripts_css'); 

function my_scripts_css() {

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css'); 
    wp_enqueue_style('style', get_template_directory_uri().'/style.css'); 
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css'); 

    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', [], false, true); 
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', [], false, true); 


}



?> 