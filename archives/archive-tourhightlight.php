<div class="hightlightProduct__content--list">
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'showposts' => 5, // số lượng bài viết
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
	<?php 
        get_template_part('archives/items/item', 'tourhightlight');  
             ?>
<?php endwhile; wp_reset_postdata(); ?>
</div>