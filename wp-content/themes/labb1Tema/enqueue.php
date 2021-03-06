<?php 

// Köa js- & css-filer

add_action('wp_enqueue_scripts', 'my_scripts_css'); 

function my_scripts_css() {

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css'); 
    wp_register_style('style', get_template_directory_uri().'/style.css'); 
    wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css'); 
    
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery.js', [], false, true); 
    wp_register_script('script', get_template_directory_uri().'/js/script.js', [], false, true); 
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_style('font-awesome');

    wp_enqueue_script('jquery');
    wp_enqueue_script('script');

}


?> 