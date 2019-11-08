<?php
//enregistrement des fichier de css
wp_register_style("theme", get_template_directory_uri() . "/css/theme.min.css", '', '1.0.0');
wp_enqueue_style('theme');
wp_register_style("vendor", get_template_directory_uri() . "/css/vendor.min.css", '', '1.0.0');
wp_enqueue_style('theme');
wp_register_style("prism", get_template_directory_uri() . "/css/prism.min.css", '', '1.0.0');
wp_enqueue_style('prism');
//enregistrement des fichier de
function theme_js(){
    wp_enqueue_script('card_js', get_template_directory_uri() . '/js/card.min.js', array());
    wp_enqueue_script('prism_js', get_template_directory_uri() . '/js/prism.min.js', array());
    wp_enqueue_script('vendor_js', get_template_directory_uri() . '/js/vendor.min.js', array());
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.min.js', array());
}

add_action('wp_footer','theme_js');

