<?php 

/* inkluderar enqueue filen här  */
include('enqueue.php'); 

// tillägg för extra temasupport

add_theme_support('post-thumbnails'); 

add_theme_support('widgets'); 

add_theme_support('menus'); 


// Registrerar och lägger till olika meny

add_action('after_setup_theme', 'my_function'); 

function my_function() {
    register_nav_menu('huvudmeny', 'Huvud meny'); 
    register_nav_menu('footermeny', 'footer meny'); 
    register_nav_menu('sidomeny', 'sidmenu'); 
}

// Registrerar Widgets

register_sidebar(
    [
        'name' => 'widget 1', 
        'id' => 'widget1',
        'description' => 'Widget till sidmenu.'
        
    ]
); 

register_sidebar(
    [
        'name' => 'widget 2',
        'id' => 'widget2',
        'description' => 'widget till footern.'
    ]
);

register_sidebar(
    [
        'name' => 'widget 3',
        'id' => 'widget3',
        'description' => 'widget till kontaktuppgifter.'
    ]
    );


?> 