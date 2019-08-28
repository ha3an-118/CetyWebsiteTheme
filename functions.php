<?php
//Actions
add_action('wp_enqueue_scripts', 'IncludeStylesAndScripts');


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