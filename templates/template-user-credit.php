<?php
/**
 * Template Name: TemplateUserCredit
 * Display Only UserCredit template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
<!-- body from here !  -->
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
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt=""
                                srcset="">
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
                                <a class="user__module--link " href="user-voucher">
                                    <ion-icon name="pricetags-outline"></ion-icon>
                                    <span>Mã ưu đãi</span>
                                    <!--  -->
                                    <span class="user__num--count">3</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link  user__focus" href="user-credit">
                                    <ion-icon name="diamond-outline"></ion-icon>
                                    <span>DLR credit</span>
                                    <!--  -->
                                    <span class="user__num--count">0</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-gift-card">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                    <span>Phiếu quà tặng</span>
                                </a>
                            </div>
                        </div>


                        <div class="user__center--sidebar__preferential">
                            <div class="user__content--link">
                                <a class="user__module--link" href="user-booking">
                                    <ion-icon name="file-tray-full-outline"></ion-icon>
                                    <span>Đơn hàng</span>

                                </a>
                            </div>



                            <div class="user__content--link">
                                <a class="user__module--link" href="user-wishlist">
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
                                <a class="user__module--link " href="user-setting-pass">
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


            <div class="user__content--box">
                <!--  -->
                <!--  -->
                <div class="user__credit--banner">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/user_credit.png" alt="">
                    <div class="content">
                        <p class="user__credit--number">0</p>
                        <p class="user__credit--tips">
                            Bạn không có credit nào. Hãy đặt hoạt động để nhận credit nhé!
                        </p>
                    </div>
                </div>
                <!-- body box -->
                <div class="user__credit--history__box">
                    <p class="user__credit--title__text">
                        Thông tin credit
                    </p>
                    <div class="user__credit--type__tabbox">
                        <div class="user__credit--type__tabbox--header">
                            <div class="user__credit--type__tabbox--items__wrapper">
                                <!-- item 1  -->
                                <div class="user__credit--type__tabbox--items user__credit--item__active">
                                    <span>Tất cả</span>
                                </div>
                                <!-- item 2  -->
                                <div class="user__credit--type__tabbox--items">
                                    <span>Đã nhận</span>
                                </div>
                                <!-- item 3  -->
                                <div class="user__credit--type__tabbox--items">
                                    <span>Đã sử dụng</span>
                                </div>
                                <!-- item 4  -->
                                <div class="user__credit--type__tabbox--items">
                                    <span>Đã hết hạn</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user__credit--transactions">
                        <div class="user__credit--transactions__banner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_credit_banner.webp"
                                alt="" srcset="">
                            <div class="user__credit--transactions__empty--banner">
                                Bạn chưa có credit nào
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<!-- responsive mobile -->

<div class="user__mb--container">

    <div class="user__mb--above__header">
        <div>Phiếu quà tặng Đà Lạt Review</div>
    </div>
    <!-- khu vực body -->
    <div class="user__mb--gift__card user__mb--nogGift__card">
        <div class="user__mb--credit__introduction">
            <div class="user__mb--credit__banner__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gift_card_banner.jpg" alt="">
                <div class="content">
                    <h1 class="title">Phiếu quà tặng Đà Lạt Review</h1>
                    <button class="button"> Mua ngay</button>
                </div>

            </div>
            <div class="user__mb--credit__banner__advantages">
                <!-- item 1 -->
                <div class="user__mb--credit__banner__advantages--items">
                    <div class="icon"></div>
                    <div class="content">
                        <div class="title">Dễ thanh toán</div>
                        <div class="description">Chỉ cần chọn phiếu quà tặng DaLatReview tại trang thanh toán</div>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="user__mb--credit__banner__advantages--items">
                    <div class="icon"></div>
                    <div class="content">
                        <div class="title">Không bao giờ hết hạn</div>
                        <div class="description">Bạn chưa có kế hoạch? Đừng lo lắng - hãy dùng phiếu quà tặng bất cứ lúc
                            nào</div>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="user__mb--credit__banner__advantages--items">
                    <div class="icon"></div>
                    <div class="content">
                        <div class="title">Dễ thanh toán</div>
                        <div class="description">Chỉ cần chọn phiếu quà tặng DaLatReview tại trang thanh toán</div>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="user__mb--credit__banner__advantages--items">
                    <div class="icon"></div>
                    <div class="content">
                        <div class="title">Dễ thanh toán</div>
                        <div class="description">Chỉ cần chọn phiếu quà tặng DaLatReview tại trang thanh toán</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>

</div>


<?php get_footer();?>