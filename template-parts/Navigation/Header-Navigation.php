<?php
if (has_nav_menu(HeaderNavigationMenuLocation))
    wp_nav_menu(
        array(
            'theme_location' => HeaderNavigationMenuLocation,
            'menu_class' => 'd-flex align-items-center justify-content-around',
            'link_before' => '<span class="text-dark-cety hover-text-purple-cety focus-text-purple-cety">',
            'link_after' => '</span>'
        )
    );
