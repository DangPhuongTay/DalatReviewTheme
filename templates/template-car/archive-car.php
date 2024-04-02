<?php
if (have_posts()) {
    ?>
    <section class="motorbike">
        <div class="motorbike__container">
            <div class="motorbike__container--banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motorbike-banner.jpg" alt="">
                <div class="motorbike__container--banner__btn">
                    <div class="motorbike__container--banner__box">
                        <div class="motorbike__container--banner__box--item">
                            <a href="motorbike">
                                <ion-icon name="bicycle-outline"></ion-icon>
                                <span>Xe máy</span>
                            </a>
                        </div>
                        <div class="motorbike__container--banner__box--item">
                            <a href="car">
                                <ion-icon name="car-outline"></ion-icon>
                                <span>Xe Ôto</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="motorbike__container--content">
                <div class="motorbike__container--header">
                    Xe Ô tô
                </div>
                <div class="firstProduct row-max-width">
                    <div class="firstProduct__content container-fluid">
                        <div class="firstProduct__content--list row">
                            <?php
                            $args = array(
                                'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                                'showposts' => 12, // số lượng bài viết
                            );
                            ?>
                            <?php $getposts = new WP_query($args); ?>
                            <?php global $wp_query;
                            $wp_query->in_the_loop = true; ?>

                            <?php while ($getposts->have_posts()):
                                $getposts->the_post(); ?>
                                <?php
                                get_template_part('templates/template-car/item', 'car');
                                ?>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
}
?>