<div class="home__sale--banner__container--list">
<?php 
	$args = array(
		'post_type' => 'sale', 
		'post_status' => 'publish', 
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
	<?php 
	get_template_part('templates/template-home/item', 'voucher' );
             ?>
<?php endwhile; wp_reset_postdata(); ?>
</div>