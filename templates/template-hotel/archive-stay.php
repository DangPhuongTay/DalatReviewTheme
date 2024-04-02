<?php 
                            $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 4,
                        'product_cat'    => 'hotel'
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php 

                    	get_template_part('templates/template-hotel/item','stay');  
                    ?>
                <?php endwhile; wp_reset_postdata(); ?>