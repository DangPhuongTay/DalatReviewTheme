
<div class="fourProductList__wrapper">
<?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, ); ?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	<?php get_template_part('templates/template-home/item', 'product');  ?>
<?php endwhile; wp_reset_postdata(); ?>
</div>  