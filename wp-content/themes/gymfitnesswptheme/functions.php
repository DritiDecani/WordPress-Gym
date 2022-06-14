<?php

//Create the Menus
function gymfitness_menus() {
    //Wordpress functions
    register_nav_menus( array(
        'main-menu' => 'Main Menu'
    ) );
}

//Hook
add_action('init', 'gymfitness_menus');

//Add Stylesheets and JS files
function gymfitness_script() {
    //Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    //Google Font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    //Slicknav css
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . "/css/slicknav.min.css", array(), '1.0.10');

    //Main Stylesheet 
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

    wp_enqueue_script('jquery');

    //Load JS File
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . "/js/jquery.slicknav.min.js", array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . "/js/scripts.js", array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_script');
//Enable feaute images and other stuff
function gymfitness_setup(){

    //Add featured image
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','gymfitness_setup'); //when the theme is activated and ready
