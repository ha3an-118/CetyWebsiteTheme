<?php if (!get_the_tags()) return; ?>

<!-- tags -->
<div class="post-tags">

    <?php
    $liClass = 'class="rounded mx-2 bg-light-cety text-gray-cety hover-text-purple-cety focus-text-purple-cety p-2"';
    echo get_the_tag_list('<ul class="d-flex">' . "<li $liClass>", "</li><li $liClass>", '</li></ul>')
    ?>

</div>
<!-- end tags -->