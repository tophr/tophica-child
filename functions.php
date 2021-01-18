<?php

add_action( 'wp_enqueue_scripts', 'tophica_child_enqueue_styles' );
function tophica_child_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('tm-stylesheet'), '1.0.1' );
  wp_dequeue_style( 'google-fonts');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Copse|Merriweather:400,400i,700,700i');
}

function tophica_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/custom-login-logo.png) !important; background-size: auto auto !important; width: 320px !important; }
    </style>';
}

add_action( 'init', 'remove_my_action');
function remove_my_action() {
     remove_action('login_head', 'tz_custom_login_logo');
}

add_action('login_head', 'tophica_custom_login_logo');

?>
