<div class="hightlightProduct__content--list ">
<div class="hightlightProduct__content--wrap">
    <?php 

    $args = array(
'post_type'      => 'product',
'posts_per_page' => 5,
'product_cat'    => request()
);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php 

get_template_part('templates/template-tour/item','tourhightlight');  
?>
<?php endwhile; wp_reset_postdata(); ?>
                        </div> 
                    </div> 