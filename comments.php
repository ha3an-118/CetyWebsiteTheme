<?php comment_form(); ?>

<div class="space-20"></div> <!-- this is for spacing -->

<hr>

<div class="space-20"></div> <!-- this is for spacing -->

<?php if (have_comments()) { ?>

    <!-- comments list section -->
    <section class="px-3">

        <!-- title of this section -->
        <div class="text-purple-cety text-left">
            <span class="pr-1"><?php esc_html_e(get_comment_count()['all']); ?></span><span> <?php _e('دیدگاه', CetyWebsiteThemeTextDomain); ?></span>
        </div>
        <!-- end title of this section -->

        <div class="space-20"></div> <!-- this is for spacing -->

        <!-- all comments -->
        <section>
            <div class="comments-list">

                <?php wp_list_comments(); ?>

            </div>
        </section>
        <!-- end all comments -->

    </section>
    <!-- end comments list -->
<?php
}
?>