<?php
if (!have_posts())
    return;

$PageNumber = ($PageNumber = get_query_var('paged')) ? $PageNumber : 1;
$Author = ($Author = get_query_var('author')) ? $Author : null;
$TagId = ($TagId = get_query_var('tag_id')) ? $TagId : null;
$Args = array(
    'posts_per_page' => NumberPostsPerPage,
    'paged' => $PageNumber,
    'author' => $Author,
    'tag_id' => $TagId,
);
$wp_query = $Posts = new WP_Query($Args);
?>

<div class="row d-flex justify-content-around">

    <?php
    while ($Posts->have_posts()) {
        $Posts->the_post();
        ?>

        <div class="col-5 col-md-2 my-3 rounded shadow bg-white-cety">
            <a href="<?php echo esc_url(the_permalink()) ?>">
                <!-- weblog -->
                <div class="card border-0">
                    <?php get_template_part('template-parts/Content/PostThumbnail/PostThumbnail') ?>
                    <!-- weblog image -->
                    <div class="card-body fa-08x p-2 text-right">
                        <h6 class="card-title text-dark-cety"><?php the_title() ?></h6>
                        <!-- weblog titlte -->
                        <p class="card-text fa-07x py-2 text-gray-cety">
                            <?php echo esc_html(wp_trim_words(wp_strip_all_tags(get_the_excerpt()), BlogPageExcerptMaxWords, BlogPageExcerptMorePlaceHolder)); ?>
                        </p><!-- weblog text -->
                    </div>
                </div>
                <!-- end weblog -->
            </a>
        </div>

    <?php
    }
    ?>

</div>

<?php
//pagination
get_template_part('template-parts/Content/Pagination');
