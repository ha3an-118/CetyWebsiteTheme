<?php
if (has_post_thumbnail())
    the_post_thumbnail(
        'thumbnail',
        array(
            'class' => 'card-img-top',
        )
    );
else {
    ?>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/Assets/Images/Other/DefaultPostThumbnail.jpg') ?>" class="card-img-top" alt="PostThumbnail">
<?php
}
