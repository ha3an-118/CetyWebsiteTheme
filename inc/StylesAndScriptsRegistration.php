<?php

/**
 * keep all styles and scripts registrations in one place
 */

wp_register_style('FontAwesome', get_template_directory_uri() . '/Assets/CSS/AllFontAwesomes.css');
wp_register_style('ColorStyle', get_template_directory_uri() . '/Assets/CSS/Color.css');
wp_register_style('WebsiteStyle', get_template_directory_uri() . '/Assets/CSS/Style.css', array('ColorStyle'));
wp_register_style('CustomFontAwesome', get_template_directory_uri() . '/Assets/CSS/CustomFontAwesome.css', array('FontAwesome'));
wp_register_script('WebsiteJs', get_template_directory_uri() . '/Assets/JS/Actions.js', array('jquery', 'JqueryWaypoints'));

//Bootstrap
wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
wp_register_script('BootstrapBoundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
wp_register_script('BootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('BootstrapBoundle'));

//Jquery
wp_register_script('WebsiteJquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

//Animation
wp_register_script('JqueryWaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', array('jquery'));
wp_register_style('AnimateCSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
