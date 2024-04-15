<?php
/**
 * Template Name: TemplateTag
 * Display Only Tag template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */

 get_header(); ?>

<div class="tour">
    <br />
    <br />
    <br />
    <div class="firstProduct ">
        <?php
        
        $s = get_search_query();
        $args = array(
            's' => $s,
            'post_type' => 'product',
            'posts_per_page' => 8,
            'paged' => $paged,
            'product_tag' => $_GET['tag']
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            ?>
            <div class="detail__tour--content__left--header">Kết quả bài viết: <?php echo $_GET['tag']; ?></div>
            <div class="firstProduct__content">
                <div class="firstProduct__content--list">
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>
                        <div class="firstProduct__content--list__item">
                            <div class="firstProduct__content--list__item--wrap">
                                <a href="<?php the_permalink(); ?>" class="firstProduct__content--list__item--wrap__link">
                                    <div class="firstProduct__img">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div class="firstProduct__info--top__title">
                                                <?php
                                                the_title();
                                                ?></p>
                                            </div>
                                            <div class="firstProduct__info--top__score">
                                                <!-- <div class="firstProduct__info--top__score--star">
                            <div class="firstProduct__info--top__score--star__icon">
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="firstProduct__info--top__score--star__number">
                                <span>4.9</span>
                            </div>
                        </div> -->
                                                <span
                                                    class="firstProduct__info--top__score--review"><?php echo $review_count = $product->get_review_count(); ?>
                                                    Bình luận</span>
                                                <!-- sep -->
                                                <!-- <div class="sep">
                            <ion-icon name="ellipse"></ion-icon>
                        </div> -->
                                                <!-- <div class="firstProduct__info--top__score--booked"> -->
                                                <!-- <span firstProduct__info--top__score--booked__number>1K+
                            Đã được đặt </span> -->
                                                <!-- </div> -->
                                                <div class="firstProduct__info--top__desc text__overflow--main">
                                                    <?php echo $product->get_short_description(); ?>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <p><?php the_tags(); ?></p>
                                                        Ban chay
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div class="firstProduct__info--bottom__content">
                                                <div class="firstProduct__info--bottom__content--box">
                                                    <div class="firstProduct__info--bottom__content--box__price">
                                                        <?php echo $product->get_price_html(); ?>
                                                    </div>
                                                </div>
                                                <!-- button policy -->
                                                <!-- <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                                    <div class="tagging__box firstProduct__info--bottom__tagging--box">
                                                        <div class="tagging__tag">
                                                            <span
                                                                class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">
                                                                Chính sách đảm bảo về giá
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->

                                </a>
                            </div>
                        </div>
                        <?php
                    }
        } else {
            ?>

                    <div class="found">
                        <h4 style='color:#000'>Không tìm thấy kết quả ?</h4>
                        <a class="found__link" href="<?php echo home_url(); ?>">Quay lại trang chủ</a>
                    </div>
                <?php } ?>

            </div>
            <?php global $loop; ?>
            <?php global $count; ?>

            <?php previous_posts_link('<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>', $loop->max_num_pages); ?></li>

            <?php

            // echo ceil($count/4);
            for ($x = 1; $x <= ceil($count / $loop->max_num_pages); $x++) {
                ?>
                <a href="<?php echo home_url(); ?>/page/<?php echo $x; ?>" class="">
                    <div class="liveshow__container--body__product--list__page--item"><?php echo $x; ?></div>
                </a>
                <?php
            }

            ?>
            <?php next_posts_link('<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>', $loop->max_num_pages) ?></li>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>