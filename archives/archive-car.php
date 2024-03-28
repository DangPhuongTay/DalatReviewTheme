<?php
    if(have_posts()){
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
        while(have_posts()){
            the_post(  );
            ?>
            <div class="firstProduct__content--list__item col-sm-3 ">
                 <div class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="detail-car"><?php   the_title( );?></a>
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
            <?php
        }
        ?>
       </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
    }
?>