<?php
//Action Hook Example
function theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_setup');

//Filter Hook Example
function custom_excerpt_length(){
    return 15;
}
add_filter('excerpt_length','custom_excerpt_length');

// Adding Css and Js using Action Hooks
// wp_enqueue_script() or wp_enqueue_style()

function add_theme_scripts() {
    wp_enqueue_style('main-stylesheet',get_stylesheet_uri());
    // Adding Custom Css File
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css');
    // Adding Custom Js Files
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts','add_theme_scripts');

?>