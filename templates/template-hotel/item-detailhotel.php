<?php global $product; ?>
<div class="detailHotel__list--body__list--wrap">
                                        <div class="detailHotel__list--body__list--wrap__name"><?php the_title(); ?></div>
                                        <div class="detailHotel__list--body__list--wrap__item">
                                            <div class="detailHotel__list--body__list--wrap__item--left"
                                                onclick="btnDetailHotelRoom()">
                                                <div class="detailHotel__list--body__list--wrap__item--left__img"
                                                    onclick="btnDetailHotelSlides()">
                                                    <div class="detailHotel__list--body__list--wrap__item--left__img--main">
                                                        <div
                                                            class="detailHotel__list--body__list--wrap__item--left__img--main__1">
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" alt="">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>

                                                <div class="detailHotel__list--body__list--wrap__item--left__popular">
                                                    <div class="detailHotel__list--body__list--wrap__item--left__popular--name">
                                                        <p><?php the_title(); ?></p>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__popular--platform__wrap">
                                                        <div
                                                            class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                            <ion-icon name="bar-chart-outline"></ion-icon>
                                                            <p>25.0 m²</p>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                            <ion-icon name="albums-outline"></ion-icon>
                                                            <p>Tầm nhìn hướng sân trong</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__popular--price">
                                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--price__amount">
                                                            Từ <div class="detailHotel__list--body__list--wrap__item--left__popular--price__format">
                                                                đ <b>20XXXX</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--left__action">
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__action--arrow__down">
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </div>
                                                </div>

                                                <div class="detailHotel__list--body__list--wrap__item--left__facility">
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                        <p>Không hút thuốc</p>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                        <p>Quạt trần</p>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                        <p>TV</p>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                        <p>Dịch vụ dọn phòng</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--right">
                                                <div class="detailHotel__list--body__list--wrap__item--right__header">
                                                    <div>Đề xuất cho bạn</div>
                                                    <div>Giá</div>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body"
                                                    onclick="btnDetailHotelPrice()">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                                        <div
                                                            class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                                            <div
                                                                class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                                                <span>1 giường queen</span>
                                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                                                <div
                                                                    class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                                                    <ion-icon name="car-sport-outline"></ion-icon>
                                                                    <span>Đỗ xe miễn phí</span>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                                                    <ion-icon name="cafe-outline"></ion-icon>
                                                                    <span>Bữa sáng miễn phí</span>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                                                    <ion-icon name="ban-outline"></ion-icon>
                                                                    <span>Không hoàn tiền</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                                            <div
                                                                class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                                                <div
                                                                    class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                                                    <div
                                                                        class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                                        <?php echo $product->get_price_html(); ?>
                                                                    </div>
                                                                    <div
                                                                        class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--tip">
                                                                        Giá 1 đêm đã bao gồm thuế
                                                                    </div>
                                                                </div>
                                                                <a class="firstBtn" <?php wc_get_template('loop/add-to-cart.php'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                             
                                                    </div>
                                                </div>
                                            </div>