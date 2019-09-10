<?php

/**
 * Template Name: Blog
 */

get_header();
?>

<!-- body part-->
<main class="img-wave">
    <div class="container mx-auto px-3 px-lg-0 mt-5 pb-6">

        <div class="space-100"></div> <!-- this is for spacing -->

        <hr> <!-- horizental line -->

        <!-- search box -->
        <div class="d-flex flex-row justify-content-center my-2">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 text-right">
                <button type="button" id="" class="bg-transparent border-0 search-btn px-2">
                    <i class="fa fa-search pr-2"></i>
                </button>
                <input type="search" class="form-control shadow text-dark-cety rounded-15px px-3" id="" aria-describedby="search" placeholder="جستجوی نام مقاله..."><!-- name input -->
            </div>
        </div>
        <!-- search box -->

        <hr><!-- horizental line -->

        <div class="space-20"></div> <!-- this is for spacing -->

        <div class="space-20"></div> <!-- this is for spacing -->

        <!-- weblog samples section -->
        <section>
            <?php
            get_template_part('template-parts/Content/Posts');
            ?>

            <div class="space-100"></div> <!-- this is for spacing -->
        </section>
        <!-- end work samples section -->

    </div>
</main>
<!-- end body part-->

<?php
get_footer();
