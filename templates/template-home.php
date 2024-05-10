<?php
/**
 * Template Name: TemplateHome
 * Display Only home template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */

get_header(); ?>

<section class="home">
    <!-- home header -->
    <div class="header__content--bottom shadow">
        <?php wc_get_template('menudesktop.php'); ?>
    </div>
    <!-- slider home -->
    <div class="home__slider">

        <div class="home__slider--show">
            <div class="home__slider--list__images">
                <?php get_template_part('templates/template-home/slider', 'banner'); ?>
            </div>
            <div class="home__slider--btns">
                <div class="home__slider--btn__left btn-slider"><ion-icon name="chevron-back"></ion-icon></div>
                <div class="home__slider--btn__right btn-slider"><ion-icon name="chevron-forward"></ion-icon></div>
            </div>
            <div class="home__slider--contents">
                <p class="home__slider--content__title">đà lạt trọn niềm vui</p>
                <p class="home__slider--content__des">Khám phá niềm vui của bạn mọi lúc, mọi nơi - từ chuyến du lịch
                    ngẫu hứng tới những cuộc phiêu lưu khắp thế giới</p>
                <div class="home__slider--searchbox">
                        <?php wc_get_template('templates/template-search/searchhome.php'); ?>
                </div>
            </div>
           </div>
                </div>
            </div>
        </div>

    </div>
    <!-- banner & box search mobile home -->
    <div class="home__banner--search__mobile">
        <div class="home__banner--search__mobile--box">
            <?php wc_get_template('templates/template-search/search-home-mobile.php'); ?>

            <div class="home__banner--mobile">

                <?php wc_get_template('templates/template-home/banner-mobile.php'); ?>

                <a href="#" class="home__banner--mobile__bottom" onclick="mobileMenu()">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-all-category.png"
                        alt="img">
                    <span>Tất cả các mục</span>
                </a>
            </div>
        </div>
    </div>
    <!-- home sale banner -->
    <div class="home__sale--banner">
        <div class="home__sale--banner__container">
            <div class="home__sale--banner__container--header">
                <p>Ưu đãi hấp dẫn</p>
              <?php ?>
            </div>


            <?php get_template_part('templates/template-home/archive', 'voucher'); ?>

        </div>
    </div>
    <!-- home info banner -->
    <div class="home__info--banner">
        <div class="home__info--banner__container">
            <div class="home__info--banner__container--header">
                <p>Vì sao bạn nên chọn Đà Lạt Review</p>
            </div>
            <div class="home__info--banner__container--list">
            <?php 
                    $args = array(
                        'post_type' => 'bannerinf', 
                        'post_status' => 'publish', 
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="home__info--banner__container--list__item">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
                    <p><?php the_title(); ?></p>
                    <span><?php the_content(); ?></span>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>


            </div>
        </div>
    </div>
    <!-- home contact banner -->
    <?php wc_get_template('templates/template-home/home-contact.php'); ?>
    <!-- home product hot banner -->
    <div class="home__product--banner__hot">
        <div class="home__product--banner__container">
            <div class="home__product--banner__container--header">
                <p>Sản phẩm nổi bật</p>
            </div>
            <?php
            get_template_part('templates/template-home/archive', 'new'); ?>
        </div>

    </div>


    <div class="firstTag__internal--desktop">
        <div class="firstTag__internal--wrap">
            <!-- <h2 class="firstTag__internal--title">Khám phá thêm trên Đà Lạt Review !</h2> -->

            <!-- module-banner -->
            <!-- <div class="firstTag__internal--content">

                <h3 class="firstTag__internal--header">
                    Trải nghiệm tuyệt vời tại Đà Lạt
                </h3> -->
                <?php
                get_template_part('templates/template-home/first', 'tag'); ?>

            <!-- </div> -->
        </div>
    </div>

    <?php wc_get_template('templates/template-home/home-firstTagMobile.php'); ?>

</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<?php get_footer(); ?>