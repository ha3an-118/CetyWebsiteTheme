<?php
get_header();
?>


<!-- body part-->
<main>
    <div class="mt-5 img-shape">

        <div class="space-100"></div> <!-- this is for spacing -->

        <!-- -------- entro section -------- -->
        <section>
            <div class="d-flex flex-row justify-content-between container mx-auto px-3 px-md-0">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <h3 class="text-center text-dark-cety" id="<?php echo FrontPageCustomizeSloganTitleSettingId ?>"><?php esc_html_e(get_theme_mod(FrontPageCustomizeSloganTitleSettingId)) ?></h3><!-- title -->
                    <div class="space-20"></div> <!-- this is for spacing -->
                    <span class="text-center text-dark-cety" id="<?php echo FrontPageCustomizeSloganContentSettingId ?>">
                        <!-- description -->
                        <?php esc_html_e(get_theme_mod(FrontPageCustomizeSloganContentSettingId)) ?>
                    </span>
                    <div class="space-100"></div> <!-- this is for spacing -->
                    <div>
                        <a href="<?php echo esc_url(get_permalink(get_theme_mod(FrontPageCustomizeOrderButtonLinkSettingId))) ?>">
                            <span id="<?php echo FrontPageCustomizeOrderButtonTitleSettingId ?>" class="btn rounded shadow bg-purple-cety text-white-cety hover-bg-light-purple-cety focus-bg-light-purple-cety">
                                <?php esc_html_e(get_theme_mod(FrontPageCustomizeOrderButtonTitleSettingId)) ?>
                            </span>
                        </a>
                    </div><!-- btn for order website page -->
                </div>
                <div class="col-12 col-lg-5 img-intro">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Background/WebDesign.png'); ?>" alt="" class="w-100">
                </div>
            </div>
        </section>
        <!-- -------- end entro section -------- -->

        <div class="space-100"></div> <!-- this is for spacing -->
        <div class="space-100"></div> <!-- this is for spacing -->

        <!-- -------- our services section -------- -->
        <section>
            <div class="container mx-auto px-3 px-md-0">
                <h4 class="text-center">خدمات ما</h4><!-- title of this section -->

                <div class="space-100"></div> <!-- this is for spacing -->

                <!-- body of this section -->
                <div class="row d-flex justify-content-around">

                    <!-- seo part -->
                    <div class="col-6 col-md-4 col-lg-2 my-3 d-flex flex-column align-items-center p-5 blob1">

                        <i class="fa fa-chart-line fa-2x"></i><!-- seo icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">سئو و بهینه سازی سایت</h6><!-- description -->

                    </div>
                    <!-- end seo part -->

                    <!-- wordpress theme part -->
                    <div class="col-6 col-md-4 col-lg-2 my-3 d-flex flex-column align-items-center p-5 blob2">

                        <i class="fa fa-ruler-combined fa-2x"></i><!-- wordpress theme icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">طراحی قالب های تخصصی وردپرس</h6>
                        <!-- descriptioin -->

                    </div>
                    <!-- end wordpress theme part -->

                    <!-- rest api part -->
                    <div class="col-6 col-md-4 col-lg-2 my-3 d-flex flex-column align-items-center p-5 blob3">

                        <i class="fa fa-sitemap fa-2x"></i><!-- api icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">طراحی رست api</h6><!-- description -->

                    </div>
                    <!-- end rest api part -->

                    <!-- plugin part -->
                    <div class="col-6 col-md-4 col-lg-2 my-3 d-flex flex-column align-items-center p-5 blob4">

                        <i class="fas fa-puzzle-piece fa-2x"></i><!-- plugin icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">طراحی پلاگین</h6><!-- description -->

                    </div>
                    <!-- end plugin part -->

                    <!-- website part -->
                    <div class="col-6 col-md-4 col-lg-2 my-3 d-flex flex-column align-items-center p-5 blob5">

                        <i class="fa fa-globe fa-2x"></i><!-- website icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">طراحی سایت</h6><!-- description -->

                    </div>
                    <!-- end website part -->

                </div>
                <!-- end body of this section -->
            </div>
        </section>
        <!---------- end our servicess section ---------->

        <!-- -------- why us? part -------- -->
        <section class="pt-7">
            <div class="container mx-auto px-3 px-md-0">
                <h4 class="text-center">چرا ما؟</h4><!-- title of this section -->

                <div class="space-100"></div> <!-- this is for spacing -->

                <!-- body of this section -->
                <div class="row d-flex justify-content-around">

                    <!-- wordpress part -->
                    <div class="col-6 col-md-4 col-lg-3 my-3 d-flex flex-column align-items-center p-5 blob1">

                        <i class="fab fa-wordpress fa-2x"></i><!-- wordpress icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">قالب اختصاصی وردپرس</h6><!-- description -->

                    </div>
                    <!-- end wordpress part -->

                    <!-- security part -->
                    <div class="col-6 col-md-4 col-lg-3 my-3 d-flex flex-column align-items-center p-5 blob2">

                        <i class="fa fa-lock fa-2x"></i><!-- security icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">امنیت بالا</h6>
                        <!-- descriptioin -->

                    </div>
                    <!-- end security part -->

                    <!-- open source part -->
                    <div class="col-6 col-md-4 col-lg-3 my-3 d-flex flex-column align-items-center p-5 blob3">

                        <i class="fa fa-lock-open fa-2x"></i><!-- open source icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">متن باز</h6><!-- description -->

                    </div>
                    <!-- end open source part -->

                    <!-- speed part -->
                    <div class="col-6 col-md-4 col-lg-3 my-3 d-flex flex-column align-items-center p-5 blob4">

                        <i class="fas fa-tachometer-alt fa-2x"></i><!-- speed icon -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <h6 class="text-gray-cety text-center">سرعت بالا</h6><!-- description -->

                    </div>
                    <!-- end speed part -->

                </div>
                <!-- end body of this section -->
            </div>
        </section>
        <!-- -------- end why us part -------- -->

        <!-- -------- founders part -------- -->
        <section class="pb-7 pt-7 img-cage">

            <div class="row d-flex justify-content-around container mx-auto px-3 px-md-0">

                <!-- hassan abedi part -->
                <div class="col-12 col-lg-3 my-3 d-flex flex-row rounded shadow bg-white-cety py-3 px-2">
                    <!-- text part -->
                    <div class="col-10 d-flex flex-column">
                        <!-- about person part -->
                        <div>
                            <div class="text-left">
                                <h6>حسن عابدی</h6><!-- name -->
                                <span class="text-gray-cety py-2">برنامه نویس PHP و غیره</span>
                                <!-- description -->
                            </div>
                        </div>
                        <!-- end about person part -->

                        <!-- social media part -->
                        <div>
                            <div class="d-flex justify-content-around pt-2">
                                <a href=""><i class="fab fa-twitter text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- twitter icon -->
                                <a href=""><i class="fab fa-instagram text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- instagram icon -->
                                <a href=""><i class="fa fa-paper-plane text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- telegram icon -->
                            </div>
                        </div>
                        <!-- end social media part -->
                    </div>
                    <!-- end text part -->

                    <!-- image part -->
                    <div class="col-2">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Founder/Hassan.jpg') ?>" alt="hasan-abedi-image" width="50px" class="rounded-circle img-thumbnail">
                    </div>
                    <!-- end image part -->
                </div>
                <!-- end hassan abedi part -->

                <!-- abbas babaie part -->
                <div class="col-12 col-lg-3 my-3 d-flex flex-row rounded shadow bg-white-cety py-3 px-2">
                    <!-- text part -->
                    <div class="col-10 d-flex flex-column">
                        <!-- about person part -->
                        <div>
                            <div class="text-left">
                                <h6>عباس بابایی</h6><!-- name -->
                                <span class="text-gray-cety py-2">برنامه نویس PHP و غیره</span>
                                <!-- description -->
                            </div>
                        </div>
                        <!-- end about person part -->

                        <!-- social media part -->
                        <div>
                            <div class="d-flex justify-content-around pt-2">
                                <a href=""><i class="fab fa-twitter text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- twitter icon -->
                                <a href=""><i class="fab fa-instagram text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- instagram icon -->
                                <a href=""><i class="fa fa-paper-plane text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- telegram icon -->
                            </div>
                        </div>
                        <!-- end social media part -->
                    </div>
                    <!-- end text part -->

                    <!-- image part -->
                    <div class="col-2">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Founder/Abbas.jpg') ?>" alt="abbas-image" width="50px" class="rounded-circle img-thumbnail">
                    </div>
                    <!-- end image part -->
                </div>
                <!-- end abbas babaie part -->

                <!-- parsa part -->
                <div class="col-12 col-lg-3 my-3 d-flex flex-row rounded shadow bg-white-cety py-3 px-2">
                    <!-- text part -->
                    <div class="col-10 d-flex flex-column">
                        <!-- about person part -->
                        <div>
                            <div class="text-left">
                                <h6>پارسا لاریمیان</h6><!-- name -->
                                <span class="text-gray-cety py-2">برنامه نویس PHP و غیره</span>
                                <!-- description -->
                            </div>
                        </div>
                        <!-- end about person part -->

                        <!-- social media part -->
                        <div>
                            <div class="d-flex justify-content-around pt-2">
                                <a href=""><i class="fab fa-twitter text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- twitter icon -->
                                <a href=""><i class="fab fa-instagram text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- instagram icon -->
                                <a href=""><i class="fa fa-paper-plane text-gray-cety hover-text-purple-cety focus-text-purple-cety mx-1"></i></a>
                                <!-- telegram icon -->
                            </div>
                        </div>
                        <!-- end social media part -->
                    </div>
                    <!-- end text part -->

                    <!-- image part -->
                    <div class="col-2">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Founder/Parsa.jpg') ?>" alt="parsa-image" width="50px" class="rounded-circle img-thumbnail">
                    </div>
                    <!-- end image part -->
                </div>
                <!-- end parsa part -->

            </div>

        </section>
        <!-- -------- end founders part -------- -->

        <!-- -------- the last twiteer of us part -------- -->
        <section>
            <div class="container mx-auto px-3 px-md-0">
                <!-- title of this part -->
                <div class="row">
                    <i class="fab fa-twitter fa-15x pr-2 twitter-color"></i><!-- twiteer icon -->
                    <h4>آخرین توییت ما</h4><!-- the title -->
                </div>
                <!-- end tittle of this part  -->

                <div class="space-100"></div> <!-- this is for spacing -->

                <!-- twiteer box -->
                <div class="d-flex flex-row rounded shadow bg-white-cety py-3 px-2">
                    <!-- text part -->
                    <div class="col-10 d-flex flex-column">
                        <!-- writer part -->
                        <div class="pr-2">
                            <span>Cety </span><!-- the writers name -->
                            <span class="text-gray-cety fa-08x">@cety 5hours ago</span><!-- the time of post -->
                        </div>
                        <!-- end writer part -->

                        <div class="space-20"></div> <!-- this is for spacing -->

                        <!-- the post text part-->
                        <h6 class="text-gray-cety text-center">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                            از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </h6>
                        <!--end post text part  -->

                        <!-- post info part -->
                        <div class="d-flex justify-content-around mt-3">
                            <!-- shaer icon -->
                            <div class="row text-gray-cety">
                                <i class="fa fa-share-alt pl-1"></i>
                            </div>
                            <!-- end sghare icon -->

                            <!-- likes icon -->
                            <div class="row text-gray-cety">
                                <h6>3</h6><!-- likes numbers -->
                                <i class="fa fa-heart pl-1"></i>
                            </div>
                            <!-- end likes icon -->

                            <!-- reposted part -->
                            <div class="row text-gray-cety">
                                <h6>3</h6><!-- reposted number -->
                                <i class="fa fa-reply pl-1"></i>
                            </div>
                            <!-- end reposted part -->

                            <!-- coments part -->
                            <div class="row text-gray-cety">
                                <h6>3</h6><!-- coments number -->
                                <i class="fa fa-comment pl-1"></i>
                            </div>
                            <!-- end coments part -->
                        </div>
                        <!-- end post info part -->
                    </div>
                    <!-- end text part -->

                    <!-- image part -->
                    <div class="col-2 d-flex justify-content-around">
                        <div class="col-12 col-md-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Logo/Logo.png') ?>" alt="cety-logo" width="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <!-- end image part -->
                </div>
                <!-- end twiteer box  -->
            </div>
        </section>
        <!-- -------- end last twiteer of us part -------- -->

        <div class="space-100"></div> <!-- this is for spacing -->
        <div class="space-100"></div> <!-- this is for spacing -->

        <!-- --------- our last instagram post part -------- -->
        <section class="pb-6 img-wave">
            <div class="container mx-auto px-3 px-md-0">
                <!-- title of this part -->
                <div class="row">
                    <i class="fab fa-instagram fa-15x pr-2 instagram-color"></i><!-- instagram icon -->
                    <h4>آخرین پست های ما</h4><!-- the title -->
                </div>
                <!-- end tittle of this part  -->

                <div class="space-100"></div> <!-- this is for spacing -->

                <!-- instagram post part -->
                <div class="col">
                    <div class="" style="position: absolute;right: 0;opacity:1;top: 40%;z-index: 100;height: 100px;">
                        <button name="btn-right" type="button" onclick="scroll_right()" class="h-100 w-100 border shadow rounded-left bg-white-cety px-3
										 text-gray-cety hover-text-light-purple-cety focus-text-purple-cety">
                            <i class="fa fa-angle-right fa-2x"></i>
                        </button>
                    </div>

                    <div id="insta_posts" class="d-none d-flex flex-row pb-4" style="overflow-x: hidden;">

                        <!-- instagram post part -->
                        <div class="col-12 col-sm-4 col-md-3 rounded shadow bg-white-cety mr-3">
                        <div class="d-flex h-100">
                            <a href="https://www.google.com">
                            <div class="d-flex h-100">
                                <div class="d-flex flex-column justify-content-between">
                                    <!-- header of post -->
                                    <div class="d-flex flex-row align-items-center justify-content-between p-3">
                                        <i class="fas fa-ellipsis-v fa-15x text-gray-cety"></i>
                                        <div class="col-2">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Logo/Logo.png') ?>" alt="cety-logo-image" width="50px" class="rounded-circle img-thumbnail border">
                                            <!-- page picture -->
                                        </div>
                                    </div>
                                    <!-- end header of post -->

                                    <!-- post content -->
                                    <div class="">
                                        <img id="" src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/SEO.jpg') ?>" alt="instagram-post" class="myimg w-100">
                                        <!-- the content -->
                                    </div>
                                    <!-- end post content -->

                                    <!-- footer of the instagram post -->
                                    <div class="d-flex flex-row align-items-center align-self-end justify-content-between p-3">
                                        <div>
                                            <i class="fa fa-tag fa-15x d-none"></i>
                                        </div>
                                        <div>
                                            <i id="insta" class="fa fa-paper-plane fa-15x mx-2"></i>
                                            <!-- share icon -->
                                            <i class="fa fa-comment fa-15x mx-2"></i><!-- coments icon -->
                                            <i class="fa fa-heart fa-15x mx-2"></i><!-- like icons -->
                                        </div>
                                    </div>
                                    <!-- end footer of instagram post -->
                                </div>
                            </div>
                            </a>
                        </div>

                        </div>
                        <!-- end instagram post part -->

                        <!-- instagram post part -->
                        <div class="col-12 col-sm-4 col-md-3 rounded shadow bg-white-cety mr-3">
                        <div class="d-flex h-100">
                            <a href="https://www.google.com">
                            <div class="d-flex h-100">
                                <div class="d-flex flex-column justify-content-between">
                                    <!-- header of post -->
                                    <div class="d-flex flex-row align-items-center justify-content-between p-3">
                                        <i class="fas fa-ellipsis-v fa-15x text-gray-cety"></i>
                                        <div class="col-2">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Logo/Logo.png') ?>" alt="cety-logo-image" width="50px" class="rounded-circle img-thumbnail border">
                                            <!-- page picture -->
                                        </div>
                                    </div>
                                    <!-- end header of post -->

                                    <!-- post content -->
                                    <div class="">
                                        <img id="" src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/Beach.jpg') ?>" alt="instagram-post" class="myimg w-100">
                                        <!-- the content -->
                                    </div>
                                    <!-- end post content -->

                                    <!-- footer of the instagram post -->
                                    <div class="d-flex flex-row align-items-center align-self-end justify-content-between p-3">
                                        <div>
                                            <i class="fa fa-tag fa-15x d-none"></i>
                                        </div>
                                        <div>
                                            <i id="insta" class="fa fa-paper-plane fa-15x mx-2"></i>
                                            <!-- share icon -->
                                            <i class="fa fa-comment fa-15x mx-2"></i><!-- coments icon -->
                                            <i class="fa fa-heart fa-15x mx-2"></i><!-- like icons -->
                                        </div>
                                    </div>
                                    <!-- end footer of instagram post -->
                                </div>
</div>
                            </a>
</div>
                        </div>
                        <!-- end instagram post part -->

                        <!-- instagram post part -->
                        <div class="col-12 col-sm-4 col-md-3 rounded shadow bg-white-cety mr-3">
                        <div class="d-flex h-100">
                            <a href="https://www.google.com">
                            <div class="d-flex h-100">
                                <div class="d-flex flex-column justify-content-between">
                                    <!-- header of post -->
                                    <div class="d-flex flex-row align-items-center justify-content-between p-3">
                                        <i class="fas fa-ellipsis-v fa-15x text-gray-cety"></i>
                                        <div class="col-2">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Logo/Logo.png') ?>" alt="cety-logo-image" width="50px" class="rounded-circle img-thumbnail border">
                                            <!-- page picture -->
                                        </div>
                                    </div>
                                    <!-- end header of post -->

                                    <!-- post content -->
                                    <div class="">
                                        <img id="" src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/Balloon.jpg') ?>" alt="instagram-post" class="myimg w-100">
                                        <!-- the content -->
                                    </div>
                                    <!-- end post content -->

                                    <!-- footer of the instagram post -->
                                    <div class="d-flex flex-row align-items-center align-self-end justify-content-between p-3">
                                        <div>
                                            <i class="fa fa-tag fa-15x d-none"></i>
                                        </div>
                                        <div>
                                            <i id="insta" class="fa fa-paper-plane fa-15x mx-2"></i>
                                            <!-- share icon -->
                                            <i class="fa fa-comment fa-15x mx-2"></i><!-- coments icon -->
                                            <i class="fa fa-heart fa-15x mx-2"></i><!-- like icons -->
                                        </div>
                                    </div>
                                    <!-- end footer of instagram post -->
                                </div>
                                </div>
                            </a>
                            </div>
                        </div>
                        <!-- end instagram post part -->

                        <!-- instagram post part -->
                        <div class="col-12 col-sm-4 col-md-3 rounded shadow bg-white-cety mr-3">
                        <div class="d-flex h-100">
                            <a href="https://www.google.com">
                            <div class="d-flex h-100">
                                <div class="d-flex flex-column justify-content-between">
                                    <!-- header of post -->
                                    <div class="d-flex flex-row align-items-center justify-content-between p-3">
                                        <i class="fas fa-ellipsis-v fa-15x text-gray-cety"></i>
                                        <div class="col-2">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Logo/Logo.png') ?>" alt="cety-logo-image" width="50px" class="rounded-circle img-thumbnail border">
                                            <!-- page picture -->
                                        </div>
                                    </div>
                                    <!-- end header of post -->

                                    <!-- post content -->
                                    <div class="">
                                        <img id="" src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/WebDesign.jpg') ?>" alt="instagram-post" class="myimg w-100">
                                        <!-- the content -->
                                    </div>
                                    <!-- end post content -->

                                    <!-- footer of the instagram post -->
                                    <div class="d-flex flex-row align-items-center align-self-end justify-content-between p-3">
                                        <div>
                                            <i class="fa fa-tag fa-15x d-none"></i>
                                        </div>
                                        <div>
                                            <i id="insta" class="fa fa-paper-plane fa-15x mx-2"></i>
                                            <!-- share icon -->
                                            <i class="fa fa-comment fa-15x mx-2"></i><!-- coments icon -->
                                            <i class="fa fa-heart fa-15x mx-2"></i><!-- like icons -->
                                        </div>
                                    </div>
                                    <!-- end footer of instagram post -->
                                </div>
                                </div>
                            </a>
                            </div>
                        </div>
                        <!-- end instagram post part -->

                    </div>

                    <div class="" style="position: absolute;left: 0;opacity:1;top: 40%;z-index: 100;height: 100px;">
                        <button name="btn-left" type="button" onclick="scroll_left()" class="h-100 w-100 border shadow rounded-right bg-white-cety px-3 text-gray-cety hover-text-light-purple-cety focus-text-purple-cety">
                            <i class="fa fa-angle-left fa-2x"></i>
                        </button>
                    </div>
                </div>
                <!-- end instagram post part -->
            </div>
        </section>
        <!-- -------- end our last instagram post part -------- -->

    </div>
</main>
<!-- end body part-->


<?php
get_footer();
?>