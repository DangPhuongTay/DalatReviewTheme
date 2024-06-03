<?php

    $args = array(
        'post_type' => 'slide', 
        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
    );
?>
<div class="home__slider--item__image">
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php
  the_content();
?>
<?php endwhile; wp_reset_postdata(); ?>
</div>
