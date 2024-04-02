<?php
    if(have_posts()){
        ?>
 
            <!--  -->
            <!-- Produclist -->
            <!--  -->
            <div class="liveshow__container--body__product--list">
        
            <?php 
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 10,
                        'product_cat'    => 'liveshow'
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php 

                    get_template_part('templates/template-liveshow/item', 'liveshow');  
                    ?>
                <?php endwhile; wp_reset_postdata(); ?>
        </div>

            <div class="liveshow__container--body__product--list__page">
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                <ion-icon name="chevron-back"></ion-icon>
                </div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">1</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">2</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">3</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">4</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </div>
            </a>
            </div>

            </div>
            </section>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/liveshow.js"></script>
    <?php
    }
    get_footer();?>