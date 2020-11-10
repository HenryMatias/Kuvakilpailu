<?php


    ////////////////////////////////////////////////////////////////
    ////////                  JS and CSS                 ///////////
    //////////////////////////////////////////////////////////////// 


function kt_setup() {
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 'microtime()', 'all');
	wp_enqueue_style('styles'); 
    wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    wp_enqueue_style('slick', get_theme_file_uri() . '/slick/slick.css');
    /*wp_enqueue_style('slick-style', get_theme_file_uri() . '/slick/slick-theme.css');*/
    
    wp_enqueue_script("jscookie", get_theme_file_uri('/js/jscookie.js'), NULL, '1.0.0', true);
    wp_enqueue_script("slickslider", get_theme_file_uri('/js/slickslider.js'), NULL, '1.0.0', true);
    wp_enqueue_script("slick-js", get_theme_file_uri('/slick/slick.min.js'), NULL, '1.0.0', true);
    wp_enqueue_script("jquery", 'https://code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script("jquery-migrate", 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
    
    wp_enqueue_script("fontawesome", 'https://kit.fontawesome.com/0c707c1c12.js');
    wp_enqueue_script("fileinput", get_theme_file_uri('/js/fileinput.js'), NULL, '1.0.0', true);
    wp_enqueue_script("increaselikes", get_theme_file_uri('/js/increaselikes.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'kt_setup');


    ////////////////////////////////////////////////////////////////
    ////////         Kilpailutyöt Custom Post Type       ///////////
    //////////////////////////////////////////////////////////////// 


    include 'assets/php/kilpailutyot.php';


    ////////////////////////////////////////////////////////////////
    ////////         Send Kilpailytöt Form to WP        ///////////
    //////////////////////////////////////////////////////////////// 


    include 'assets/php/sendkilpailutyot.php';


    ////////////////////////////////////////////////////////////////
    ////////         Send Kilpailytöt Form to WP        ///////////
    //////////////////////////////////////////////////////////////// 


    include 'assets/php/sidebarandwidgets.php';


    ////////////////////////////////////////////////////////////////
    ////////         Send Kilpailytöt Form to WP         ///////////
    //////////////////////////////////////////////////////////////// 


    include 'assets/php/increaselikes.php';

    


