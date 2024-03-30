<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <section class="detail__liveshow">
            <div class="detail__liveshow--ticket__box">
                <div class="detail__liveshow--ticket">
                    <div class="detail__liveshow--ticket__left">
                        <div class="detail__liveshow--ticket__left--top">
                            <div class="detail__liveshow--ticket__left--title">
                                <?php the_title(); ?>
                            </div>
                            <div class="detail__liveshow--ticket__left--time">
                                <ion-icon name="calendar-clear-outline"></ion-icon>
                                <p>17:15 - 19:15, 16 Mar, 2024 </p>
                            </div>
                            <div class="detail__liveshow--ticket__left--local">
                                <ion-icon name="location-outline"></ion-icon>
                                <p>
                                    <span>Lululola Coffee</span>
                                    <span>Đường 3/4, Đồi Cà Ri Dê, Phường 3, Thành Phố Đà Lạt, Tỉnh Lâm Đồng</span>
                                </p>
                            </div>
                        </div>

                        <div class="detail__liveshow--ticker__left--bottom">
                            <div class="detail__liveshow--ticket__left--price">
                                <p><span class="numberVnd">500000</span></p>
                            </div>
                            <!-- <div class="detail__liveshow--ticket__left--btn">
                            MUA NGAY
                        </div> -->
                        </div>
                    </div>
                    <div class="detail__liveshow--ticket__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/liveshow_ticker.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="detail__liveshow--container">
                <div class="detail__liveshow--content">
                    <div class="detail__liveshow--content__left shadow">
                        <div class="detail__liveshow--content__left--header">
                            Mô tả
                        </div>
                        <div class="detail__liveshow--content__left--body">
                            <h4>Liveshow Bằng Kiều | CƠN MƯA BĂNG GIÁ</h4>
                            <p class="detail__liveshow--content__left--body__text--1">Lululola Show - Hơn cả âm nhạc, không gian
                                lãng mạn đậm chất thơ Đà Lạt bao trọn hình ảnh thung lũng Đà Lạt, được ngắm nhìn khoảng khắc
                                hoàng hôn thơ mộng đến khi Đà Lạt về đêm siêu lãng mạn, được giao lưu với thần tượng một cách
                                chân thật và gần gũi nhất trong không gian ấm áp và không khí se lạnh của Đà Lạt. Tất cả sẽ mang
                                đến một đêm nhạc ấn tượng mà bạn không thể quên khi đến với Đà Lạt.</p>
                            <h5>Qúy Khách sẽ được Lululola gửi thông tin số ghế và xác nhận đặt chỗ thành công!</h5>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail_liveshow_1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail_liveshow_2.jpg" alt="">
                        </div>
                    </div>
                    <div class="detail__liveshow--content__right shadow">
                        <div class="detail__liveshow--content__left--header">
                            Danh sách vé
                        </div>
                        <div class="detail__liveshow--content__right--list">
                            <div class="detail__liveshow--content__right--item">
                                <a href="checkout-tour.html">
                                    <div class="detail__liveshow--content__right--item__name">
                                        NHÁ NHEM
                                    </div>
                                    <div class="detail__liveshow--content__right--item__price">
                                        <span>đ</span> <span>500000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="detail__liveshow--content__right--item">
                                <a href="checkout-tour.html">
                                    <div class="detail__liveshow--content__right--item__name">
                                        CHẬP CHOẠNG
                                    </div>
                                    <div class="detail__liveshow--content__right--item__price">
                                        <span>đ</span> <span>600000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="detail__liveshow--content__right--item">
                                <a href="checkout-tour.html">
                                    <div class="detail__liveshow--content__right--item__name">
                                        CHẠNG VẠNG
                                    </div>
                                    <div class="detail__liveshow--content__right--item__price">
                                        <span>đ</span> <span>900000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="detail__liveshow--content__right--item">
                                <a href="checkout-tour.html">
                                    <div class="detail__liveshow--content__right--item__name">
                                        CHIỀU TÀ
                                    </div>
                                    <div class="detail__liveshow--content__right--item__price">
                                        <span>đ</span> <span>1300000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php

    }
}
get_footer();?>