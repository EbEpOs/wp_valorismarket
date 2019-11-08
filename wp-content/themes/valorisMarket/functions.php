<?php
add_action('wp_enqueue_scripts', 'register_mstore_styles');
add_action('wp_enqueue_scripts', 'register_mstore_scripts');
function register_mstore_styles()
{
    wp_enqueue_style('mstore-vendor-css', get_template_directory_uri() . '/css/vendor.min.css');
    wp_enqueue_style('mtsore-theme-css', get_template_directory_uri() . '/css/theme.min.css');
}

function register_mstore_scripts()
{
    wp_enqueue_script('mstore-vendor-js', get_template_directory_uri() . '/js/vendor.min.js', array(), false, true);
    wp_enqueue_script('mtsore-theme-js', get_template_directory_uri() . '/js/theme.min.js', array(), false, true);
}

//enregistrement des fichier de css
/*
wp_register_style("theme", get_template_directory_uri() . "/css/theme.css", '', '1.0.0');
wp_enqueue_style('theme');
wp_register_style("prism", get_template_directory_uri() . "/css/prism.min.css", '', '1.0.0');
wp_enqueue_style('prism');
wp_register_style("vendor", get_template_directory_uri() . "/css/vendor.min.css", '', '1.0.0');
wp_enqueue_style('vendor');
//enregistrement des fichier de js
wp_register_script( 'vendor_js', get_template_directory_uri() . '/js/vendor.min.js', array ( 'jquery' ), 1.1, true);
wp_register_script( 'theme_js', get_template_directory_uri() . '/js/theme.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script('vendor_js');
wp_enqueue_script('theme_js');*/
