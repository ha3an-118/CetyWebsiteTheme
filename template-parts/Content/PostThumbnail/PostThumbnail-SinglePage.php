<?php
if (has_post_thumbnail())
    the_post_thumbnail(
        'medium',
        array(
            'class' => 'w-100',
        )
    );
else {
    ?>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/DefaultPostThumbnail.jpg') ?>" class="w-100" alt="PostThumbnail">
<?php
}
