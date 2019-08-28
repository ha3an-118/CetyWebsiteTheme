<?php
function InsertHeaderNavMenu()
{
    $MenuName = 'HeaderNavMenu';
    $Locations = get_nav_menu_locations();

    if ($Locations && isset($Locations[$MenuName])) {
        $Menu = wp_get_nav_menu_object($Locations[$MenuName]);
        $MenuItems = wp_get_nav_menu_items($Menu->term_id);
        $CurrentObjectId = get_queried_object_id();
?>

        <ul class="d-flex align-items-center justify-content-around">

<?php
            foreach ($MenuItems as $key => $MenuItem) {
                $MenuTitle = $MenuItem->title;
                $URL = esc_url($MenuItem->url);
?>
                <li class="">
                    <a href="<?php echo $URL ?>" class="d-flex justify-content-center">
                        <span class="text-dark-cety hover-text-purple-cety focus-text-purple-cety <?php echo ($MenuItem->object_id == $CurrentObjectId) ? 'active' : '' ?>">
                            <?php echo $MenuTitle ?>
                        </span>
                    </a>
                </li>
<?php
            }
?>
        </ul>
<?php
    }
}


function RegisterNavMenus()
{
    register_nav_menus(
        array(
            'HeaderNavMenu' => __('Header Navigation Menu')
        )
    );
}