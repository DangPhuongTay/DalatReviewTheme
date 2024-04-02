
<div class="detail__car--container__list">
    <?php 
    function request() {
        global $wp;
        $current_url = trailingslashit(home_url($wp->request));
        return $wp->request;
    }
    $args = array(
'post_type'      => 'product',
'posts_per_page' => 10,
'product_cat'    => 'motobike'
);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php 

get_template_part('templates/template-motobike/item','motobike');  
?>
<?php endwhile; wp_reset_postdata(); ?>

</div>