<?php
    /**
     * Template Name: TemplateTour
     * Display Only Tour template
     * 
     * @package WordPress
     * @subpackage eminent
     * @since eminent 1.0
     * 
     */
    get_header();?>
    
    <div class="tour">
        <!--! banner -->
        <div class="tour__banner">
            <div class="tour__banner--background">
                <img src="https://images.unsplash.com/photo-1564396738239-351774a1a50e?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/>
            </div>
            <div class="tour__banner--wrap ">
                <div class="tour__banner--heading">
                    <h1>Tour & Trải nghiệm</h1>
                    <h2>Tour du lịch, trải nghiệm khám phá và hơn thế
                        nữa</p>
                </div>
                <div class="tour__banner--search">
                    <div class="tour__banner--search__icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <div class="tour__banner--search__input">
                        <input placeholder="Tìm kiếm" type="text">
                    </div>
                </div>
            </div>
        </div>
        <!--! filter -->
        <div class="search__filter">
            <div class="search__filter--wrap ">

                <!-- filter left-->
                <div class="search__filter--left">
                    <div class="quick__filter--entry">
                        <div class="quick__filter--entry__wrapper">
                            <div class="quick__filter--entry__content">
                                <div class="quick__filter--entry__content--left">
                                    <div class="fliter__category">
                                        <div class="fliter__category--content ">
                                            <div class="primary__dropdown">
                                                <div id="primary__dropdown--button__all"
                                                    class="primary__dropdown--button" onclick="primaryDropdown()">
                                                    <span>Tất cả danh
                                                        mục</span>
                                                    <div class="primary__dropdown--icon">
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </div>
                                                </div>
                                                <div class="primary__dropdown--content" id="primaryDropdownHidden">
                                                    <ul class="primary__dropdown--content__list"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="primary__dropdown--content__list--item"
                                                                href="#">Tour
                                                                Camping Đà
                                                                Lạt</a></li>
                                                        <li><a class="primary__dropdown--content__list--item"
                                                                href="#">Tour
                                                                Săn
                                                                mây</a></li>
                                                        <li><a class="primary__dropdown--content__list--item"
                                                                href="#">Tour
                                                                Đà
                                                                Lạt 1
                                                                ngày</a></li>
                                                        <li><a class="primary__dropdown--content__list--item"
                                                                href="#">Tour
                                                                Theo Tự
                                                                Chọn</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="fliter__category--content__box">
                                                <div class="fliter__category--content__box--item">
                                                    <a>Tour Camping</a>
                                                </div>
                                                <div class="fliter__category--content__box--item">
                                                    <a>Tour Săn Mây</a>
                                                </div>
                                                <div class="fliter__category--content__box--item">
                                                    <a>Tour Đà Lạt 1
                                                        ngày</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="gap"></div>
                                <div class="quick__filter--entry__content--right">
                                    <div class="filter__date primary__dropdown--button">
                                        <span>Ngày tham gia</span>
                                        <div class="primary__dropdown--icon">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="filter__price primary__dropdown--button">
                                        <span>Lọc theo giá</span>
                                        <div class="primary__dropdown--icon">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter right-->
                <div class="search__filter--right">
                    <div class="total__filter">
                        <div class="total__filter--btn">
                            <div class="total__filter--btn__icon">
                                <ion-icon name="filter-outline"></ion-icon>
                            </div>
                            <div class="total__filter--btn__text">
                                <span>Lọc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- filter mobile -->
        <div class="tourMobile__category">
            <div class="tourMobile__categoryTop">
                <div class="tourMobile__category--list">
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_zipline.png" alt="tour_category_zipline">
                        <span>Trượt zipline</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_day_trips.png" alt="tour_category_day_trips">
                        <span>Tour trong ngày</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_paddleboarding.png" alt="tour_category_paddleboarding">
                        <span>Chèo ván</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_canyoning.png" alt="tour_category_canyoning">
                        <span>Vượt thác</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_boat.png" alt="tour_category_boat">
                        <span>Tour đi thuyển</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_spa_massages.png" alt="tour_category_spa_massages">
                        <span>Spa & Massage</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_hiking.png" alt="tour_category_hiking">
                        <span>Đi bộ leo núi</span>
                    </div>
                </div>
            </div>
            <div class="tourMobile__categoryBot">
                <div class="tourMobile__category--list">
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Hướng dẫn tiếng Việt</span>
                    </div>
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Tour riêng</span>
                    </div>
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Hoàn tiền dễ dàng</span>
                    </div>
                </div>
            </div>
        </div>

        <!--! calendarFilter -->

        <!-- <div class="calendarFilter" id="calendar">
            <div class="calendarFilter__header" id="calendar_header">
                <i class="icon-chevron-left"></i>
                <h1></h1>
                <i class="icon-chevron-right"></i>
            </div>
            <div class="calendarFilter__weekdays" id="calendar_weekdays"></div>
            <div class="calendarFilter__header" id="calendar_content"></div>
        </div> -->

        <!--! firstProduct -->
        <!-- ==============================================
            Name: First Product, fix Filter Tour
            Creact by: Ngọc Ánh
            Creact at: 11AM 29/1/2024
            Update: 11AM 30/1/2024
        ============================================== -->
        <div class="firstProduct ">
            <div class="firstProduct__content">
                <div class="firstProduct__content--list">
                    <!-- product 1 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/y9w45f2fdciamxyq5evf.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Trải Nghiệm Canyoning
                                                Vượt Thác Datanla</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(120)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <!-- <div class="firstProduct__info--top__score--booked"> -->
                                                <span firstProduct__info--top__score--booked__number>1K+
                                                    Đã được đặt </span>
                                            <!-- </div> -->
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--box">
                                                <div class="firstProduct__info--bottom__content--box__price">
                                                    <span>đ 1,890,000</span>
                                                </div>
                                                <div class="firstProduct__info--bottom__content--box__underline">
                                                    <span>đ 2,050,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
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
                            </a>
                        </div>
                    </div>
                    <!-- product 2 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/mojun2m7vaw077wezsmk.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Đi Xe Trượt Thác Datanla
                                                New Alpine Tại Đà Lạt</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.5</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(1,485)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>50K+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Bán
                                                        chạy</span>
                                                </div>
                                            </div>
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hoàn
                                                        tiền dễ dàng</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 245,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- product 3 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/l4jrbacjzyolkmfoyo8b.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Da Lat Conquer Langbiang
                                                Mountain, Datanla Waterfall Day
                                                Tour with Optional Lumiere
                                                Visit</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.6</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(265)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>3K+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 450,000</span>
                                            </div>
                                        </div>
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
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
                            </a>
                        </div>
                    </div>
                    <!-- product 4 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/frzsur7oxieqgcwas8ye.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Tour Săn Mây và Ngắm
                                                Bình Minh Tại Đà Lạt</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.5</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(142)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>2K+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 400,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- product 5 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/wynnuw3jo4mrplnikmte.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Trải Nghiệm Đu Dây High
                                                Rope Course Đà Lạt</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.8</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(407)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>10K+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Bán
                                                        chạy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 460,000</span>
                                            </div>
                                        </div>
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
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
                            </a>
                        </div>
                    </div>
                    <!-- product 6 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/qd1kivxxxswwf3pk6b6d.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Trải nghiệm trượt
                                                Zipline xuyên rừng tại Datanla
                                                Đà Lạt </p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.7</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(57)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>1K+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 1,000,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- product 7 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/qrvf88r06ig3p32id8mv.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Tour ngày tham quan
                                                ngoại ô Đà Lạt với tuỳ chọn tham
                                                quan Vườn ánh sáng Lumiere Đà
                                                Lạt</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.7</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(93)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>800+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--price">
                                                <span>đ 550,000</span>
                                            </div>
                                        </div>
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
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
                            </a>
                        </div>
                    </div>
                    <!-- product 8 -->
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="../page/detail_tour.html" class="">
                                <div class="firstProduct__img">
                                    <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/lwue1aksi3curh36bn2h.webp" alt="tourProduct">
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <p>Tour Nửa Ngày Chèo SUP
                                                Trên Hồ Tuyền Lâm</p>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.8</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(39)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <div class="firstProduct__info--top__score--booked">
                                                <span firstProduct__info--top__score--booked__number>800+
                                                    Đã được đặt </span>
                                            </div>
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--box">
                                                <div class="firstProduct__info--bottom__content--box__price">
                                                    <span>đ 500,000</span>
                                                </div>
                                                <div class="firstProduct__info--bottom__content--box__underline">
                                                    <span>đ 540,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--! breakCrumb -->
        <!-- ==============================================
            Name: First Product, fix Filter Tour
            Creact by: Ngọc Ánh
            Creact at: 11:30AM 30/1/2024
            Update: 
        ============================================== -->
        <div class="breakCrumb ">
            <div class="breakCrumb__list">
                <a href="#" class="breakCrumb__list--item">Trang chủ</a>
                <ion-icon name="chevron-forward-outline"></ion-icon>
                <a href="#" class="breakCrumb__list--item">Đà Lạt</a>
                <ion-icon name="chevron-forward-outline"></ion-icon>
                <a href="#" class="breakCrumb__list--item">Tour & Trải
                    nghiệm</a>
            </div>
        </div>
        <!--! firstReview -->
        <!-- ==============================================
            Name: First Product, fix Filter Tour
            Creact by: Ngọc Ánh
            Creact at: 1:45PM 30/1/2024
            Update: 
        ============================================== -->
        <div class="firstReview ">
            <h2 class="tour__Title">
                Mọi người nói gì về Tour & Trải nghiệm ở Đà Lạt
            </h2>
            <div class="firstReview__card container-fluid">
                <div class="firstReview__card">
                    <div class="firstReview__card--item ">
                        <div class="scoreStar">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <div class="firstReview__for">
                            <span>Đánh giá cho: </span>
                            <a href="../page/detail_tour.html">Đi Xe Trượt Thác Datanla New Alpine
                                Tại
                                Đà Lạt</a>
                        </div>
                        <div class="firstReview__time">
                            <span>Người dùng</span>
                            Đăng 229 ngày trước
                        </div>
                        <div class="firstReview__content">
                            Đặt hàng qua Đà Lạt Review tiết kiệm được chi
                            phí vì có chương trình giảm giá. mọi người nhớ
                            đổi ra vé giấy rồi hãy vào xếp hàng để lên xe
                            trượt nhé.
                        </div>
                    </div>
                    <div class="firstReview__card--item ">
                        <div class="scoreStar">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <div class="firstReview__for">
                            <span>Đánh giá cho: </span>
                            <a href="../page/detail_tour.html">Trải Nghiệm Đu Dây High Rope Course
                                Đà Lạt</a>
                        </div>
                        <div class="firstReview__time">
                            <span>Người dùng</span>
                            Đăng 20 ngày trước
                        </div>
                        <div class="firstReview__content">
                            Đường trượt mới rất đã, cảm giác an toàn hơn.
                            Trải nghiệm high rope cũng rất tuyệt.
                        </div>
                    </div>
                </div>
                <!-- nextBtn -->
                <!-- <div class="nextBtn">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div> -->
            </div>

        </div>
        <!--! hightlightProduct -->

        <div class="hightlightProduct ">
            <div class="hightlightProduct__wrap">
                <h2 class="tour__Title">
                    Xu Hướng
                </h2>
                <div class="hightlightProduct__content">
                    <div class="hightlightProduct__content--wrap">
                        <div class="hightlightProduct__content--list d-flex align-items-center">
                            <div class="hightlightProduct__content--list__item">
                                <div class="hightlightProduct__content--list__item--wrap">
                                    <div class="hightlightProduct__img">
                                        <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/rkfj4bj4rtumbodna0fn.webp">
                                    </div>
                                    <div class="hightlightProduct__title text__overflow--main">
                                        <a href="#" class="hightlightProduct__link">Tour
                                            Phiêu Lưu Đi Trek Núi Langbiang Ở Đà
                                            Lạt</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hightlightProduct__content--list__item">
                                <div class="hightlightProduct__content--list__item--wrap">
                                    <div class="hightlightProduct__img">
                                        <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/d9mo5nwefjf9cpbspqh7.webp">
                                    </div>
                                    <div class="hightlightProduct__title text__overflow--main">
                                        <a href="#" class="hightlightProduct__link">Tour
                                            Tour ngày tham quan ZooDoo với tuỳ chọn tham quan Vườn ánh sáng Lumiere Đà Lạt </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hightlightProduct__content--list__item">
                                <div class="hightlightProduct__content--list__item--wrap">
                                    <div class="hightlightProduct__img">
                                        <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/rkfj4bj4rtumbodna0fn.webp">
                                    </div>
                                    <div class="hightlightProduct__title text__overflow--main">
                                        <a href="#" class="hightlightProduct__link">Tour
                                            Phiêu Lưu Đi Trek Núi Langbiang Ở Đà
                                            Lạt</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hightlightProduct__content--list__item">
                                <div class="hightlightProduct__content--list__item--wrap">
                                    <div class="hightlightProduct__img">
                                        <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/rkfj4bj4rtumbodna0fn.webp">
                                    </div>
                                    <div class="hightlightProduct__title text__overflow--main">
                                        <a href="#" class="hightlightProduct__link">Tour
                                            Phiêu Lưu Đi Trek Núi Langbiang Ở Đà
                                            Lạt</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hightlightProduct__content--list__item">
                                <div class="hightlightProduct__content--list__item--wrap">
                                    <div class="hightlightProduct__img">
                                        <img src="https://res.klook.com/image/upload/c_fill,w_550,h_308/fl_lossy.progressive,q_85/q_85/activities/rkfj4bj4rtumbodna0fn.webp">
                                    </div>
                                    <div class="hightlightProduct__title text__overflow--main">
                                        <a href="#" class="hightlightProduct__link">Tour
                                            Phiêu Lưu Đi Trek Núi Langbiang Ở Đà
                                            Lạt</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nextBtn -->
                        <!-- <div class="nextBtn">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>