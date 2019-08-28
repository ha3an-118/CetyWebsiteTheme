<?php
//Actions
add_action('wp_enqueue_scripts', 'IncludeStylesAndScripts');

add_action('after_setup_theme', 'CustomLogoSetup');





//Registers
require_once(get_template_directory() . '/inc/Helpers/View/HeaderNavMenuHelper.php');
RegisterNavMenus();





//-------Functions
function IncludeStylesAndScripts()
{
    require_once(get_template_directory() . '/inc/Boundle.php');
    $Boundle = new Boundle();

    $Boundle->Include('Jquery');
    $Boundle->Include('Bootstrap');
    $Boundle->Include('WebsiteStyle');
    $Boundle->Include('WebsiteScript');
}


function CustomLogoSetup()
{
    $CustomLogoInfo = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );

    add_theme_support('custom-logo', $CustomLogoInfo);
}