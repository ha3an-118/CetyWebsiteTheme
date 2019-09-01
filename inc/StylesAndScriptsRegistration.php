<?php

/**
 * keep all styles and scripts registrations in one place
 */

wp_register_style('FontAwesome', get_template_directory_uri() . '/assets/CSS/AllFontAwesomes.css');
wp_register_style('ColorStyle', get_template_directory_uri() . '/assets/CSS/Color.css');
wp_register_style('WebsiteStyle', get_template_directory_uri() . '/assets/CSS/Style.css', array('ColorStyle'));
wp_register_style('CustomFontAwesome', get_template_directory_uri() . '/assets/CSS/CustomFontAwesome.css', array('FontAwesome'));
wp_register_script('WebsiteJs', get_template_directory_uri() . '/assets/JS/Actions.js');

//Bootstrap
wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
wp_register_script('BootstrapBoundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
wp_register_script('BootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('BootstrapBoundle'));

//Jquery
wp_register_script('WebsiteJquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
