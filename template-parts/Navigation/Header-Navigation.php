<?php
wp_nav_menu(
    array(
        'theme_location' => 'HeaderNavMenu',
        'menu_class' => 'd-flex align-items-center justify-content-around',
        'link_before' => '<span class="text-dark-cety hover-text-purple-cety focus-text-purple-cety">',
        'link_after' => '</span>'
    )
);
