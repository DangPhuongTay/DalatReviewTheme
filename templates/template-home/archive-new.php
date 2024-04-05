<div class="fourProductList__wrapper">
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được public
		'showposts' => 4, // số lượng bài viết
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
	<?php 
             get_template_part('templates/template-home/item', 'new');  
             ?>
<?php endwhile; wp_reset_postdata(); ?>
</div>  