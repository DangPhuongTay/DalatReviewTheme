
<div class="fourProductList__wrapper" >
        <?php
        
        global $paged;
            $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
            $args = array(
                'post_type' => 'product',
                'post_status'=>'publish',
                'posts_per_page' =>4,
                'paged' => $paged,
				'product_tag' => 'sale',
                );
            $loop = new WP_Query( $args );
            $count = $loop->found_posts;;
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                get_template_part('templates/template-home/item', 'new');
                endwhile;
            } else {
                echo __( 'No products found' );
            }
        ?>

</div>


    <?php wp_reset_postdata(); ?>
    