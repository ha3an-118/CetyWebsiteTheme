<?php
wp_nav_menu(
    array(
        'theme_location' => 'HeaderSocialMenu',
        'menu_class' => 'd-flex align-items-center',
        'container_class' => 'SocialMenu',
        'link_before' => '<i class="fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"><span class="d-none">',
        'link_after' => '</span></i>'
    )
);
?>

<!-- <div class="d-flex align-items-center">
    <a href="https://www.google.com"><i class="fab fa-twitter fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
    <a href="https://www.instagram/"><i class="fab fa-instagram fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
    <a href="https://www.google.com"><i class="fa fa-paper-plane fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
</div> -->