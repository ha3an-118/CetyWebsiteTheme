<?php
if ($wp_query->max_num_pages <= 1)
    return;

$PageNumber = ($PageNumber = get_query_var('paged')) ? $PageNumber : 1;
$MaxPageNumber = intval($wp_query->max_num_pages);

//add next and previous page numbers
for ($i = $PageNumber - NumberPageNumbersArroundCurrentPageNumber; $i <= $PageNumber + NumberPageNumbersArroundCurrentPageNumber; $i++) {
    if ($i >= 1 && $i <= $MaxPageNumber)
        $PageNumbers[] = $i;
}
?>

<div class="space-100"></div> <!-- this is for spacing -->

<!-- pagination -->
<div class="d-flex justify-content-center" dir="ltr">
    <nav aria-label="Page navigation example">
        <ul class="pagination shadow">

            <!-- Handle previous post link -->
            <?php
            if ($PageNumber > 1) {
                ?>
                <li class="page-item">
                    <a href="<?php echo esc_url(get_pagenum_link($PageNumber - 1)) ?>" aria-label="Previous">
                        <span class="page-link text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety p-2 border-0" aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php
            }
            ?>
            <!-- End handling previous post link -->

            <?php
            foreach ($PageNumbers as $Number) {
                $Class = '';
                $TagName = 'a';
                $PageNumberURL = 'href="' . esc_url(get_pagenum_link($Number)) . '"';

                if ($PageNumber == $Number) {
                    $Class = 'class="active"';
                    $TagName = 'p';
                    $PageNumberURL = '';
                }
                ?>
                <li class="page-item">
                    <<?php echo $TagName . ' ' . $Class . ' ' . $PageNumberURL; ?>>
                        <span class="page-link text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety p-2 border-0"><?php echo $Number ?></span>
                    </<?php echo $TagName ?>>
                </li>
            <?php
            }
            ?>

            <!-- Handle next post link -->
            <?php
            if ($PageNumber < $MaxPageNumber) {
                ?>
                <li class="page-item">
                    <a href="<?php echo esc_url(get_pagenum_link($PageNumber + 1)) ?>" aria-label="Next">
                        <span class="page-link text-dark-purple-cety hover-text-purple-cety focus-text-purple-cety p-2 border-0" aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php
            }
            ?>
            <!-- End handling next post link -->

        </ul>
    </nav>
</div>
<!--end pagination-->