
<div class="fourProductList__wrapper">
        <?php
        global $paged;

            $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'paged' => $paged
                );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                get_template_part('templates/template-home/item', 'product');  
                endwhile;
            } else {
                echo __( 'No products found' );
            }
        ?>

</div>
        <div class="liveshow__container--body__product--list__page" style="align-items: center;justify-content: center;">
        
            <?php previous_posts_link( '<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>', $loop->max_num_pages) ?></li> 
            <?php next_posts_link( '                <div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>', $loop->max_num_pages) ?></li>
       
        </div>

    <?php wp_reset_postdata(); ?>
    
