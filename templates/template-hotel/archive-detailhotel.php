
<?php 
                     function request() {
                        global $wp;
                        $url = $wp->request;
                        $requesturl = explode("/",  $url);
                        return $requesturl[3];
                    }
                    
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 6,
                        'product_tag' => request()
                        );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php 
                    
                    get_template_part('templates/template-hotel/item','detailhotel');  
                    ?>
                <?php endwhile; wp_reset_postdata(); ?>