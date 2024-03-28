<?php
/**
 * Template Name: TemplateMotobike
 * Display Only Motobike template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

<section class="motorbike">
        <div class="motorbike__container">
            <div class="motorbike__container--banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motorbike-banner.jpg" alt="">
               <div class="motorbike__container--banner__btn">
                <div class="motorbike__container--banner__box">
                    <div class="motorbike__container--banner__box--item">
                        <a href="motobike">
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
                    Xe máy
                </div>
                <div class="firstProduct row-max-width">
                    <div class="firstProduct__content container-fluid">
                        <div class="firstProduct__content--list row">
                            <!-- product 1 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Trải Nghiệm Canyoning
                                                    Vượt Thác Datanla</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.9</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">(
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">120
                                                    </span>)</span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 1,890,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 2,050,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- button policy -->
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 2 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Đi Xe Trượt Thác Datanla
                                                    New Alpine Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">1,485</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>50K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hoàn
                                                            tiền dễ dàng</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 245,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 3 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct3.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Da Lat Conquer Langbiang
                                                    Mountain, Datanla Waterfall Day
                                                    Tour with Optional Lumiere
                                                    Visit</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.6</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">265
                                                    </span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>3K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 450,000</span>
                                                </div>
                                            </div>
                                            <!-- button policy -->
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 4 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct4.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Tour Săn Mây và Ngắm
                                                    Bình Minh Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">142</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>2K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 400,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="firstProduct__content--list row">
                            <!-- product 5 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct5.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Trải Nghiệm Đu Dây High
                                                    Rope Course Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">407</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>10K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 460,000</span>
                                                </div>
                                            </div>
                                            <!-- button policy -->
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 6 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct6.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Trải nghiệm trượt
                                                    Zipline xuyên rừng tại Datanla
                                                    Đà Lạt </a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">57</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 1,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 7 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct7.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Tour ngày tham quan
                                                    ngoại ô Đà Lạt với tuỳ chọn tham
                                                    quan Vườn ánh sáng Lumiere Đà
                                                    Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">93</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 550,000</span>
                                                </div>
                                            </div>
                                            <!-- button policy -->
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product 8 -->
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct8.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car">Tour Nửa Ngày Chèo SUP
                                                    Trên Hồ Tuyền Lâm</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">39</span>
                                                    )
                                                </span>
                                                <!-- sep -->
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <!-- tag -->
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bottom -->
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 500,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 540,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer();?>