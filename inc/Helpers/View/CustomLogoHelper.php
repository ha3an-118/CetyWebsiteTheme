<?php
function InsertCustomLogo()
{
    if (function_exists('the_custom_logo') && has_custom_logo())
        the_custom_logo();
    else {
        $HomeURL = esc_url(home_url());
        $DefaultLogoURL = esc_url(get_template_directory_uri() . '/Assets/Images/Logo/LogoWithNamePE.png');
?>

        <a href="<?php echo $HomeURL ?>">
            <img class="w-75" src="<?php echo $DefaultLogoURL ?>" alt="<?php get_bloginfo('name') ?>">
        </a>

<?php
    }
}
