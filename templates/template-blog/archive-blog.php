
    <section class="blog">
        <div class="blog__banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-banner.png" alt="">
            <div class="blog__banner--text">
                <p>Bí kíp trải nghiệm trọn vẹn Đà Lạt</p>
                <span>Khám phá những câu chuyện, cảm hứng và ý tưởng du lịch Đà Lạt độc đáo cho chuyến vi vu tiếp theo của
                    bạn</span>
            </div>
        </div>
        <div class="blog__container">
            <div class="blog__container--new">
                <div class="blog__container--new__header">
                    <p>Bài viết mới nhất</p>
                </div>
                <div class="blog__container--new__list">
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'showposts' => 6, // số lượng bài viết
                        'cat'=>6,
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php  get_template_part('archives/items/item', 'blog' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="blog__container--bottom">
                    <div class="blog__container--bottom__left">
                        <div class="blog__container--bottom__left--header">
                            <p>Xu hướng du lịch mới nhất</p>
                        </div>
                        <div class="blog__container--bottom__left--header__list">
                        <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'showposts' => 6, // số lượng bài viết
                        'cat'=>6,
                        'tag'=>'new',
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php  get_template_part('archives/items/item', 'blognew' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>



                        </div>
                    </div>
                    <div class="blog__container--bottom__right">
                        <div class="blog__container--bottom__right--header">
                            <p>Phổ biến nhất</p>
                        </div>
                        <div class="blog__container--bottom__right--header__list">
                           
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
                    <?php  get_template_part('archives/items/item', 'bloghot' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>




                        </div>
                    </div>
                </div>

            </div>
    </section>

