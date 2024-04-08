<?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'showposts' => 6, // số lượng bài viết
                        'cat'=>6,
                        'tag'=>'hot',
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php  get_template_part('templates/template-blog/item', 'bloghot');?>
                <?php endwhile; wp_reset_postdata(); ?>
