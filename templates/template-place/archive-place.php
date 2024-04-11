
<div class="hotel__right--item">
<?php
    global $paged;

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            add_filter( 'woocommerce_catalog_orderby', 'swat_sort_by_title' );

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
            }elseif (isset($_GET['minprice']) && isset($_GET['maxprice'])) {

                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' =>8,
                    'paged' => $paged,
                    'product_cat' => request(),
                    'meta_query' => array( 
                        'relation' => 'AND',
                            array(
                                    'key'       => '_price',
                                    'compare'   => '<=',
                                    'type'    => 'numeric',
                                    'value'     => $_GET['maxprice'],
                            ),
                            array(
                                'key'       => '_price',
                                'compare'   => '>=',
                                'type'    => 'numeric',
                                'value'     => $_GET['minprice'],
                            ),
           
                            
                     ),
                    );
                } elseif (isset($_GET['pricehight'])) {
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' =>8,
                        'paged' => $paged,
                        'product_cat' => request(),
                        'meta_query' => array( 
                            'relation' => 'AND',
                                array(
                                        'key'       => '_price',
                                        'compare'   => '>=',
                                        'type'    => 'numeric',
                                        'value'     => $_GET['pricehight'],
                                ),));
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
               
                get_template_part('templates/template-place/item', 'place');
                endwhile;
            } else {
                echo __( 'Không có sản phẩm nào' );
            }
        ?>
</div>

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
            