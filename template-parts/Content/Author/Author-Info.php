<?php
if (get_the_author() == null)
    return;
?>

<!-- writer of the article box -->
<blockquote class="col-lg-10 my-3 px-3">
    <div class="rounded-left shadow bg-white-cety py-1 px-2 border-right-purple">
        <div>
            <span>
                <?php _e('نویسنده:') ?>
            </span>
            <hr class="mt-1 mb-2 w-50 bg-purple-cety">
        </div>
        <!-- writer info part -->
        <div class="d-flex flex-row rounded bg-white-cety">
            <!-- text part -->
            <div class="col-10 d-flex flex-column">
                <!-- about writer part -->
                <div>
                    <div class="text-left">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            <h6><?php echo esc_html(get_the_author()) ?></h6><!-- name -->
                        </a>
                        <h6 class="text-gray-cety py-2"><?php echo esc_html(get_the_author_meta('description')) ?></h6>
                        <!-- description -->
                    </div>
                </div>
                <!-- end about writer part -->

            </div>
            <!-- end text part -->

            <!-- image part -->
            <div class="col-2 d-flex justify-content-around">
                <div class="col-12 col-md-4">
                    <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'rounded-circle img-thumbnail')) ?>
                </div>
            </div>
            <!-- end image part -->
        </div>
        <!-- end writer info part -->
    </div>
</blockquote>
<!-- end writer of the article box -->