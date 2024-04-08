
        <?php
            global $paged;

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            function request() {
                global $wp;
                $url = $wp->request;
                $requesturl = explode("/",  $url);
                return $requesturl[0];
            }
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 1,
                'paged' => $paged,
                'product_cat' => request()
                );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                
                while ( $loop->have_posts() ) : $loop->the_post();
               
                get_template_part('templates/template-liveshow/item', 'liveshow');
                endwhile;
            } else {
                echo __( 'No products found' );
            }
        ?></div>
        <div class="liveshow__container--body__product--list__page" style="align-items: center;justify-content: center;">
        
            <?php previous_posts_link( '<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>', $loop->max_num_pages) ?></li> 
            <?php next_posts_link( '                <div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>', $loop->max_num_pages) ?></li>
       
        </div>
        <?php wc_get_template('loop/pagination.php'); ?> 
    <?php wp_reset_postdata(); ?>
            