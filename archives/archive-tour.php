<?php
if (have_posts()) {
    ?>
    <div class="tour">
        <!--! banner -->
        <div class="tour__banner"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/blog-banner.png');">
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
                                                <div id="primary__dropdown--button__all" class="primary__dropdown--button"
                                                    onclick="primaryDropdown()">
                                                    <span>Tất cả danh
                                                        mục</span>
                                                    <div class="primary__dropdown--icon">
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </div>
                                                </div>
                                                <div class="primary__dropdown--content" id="primaryDropdownHidden">
                                                    <ul class="primary__dropdown--content__list"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="primary__dropdown--content__list--item" href="#">Tour
                                                                Camping Đà
                                                                Lạt</a></li>
                                                        <li><a class="primary__dropdown--content__list--item" href="#">Tour
                                                                Săn
                                                                mây</a></li>
                                                        <li><a class="primary__dropdown--content__list--item" href="#">Tour
                                                                Đà
                                                                Lạt 1
                                                                ngày</a></li>
                                                        <li><a class="primary__dropdown--content__list--item" href="#">Tour
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_zipline.png"
                            alt="tour_category_zipline">
                        <span>Trượt zipline</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_day_trips.png"
                            alt="tour_category_day_trips">
                        <span>Tour trong ngày</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_paddleboarding.png"
                            alt="tour_category_paddleboarding">
                        <span>Chèo ván</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_canyoning.png"
                            alt="tour_category_canyoning">
                        <span>Vượt thác</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_boat.png"
                            alt="tour_category_boat">
                        <span>Tour đi thuyển</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_spa_massages.png"
                            alt="tour_category_spa_massages">
                        <span>Spa & Massage</span>
                    </div>
                    <div class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_hiking.png"
                            alt="tour_category_hiking">
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

        <div class="firstProduct ">
            <div class="firstProduct__content">
                <div class="firstProduct__content--list">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="firstProduct__content--list__item">
                            <div class="firstProduct__content--list__item--wrap">
                                <a href="http://localhost/wordpress/tour/detail-tour/" class="">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct8.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div class="firstProduct__info--top__title text__overflow--main">
                                                <a href="#">
                                                    <?php

                                                    the_title();

                                                    ?>
                                                </a>
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
                                                        <span class="tagging__tag--text">
                                                            <?php the_author_posts_link(); ?>
                                                        </span>
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
                        <?php

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
get_footer(); ?>