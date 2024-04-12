<?php
/**
 * Template Name: TemplateUserBooking
 * Display Only UserBooking template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

<div class="user__center--container__desktop">
    <div class="user__center--box">
        <a class="fill__more--info" href="user-setting-log">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_location.png" alt="">
            <span>Thêm quốc gia/khu vực của bạn để nhận đề xuất tốt hơn</span>
            <ion-icon name="chevron-forward-outline" class="user__profile--icon"></ion-icon>
        </a>
        <div class="user__center--sidebar__wrapper ">
            <div class="user__center--sidebar">
                <div class="user__center--sidebar__box">
                    <div class="user__center--sidebar__profile">
                        <div class="user__center--sidebar__profile--avatar__cover">
                            <img class="user__center--sidebar__profile--avatar"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                            <div class="user__center--sidebar__profile--name">NGƯỜI DÙNG ĐL REVIEW</div>
                        </div>
                        <a onclick="primaryDropdown()" href="user-setting-log"
                            class="user__center--sidebar__profile--changer">
                            <div class="user__changer">Chỉnh sửa</div>
                            <div class="user__changer--icon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </a>
                        <div class="user__center--rewardsUser">
                            <div class="user__center--rewardsUser__logo">

                            </div>
                            <div class="user__center--rewardsUser__ranked">
                                <div class="user__center--rewardsUser__ranked--level">
                                    lv1
                                </div>
                                <div class="user__center--rewardsUser__ranked--name">
                                    Bạc
                                </div>
                            </div>
                            <div class="user__center--rewardsUser__seeMore">
                                <div>Xem ưu đãi thành viên </div>
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </div>



                    <div class="user__center--sidebar__preferential--wrapper">

                        <div class="user__center--sidebar__preferential">

                            <div class="user__content--link">
                                <a class="user__module--link" href="user-voucher">
                                    <ion-icon name="pricetags-outline"></ion-icon>
                                    <span>Mã ưu đãi</span>
                                    <!--  -->
                                    <span class="user__num--count">3</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-credit">
                                    <ion-icon name="diamond-outline"></ion-icon>
                                    <span>DLR credit</span>
                                    <!--  -->
                                    <span class="user__num--count">0</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-giftcard">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                    <span>Phiếu quà tặng</span>
                                </a>
                            </div>
                        </div>


                        <div class="user__center--sidebar__preferential">
                            <div class="user__content--link">
                                <a class="user__module--link user__focus" href="user-booking">
                                    <ion-icon name="file-tray-full-outline"></ion-icon>
                                    <span>Đơn hàng</span>

                                </a>
                            </div>
                            <!-- <div class="user__content--link">
                                    <a class="user__module--link" href="">
                                        <ion-icon name="journal-outline"></ion-icon>
                                        <span>Quản lý phương thức thanh toán</span>

                                    </a>
                                </div>

                                <div class="user__content--link">
                                    <a class="user__module--link" href="">
                                        <ion-icon name="bicycle-outline"></ion-icon>
                                        <span>Quản lý thông tin giao hàng</span>

                                    </a>
                                </div> -->

                            <div class="user__content--link">
                                <a class="user__module--link" href="http://localhost/wordpress/user-wishlist">
                                    <ion-icon name="heart-outline"></ion-icon>
                                    <span>Yêu thích </span>

                                </a>
                            </div>

                        </div>

                        <div class="user__center--sidebar__preferential">
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-setting-log">
                                    <ion-icon name="id-card-outline"></ion-icon>
                                    <span>Quản lý đăng nhập</span>

                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-setting-pass">
                                    <ion-icon name="settings-outline"></ion-icon>
                                    <span>Cài đặt</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="user__center--sidebar__invite">
                    <a class="user__module--invite__link" href="">
                        <div class="user__invite--title">Mời bạn bè</div>
                        <div class="user__invite--desc">Nhận 100.000đ khi mời bạn bè sử dụng</div>
                        <div class="user__invite--btn">Xem chi tiết</div>
                    </a>
                </div>
            </div>
            <div class="user__booking--container__wrapper">
                <div class="user__booking--container">
                    <h4 class="user__booking--container__page">Đơn hàng</h4>
                    <div class="user__booking--container__icon">
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </div>
                <div class="user__booking--content__empty">
                    <div class="user__booking--content__empty--panel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_empty_cart.webp" alt=""
                            srcset="">
                        <h3 class="user__booking--content__title">Chưa có đơn hàng !</h3>
                        <div class="user__booking--content__desc">
                            Bạn cần chút gợi ý? Xem qua vài dịch vụ hấp dẫn bên dưới.
                        </div>
                    </div>
                </div>

                <!-- khu vực hiển thị các dịch vụ phổ biến   -->
                <div class="user__booking--popular__zone">
                    <h3 class="user__booking--popular__title">Hoạt động nên thử</h3>
                    <div class="user__booking--popular__wrapper">
                        <!-- nút chuyển các items  -->
                        <div class="user__booking--popular__btn user__left--btn">
                            <ion-icon name="caret-back-outline"></ion-icon>
                        </div>

                        <!-- hiển thị 3 items  -->
                        <div class="user__booking--popular__container">
                            <div class="user__booking--popular__slide--banner">

                                <!-- thẻ thứ nhất  -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- thẻ thứ 2  -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- thẻ thứ 3  -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- thẻ 4  -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- thẻ 5  -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- thẻ 6 -->
                                <div class="user__booking--popular__slide--items__wrapper">
                                    <div class="user__booking--popular__slide--items">
                                        <div class="user__booking--popular__slide--image">
                                            <img src="https://res.klook.com/image/upload/activities/yf9jzfbou3qoijdqfcpm.webp"
                                                alt="">
                                        </div>

                                        <div class="user__booking--popular__slide--tour">
                                            <div class="user__booking--popular__slide--tour__name">
                                                Tour Ngày Khu Di Tích Địa Đạo Củ Chi & Đồng Bằng Sông Cửu Long từ
                                                TP. Hồ
                                                Chí Minh
                                            </div>
                                            <div class="user__booking--popular__slide--tour__inf">
                                                <div class="user__booking--popular__slide--tour__rate">
                                                    ★ 4.8
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    (1,227)
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    •
                                                </div>
                                                <div class="user__booking--popular__slide--tour__detail">
                                                    10K+ Đã được đặt
                                                </div>
                                            </div>
                                            <div class="user__booking--popular__slide--tour__tag">
                                                <div class="user__booking--popular__slide--tour__tag--item">Bán chạy
                                                </div>
                                                <div class="user__booking--popular__slide--tour__tag--item">Hoàn
                                                    tiền dễ
                                                    dàng
                                                </div>
                                            </div>

                                        </div>
                                        <div class="user__booking--popular__slide--tour__price">
                                            <div class="user__booking--popular__slide--tour__price--detail">
                                                Từ <strong>₫ 1,434,291</strong>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="user__booking--popular__btn user__right--btn">
                            <ion-icon name="caret-forward-outline"></ion-icon>
                        </div>
                    </div>



                    <!-- nút xem thêm  -->
                    <div class="user__bookinglist--viewmore">
                        <!-- chèn link ở đây !!  -->
                        <a href="tour"></a>
                        <button class="user__bookinglist--viewmore__btn">Xem thêm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mbUser__bookinglist--content__dropdown--list">
    <div><span>Đơn hàng</span></div>
    <div><span>
            Đã hết hạn thanh toán
        </span></div>
    <div><span>
            Đơn hàng đã bỏ
        </span></div>
</div>
<!-- responsive mobile -->
<div class="mbUser__container">
    <div class="mbUser__bookinglist">
        <div class="mbUser__bookinglist--title">Đơn hàng</div>
        <!--  -->
        <div class="mbUser__bookinglist--content">
            <div class="mbUser__bookinglist--content__dropdown" onclick="btnUserBookingDropDown()">
                <h4 class="mbUser__bookinglist--content__dropdown--btn">
                    Đơn hàng
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </h4>
            </div>
            <div class="mbUser__bookinglist--content__noData">
                <div class="mbUser__bookinglist--content__noData--wrapper">
                    <div class="mbUser__bookinglist--content__noData--emptyArea">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_empty-gif.webp" alt=""
                            srcset="">
                        <h3 class="mbUser__bookinglist--content__noData--title">
                            Chưa có đơn hàng!
                        </h3>
                        <div class="mbUser__bookinglist--content__noData--content">
                            Bạn cần chút gợi ý? Xem qua vài dịch vụ hấp dẫn bên dưới.
                        </div>
                    </div>
                </div>
                <div class="mbUser__bookinglist--content__popular">
                    <div class="mbUser__bookinglist--content__popular--title">
                        Hoạt động nên thử
                    </div>
                    <div class="mbUser__bookinglist--content__popular--items">

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mbUser__content">
        <div class="firstProduct__content--list__item col-sm-3 ">
            <div class="firstProduct__content--list__item--wrap">
                <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                        alt="tourProduct">
                </div>
                <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                        <div class="firstProduct__info--top__title text__overflow--main">
                            <a href="detail-tour">Trải Nghiệm Canyoning
                                Vượt Thác Datanla</a>
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
                            <span class="firstProduct__info--top__score--review">(
                                <span class="firstProduct__info--top__score--review__number">120
                                </span>)</span>
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
            </div>
        </div>
        <div class="firstProduct__content--list__item col-sm-3 ">
            <div class="firstProduct__content--list__item--wrap">
                <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                        alt="tourProduct">
                </div>
                <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                        <div class="firstProduct__info--top__title text__overflow--main">
                            <a href="detail-tour">Trải Nghiệm Canyoning
                                Vượt Thác Datanla</a>
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
                            <span class="firstProduct__info--top__score--review">(
                                <span class="firstProduct__info--top__score--review__number">120
                                </span>)</span>
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
            </div>
        </div>
        <div class="firstProduct__content--list__item col-sm-3 ">
            <div class="firstProduct__content--list__item--wrap">
                <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                        alt="tourProduct">
                </div>
                <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                        <div class="firstProduct__info--top__title text__overflow--main">
                            <a href="detail-tour">Trải Nghiệm Canyoning
                                Vượt Thác Datanla</a>
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
                            <span class="firstProduct__info--top__score--review">(
                                <span class="firstProduct__info--top__score--review__number">120
                                </span>)</span>
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
            </div>
        </div>
        <div class="firstProduct__content--list__item col-sm-3 ">
            <div class="firstProduct__content--list__item--wrap">
                <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                        alt="tourProduct">
                </div>
                <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                        <div class="firstProduct__info--top__title text__overflow--main">
                            <a href="detail-tour">Trải Nghiệm Canyoning
                                Vượt Thác Datanla</a>
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
                            <span class="firstProduct__info--top__score--review">(
                                <span class="firstProduct__info--top__score--review__number">120
                                </span>)</span>
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
            </div>
        </div>
        <div class="firstProduct__content--list__item col-sm-3 ">
            <div class="firstProduct__content--list__item--wrap">
                <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                        alt="tourProduct">
                </div>
                <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                        <div class="firstProduct__info--top__title text__overflow--main">
                            <a href="detail-tour">Trải Nghiệm Canyoning
                                Vượt Thác Datanla</a>
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
                            <span class="firstProduct__info--top__score--review">(
                                <span class="firstProduct__info--top__score--review__number">120
                                </span>)</span>
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
            </div>
        </div>
    </div>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/user_booking.js"></script>

<?php get_footer();?>