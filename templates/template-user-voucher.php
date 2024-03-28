<?php
/**
 * Template Name: TemplateUserVoucher
 * Display Only UserVoucher template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

<div class="user__center--container__desktop">
        <div class="user__center--box">
            <a class="fill__more--info" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_location.png" alt="">
                <span>Thêm quốc gia/khu vực của bạn để nhận đề xuất tốt hơn</span>
                <ion-icon name="chevron-forward-outline" class="user__profile--icon"></ion-icon>
            </a>
            <div class="user__center--sidebar__wrapper ">
                <div class="user__center--sidebar">

                    <div class="user__center--sidebar__box">
                        <div class="user__center--sidebar__profile">
                            <div class="user__center--sidebar__profile--avatar__cover">
                                <img class="user__center--sidebar__profile--avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png"
                                    alt="" srcset="">
                                <div class="user__center--sidebar__profile--name">NGƯỜI DÙNG ĐL REVIEW</div>
                            </div>
                            <a onclick="primaryDropdown()" href="" class="user__center--sidebar__profile--changer">
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
                                    <a class="user__module--link user__focus" href="">
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
                                    <a class="user__module--link" href="">
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
                                    <a class="user__module--link" href="">
                                        <ion-icon name="star-half-outline"></ion-icon>
                                        <span>Đánh giá</span>

                                    </a>
                                </div>
                                <div class="user__content--link">
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
                                </div>

                                <div class="user__content--link">
                                    <a class="user__module--link" href="">
                                        <ion-icon name="heart-outline"></ion-icon>
                                        <span>Yêu thích </span>

                                    </a>
                                </div>

                            </div>

                            <div class="user__center--sidebar__preferential">
                                <div class="user__content--link">
                                    <a class="user__module--link" href="">
                                        <ion-icon name="id-card-outline"></ion-icon>
                                        <span>Quản lý đăng nhập</span>

                                    </a>
                                </div>
                                <div class="user__content--link">
                                    <a class="user__module--link" href="user-settings">
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


                <!-- right banner  -->
                <div class="user__content--box">
                    <!-- ======================================== -->
                    <!-- ======================================== -->
                    <div class="user__content--right__banner">
                        <div class="user__content--wrapper">
                            <div class="user__content--content ">
                                <div class="user__input--wrapper">
                                    <div class="input__button--input">
                                        <input id="user_input" type="text" placeholder="Nhập mã khuyến mãi"
                                            autocomplete="off" spellcheck="false">
                                        <div class="user__btn--wrap">
                                            <button class="user__btn">
                                                <span>Sử dụng</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user__content--option__wrapper">
                                <div class="user__content--option">
                                    <div class="user__content--option__btn user__option--active"
                                        onclick="activate('applyContent')">
                                        Áp dụng được (3)
                                    </div>
                                    <div class="user__content--option__btn" onclick="activate('noApplyContent')">
                                        Không áp dụng
                                    </div>
                                </div>
                                <!--  -->
                                <!--  -->
                                <div class="user__content--body applyContent">
                                    <div class="user__content--wrap">
                                        <div class="user__content--items">
                                            <div class="user__content--items__top">
                                                <div class="user__content--items__desc">
                                                    Giảm ngày 320.000đ
                                                </div>
                                                <div class="user__content--items__info">
                                                    <div class="user__content--items__info--condition">
                                                        Áp dụng cho: Áp dụng khi mua 3 vé cáp treo Sky Pass. Không cộng
                                                        dồn
                                                        với các mã khuyến mãi khác.
                                                    </div>
                                                    <div class="user__content--items__info--date">
                                                        Hết hạn: 29/2/2024 23:59
                                                    </div>
                                                    <div class="user__content--items__info--date">Phù hợp với mọi nền
                                                        tảng
                                                    </div>
                                                    <a class="user__content--items__info--date user__link--banner"
                                                        href="#">Hoạt động không áp dụng</a>
                                                </div>

                                            </div>
                                            <div class="user__bannerCut"></div>
                                            <div class="user__content--items__bottom">
                                                <div class="user__content--coupon__code">
                                                    SKYHELIX
                                                </div>
                                                <div class="user__content--coupon__code">
                                                    Free 1 vé Skyhelix (trị giá 320.000đ)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="user__content--items">
                                            <div class="user__content--items__top">
                                                <div class="user__content--items__desc">
                                                    Giảm ngày 320.000đ
                                                </div>
                                                <div class="user__content--items__info">
                                                    <div class="user__content--items__info--condition">
                                                        Áp dụng cho: Áp dụng khi mua 3 vé cáp treo Sky Pass. Không cộng
                                                        dồn
                                                        với các mã khuyến mãi khác.
                                                    </div>
                                                    <div class="user__content--items__info--date">
                                                        Hết hạn: 29/2/2024 23:59
                                                    </div>
                                                    <div class="user__content--items__info--date">Phù hợp với mọi nền
                                                        tảng
                                                    </div>
                                                    <a class="user__content--items__info--date user__link--banner"
                                                        href="#">Hoạt động không áp dụng</a>
                                                </div>

                                            </div>
                                            <div class="user__bannerCut"></div>
                                            <div class="user__content--items__bottom">
                                                <div class="user__content--coupon__code">
                                                    SKYHELIX
                                                </div>
                                                <div class="user__content--coupon__code">
                                                    Free 1 vé Skyhelix (trị giá 320.000đ)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="user__content--items">
                                            <div class="user__content--items__top">
                                                <div class="user__content--items__desc">
                                                    Giảm ngày 320.000đ
                                                </div>
                                                <div class="user__content--items__info">
                                                    <div class="user__content--items__info--condition">
                                                        Áp dụng cho: Áp dụng khi mua 3 vé cáp treo Sky Pass. Không cộng
                                                        dồn
                                                        với các mã khuyến mãi khác.
                                                    </div>
                                                    <div class="user__content--items__info--date">
                                                        Hết hạn: 29/2/2024 23:59
                                                    </div>
                                                    <div class="user__content--items__info--date">Phù hợp với mọi nền
                                                        tảng
                                                    </div>
                                                    <a class="user__content--items__info--date user__link--banner"
                                                        href="#">Hoạt động không áp dụng</a>
                                                </div>

                                            </div>
                                            <div class="user__bannerCut"></div>
                                            <div class="user__content--items__bottom">
                                                <div class="user__content--coupon__code">
                                                    SKYHELIX
                                                </div>
                                                <div class="user__content--coupon__code">
                                                    Free 1 vé Skyhelix (trị giá 320.000đ)
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="user__content--body noApplyContent">
                                    <div class="user__content--wrap">
                                        <div class="user__empty--banner">
                                            <img class="user__empty--banner__background"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-banner.webp" alt="">
                                            <h3 class="user__empty--banner__title">
                                                Mã khuyến mãi mới
                                            </h3>
                                            <div class="user__empty--banner__content">
                                                Bạn có mã ưu đãi? Nhập vào để lưu ở bên trên.Hoặc bạn có thể mời bạn bè
                                                sử
                                                dụng Klook và kiếm điểm thưởng.
                                            </div>
                                            <div class="user__empty--banner__act">
                                                <button type="button" class="user__btn--custom user__empty--button"><a
                                                        href="http://127.0.0.1:5500/page/home.html">Khám phá ngay</a>
                                                </button>
                                                <button type="button"
                                                    class="user__btn--neoCustom user__empty--button">Mời
                                                    bạn bè </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ======================================== -->
                </div>
            </div>
        </div>
    </div>

    <div class="user__mb--container">
        <div class="user__mb--box">
            <div class="user__mb--box__top">
                <div class="user__settings--icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </div>
                <div class="user__mb--box__top--profile">
                    <div class="user__mb--profile__avt">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                    </div>
                    <div class="user__mb--profile__inf">
                        <div class="user__mb--profile__title">Người dùng Klook</div>
                        <div class="user__mb--profile__edit"><span>Chỉnh sửa</span>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="user__mb--box__coupon">
                    <div class="user__mb--box__coupon--inf">
                        <span class="user__mb--coupon__amount">3</span>
                        <span class="user__mb--coupon__desc">Mã ưu đãi</span>
                    </div>
                    <div class="user__mb--box__coupon--inf">
                        <span class="user__mb--coupon__amount">0</span>
                        <span class="user__mb--coupon__desc">Credit</span>
                    </div>
                    <div class="user__mb--box__coupon--inf">
                        <span class="user__mb--coupon__amount">+</span>
                        <span class="user__mb--coupon__desc">Phiếu quà tặng ĐLR</span>
                    </div>
                </div>


                <div class="user__mb--box__menu">
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Đơn hàng</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="heart-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Yêu thích</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="podium-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Đánh giá</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="receipt-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Quản lý phương thức thanh toán</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Quản lý thông tin khách</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                    <div class="user__mb--box__menu--unit">
                        <span>
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="user__mb--box__menu--title">Quản lý thông tin giao hàng</span>
                        <span class="user__mb--box__menu--next"><ion-icon
                                name="chevron-forward-outline"></ion-icon></span>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="user__mb--box__banner--wrapper">
                <div class="user__mb--box__banner">
                    <div class="user__mb--box__banner--desc">
                        <div class="user__mb--box__banner--title">Nhận bí kíp địa phương</div>
                        <div class="user__mb--box__banner--inf">Thêm quốc gia/khu vực của bạn để nhận đề xuất tốt hơn
                        </div>
                        <div class="user__add--btn">Thêm</div>
                    </div>
                    <div class="user__mb--box__banner--logo">
                    </div>
                </div>

            </div>

            <div class="user__mb--box__invite--wrapper">
                <div class="user__mb--box__invite">
                    <div class="user__mb--box__invite--title">Mời bạn bè</div>
                    <div class="user__mb--box__banner--inf">Nhận 100.000 đ khi mời bạn bè sử dụng ĐL Review thành công !
                    </div>

                </div>
                <div class="user__mb--box__invite--logo">
                </div>

            </div>
            <div class="user__mb--box__menu">
                <div class="user__mb--box__menu--unit">
                    <span>
                        <ion-icon name="reader-outline"></ion-icon>
                    </span>
                    <span class="user__mb--box__menu--title">Quản lý đăng nhập</span>
                    <span class="user__mb--box__menu--next"><ion-icon name="settings-outline"></ion-icon>
                </div>
                <div class="user__mb--box__menu--unit">
                    <span>
                        <ion-icon name="heart-outline"></ion-icon>
                    </span>
                    <span class="user__mb--box__menu--title">Trợ giúp</span>
                    <span class="user__mb--box__menu--next"><ion-icon name="help-circle-outline"></ion-icon></span>
                </div>
            </div>
            <div class="user__logout--btn">
                Đăng xuất
            </div>
        </div>
    </div>


<?php get_footer();?>