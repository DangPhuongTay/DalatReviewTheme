<?php
$url = $wp->request;
$requesturl = explode("/", $url);

$args = array(
    'post_type' => 'product',
    'post_status'=>'publish',
    'posts_per_page' => 10,
    'product_cat' => $requesturl[1]
);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query;
$wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()): $getposts->the_post(); ?>
<?php get_template_part('templates/template-tour/item', 'detailticket'); ?>
<?php endwhile; wp_reset_postdata(); ?>