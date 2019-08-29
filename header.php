<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> dir="rtl">
    <?php wp_body_open(); ?>

    <!-- header part -->
    <header id="navbar" class="">

        <!-- phone number and social media navbar -->
        <div class="bg-white-cety">
            <div class="d-flex flex-row justify-content-between p-2 container mx-auto">
                <!--phone number part-->
                <div class="d-flex align-items-center">
                    <p class="text-dark-purple-cety ml-1 fa-1x">0919-371-6422</p>
                    <i class="fa fa-phone fa-1x text-dark-purple-cety mr-1"></i>
                </div>
                <!--end phone number part-->

                <!-- social media part-->
                <div class="d-flex align-items-center">
                    <a href="https://www.google.com"><i class="fab fa-twitter fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
                    <a href="https://www.instagram.com/cetyir/"><i class="fab fa-instagram fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
                    <a href="https://www.google.com"><i class="fa fa-paper-plane fa-1x text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety mx-2"></i></a>
                </div>
                <!--end social media part-->
            </div>
        </div>
        <!-- end phone number and social media navbar-->

        <!-- menu section-->
        <div class="bg-white-cety menu shadow-bottom">
            <div class="row align-items-center container mx-auto px-5">
                <div class="col-1">
                    <?php
                    require_once(get_template_directory() . '/inc/Helpers/View/CustomLogoHelper.php');
                    InsertCustomLogo();
                    ?>
                </div>
                <nav class="col-11 px-5">
                    <?php
                    require_once(get_template_directory() . '/inc/Helpers/View/HeaderNavMenuHelper.php');
                    InsertHeaderNavMenu();
                    ?>
                </nav>
            </div>
        </div>
        <!-- end menu section-->

        <!-- collapse menu section-->
        <div class="shadow bg-light-cety sidebar">
            <div class="d-flex align-items-center justify-content-between container mx-auto p-2">

                <!--logo pic -->
                <div>
                    <?php
                    require_once(get_template_directory() . '/inc/Helpers/View/CustomLogoHelper.php');
                    InsertCustomLogo();
                    ?>
 
                    <!-- <a href="./Home.html"><img src="./assets/img/logo/Logo and name fa png.png" alt="logo-image" width="50px"></a> -->
                </div>
                <!--end logo pic  -->

                <!-- brand name  -->
                <div class="d-none">
                    <strong class="text-purple-cety fa-15x">Cety</strong>
                </div>
                <!-- end brand name part -->

                <!-- collapse sidebar or navbar btn  -->
                <div>
                    <button class="border-none bg-transparent" onclick="openNav()">
                        <span class="fa fa-bars text-gray-cety fa-15x"></span>
                    </button>
                </div>
                <!-- end collapse sidebar or navbar btn -->

            </div>
            <!--end logo and collapse part-->

        </div>
        <!-- end collapse menu section-->

    </header>
    <!-- end header part -->