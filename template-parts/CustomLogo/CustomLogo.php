<?php
$HomeURL = esc_url(home_url());

if (function_exists('has_custom_logo') && has_custom_logo()) {
    $CustomLogoId = get_theme_mod('custom_logo');
    $LogoURL = wp_get_attachment_image_src($CustomLogoId, 'full');
} else {
    $LogoURL = esc_url(get_template_directory_uri() . '/assets/Images/Logo/LogoWithNamePE.png');
}
?>

<div class="d-flex w-75">
    <a href="<?php echo $HomeURL ?>">
        <img class="w-100" src="<?php echo $LogoURL ?>" alt="<?php get_bloginfo('name') ?>">
    </a>
</div>