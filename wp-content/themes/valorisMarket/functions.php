<?php
//enregistrement des fichier de css
wp_register_style("theme", get_template_directory_uri() . "/css/theme.css", '', '1.0.0');
wp_enqueue_style('theme');
wp_register_style("prism", get_template_directory_uri() . "/css/prism.min.css", '', '1.0.0');
wp_enqueue_style('prism');
wp_register_style("vendor", get_template_directory_uri() . "/css/vendor.min.css", '', '1.0.0');
wp_enqueue_style('theme');
//enregistrement des fichier de js
wp_register_script( 'vendor_js', get_template_directory_uri() . '/js/vendor.min.js', array ( 'jquery' ), 1.1, true);
wp_register_script( 'theme_js', get_template_directory_uri() . '/js/theme.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script('vendor_js');
wp_enqueue_script('theme_js');
