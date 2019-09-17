<?php
get_header();
?>

<!-- body part-->
<main>
    <div class="container mx-auto px-3 px-lg-0 mt-5 pb-6">

        <div class="space-100"></div> <!-- this is for spacing -->
        <?php while (have_posts()) {
            the_post();
            ?>

            <!-- weblog  section -->
            <section>

                <!-- the article -->
                <article class="bg-white-cety p-3 rounded shadow">

                    <!-- article image -->
                    <div class="d-flex flex-row justify-content-center">
                        <div class="col-10 col-sm-8 col-md-6 col-lg-4">
                            <?php get_template_part('template-parts/Content/PostThumbnail/PostThumbnail', 'SinglePage') ?>
                        </div>
                    </div>
                    <!-- end article image -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- article text -->
                    <div class="text-left">
                        <h5><?php the_title(); ?></h5><!-- article subject -->

                        <?php esc_html(the_content()) ?>

                        <!-- article desc -->
                        <div class="space-20"></div> <!-- this is for spacing -->

                        <?php get_template_part('template-parts/Content/Author/Author', 'Info') ?>

                        <?php get_template_part('template-parts/Content/PostTags') ?>

                    </div>
                    <!-- end article text -->

                </article>
                <!-- end article -->

                <div class="space-100"></div> <!-- this is for spacing -->
                <hr>
                <div class="space-20"></div> <!-- this is for spacing -->

                <?php comments_template() ?>

            </section>
            <!-- end weblog section -->

        <?php
        }
        ?>
    </div>
</main>
<!-- end body part-->

<?php
get_footer();
?>