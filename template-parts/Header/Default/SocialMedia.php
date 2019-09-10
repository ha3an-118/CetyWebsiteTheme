<?php
if (has_nav_menu(HeaderSocialMediaMenuLocation))
    wp_nav_menu(
        array(
            'theme_location' => HeaderSocialMediaMenuLocation,
            'menu_class' => 'd-flex align-items-center',
            'container_class' => 'SocialMenu',
            'link_before' => '<i class="fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"><span class="d-none">',
            'link_after' => '</span></i>'
        )
    );
