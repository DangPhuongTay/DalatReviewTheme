
        <?php
            global $paged;

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            if (isset($_GET['price'])) {
                $variable = $_GET['price'];
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' =>8,
                    'paged' => $paged,
                    'product_cat' => request(),
                    'orderby'=>'price',
                    'order'=>$variable,
                    );
            }else {
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' =>8,
                    'paged' => $paged,
                    'product_cat' => request(),
                    
                    ); 
            }
            $loop = new WP_Query( $args );
            $count = $loop->found_posts;;
            if ( $loop->have_posts() ) {
                
                while ( $loop->have_posts() ) : $loop->the_post();
               
                get_template_part('templates/template-liveshow/item', 'liveshow');
                endwhile;
            } else {
                echo __( 'No products found' );
            }
        ?></div>
        <div class="liveshow__container--body__product--list__page" style="align-items: center;justify-content: end;">
        
        <?php previous_posts_link( '<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>', $loop->max_num_pages); ?> 
            <?php 
            
            for ($x = 1; $x <= $loop->max_num_pages; $x++) {
                ?>
                    <a href="<?php echo home_url();?>/<?php echo request(); ?>/page/<?php echo $x; ?>/" class="">
                        <div class="liveshow__container--body__product--list__page--item"><?php echo $x; ?></div>
                    </a>    
                <?php
            }
            
            ?>
            <?php next_posts_link( ' <div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>', $loop->max_num_pages) ?>
       
        </div>
    <?php wp_reset_postdata(); ?>
            