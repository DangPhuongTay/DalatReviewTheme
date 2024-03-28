<?php
/**
 * Template Name: TemplateUserSettingLog
 * Display Only UserSettingLog template
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
                                    <a class="user__module--link " href="">
                                        <ion-icon name="pricetags-outline"></ion-icon>
                                        <span>Mã ưu đãi</span>
                                        <!--  -->
                                        <span class="user__num--count">3</span>
                                        <!--  -->
                                    </a>
                                </div>
                                <div class="user__content--link">
                                    <a class="user__module--link" href="">
                                        <ion-icon name="diamond-outline"></ion-icon>
                                        <span>DLR credit</span>
                                        <!--  -->
                                        <span class="user__num--count">0</span>
                                        <!--  -->
                                    </a>
                                </div>
                                <div class="user__content--link">
                                    <a class="user__module--link " href="">
                                        <ion-icon name="ticket-outline"></ion-icon>
                                        <span>Phiếu quà tặng</span>
                                    </a>
                                </div>
                            </div>


                            <div class="user__center--sidebar__preferential">
                                <div class="user__content--link">
                                    <a class="user__module--link" href="../page/user_booking.html">
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
                                    <a class="user__module--link user__focus" href="">
                                        <ion-icon name="id-card-outline"></ion-icon>
                                        <span>Quản lý đăng nhập</span>

                                    </a>
                                </div>
                                <div class="user__content--link">
                                    <a class="user__module--link " href="">
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
                    <div class="user__login--method__panel">
                        <div class="user__login--method__panel--title">
                            <div class="user__section--title__header ">
                                <h3>
                                    Quản lý đăng nhập
                                </h3>
                            </div>
                            <div class="user__section--title__header--icon">
                                <ion-icon name="eye-off-outline"></ion-icon>
                            </div>

                        </div>

                        <!-- data banner 1 -->
                        <div>
                            <div class="user__login--method__section--title">
                                <div class="user__login--method__section--header">
                                    <h5>
                                        E-mail & số điện thoại
                                    </h5>
                                    <!--  -->
                                </div>
                            </div>

                            <div class="user__login--method__bind--cart__box">
                                <!-- items -->
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo">
                                            <ion-icon name="mail"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">Email</div>
                                        <div class="user__login--method__bind--control__group">
                                            <div class="user__login--method__bind--control__btn">
                                                Liên kết
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo user__bound--data">
                                            <ion-icon name="id-card-outline"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">Số điện thoại</div>
                                        <div class="user__login--method__bind--control__group">
                                            <div class="user__login--method__bind--control__btn">
                                                Chỉnh sửa
                                            </div>
                                            <div class="user__login--method__bind--control__btn">
                                                Hủy liên kết
                                            </div>

                                        </div>
                                    </div>
                                    <div class="user__login--method__bind--cart__desc">
                                        84-386790307
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- data banner 2 -->
                        <div>
                            <div class="user__login--method__section--title">
                                <div class="user__login--method__section--header">
                                    <h5>
                                       Mạng xã hôi
                                    </h5>
                                    <!--  -->
                                </div>
                            </div>

                            <div class="user__login--method__bind--cart__box">
                                <!-- items -->
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo">
                                            <ion-icon name="logo-google"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">Google</div>
                                        <div class="user__login--method__bind--control__group">
                                            <div class="user__login--method__bind--control__btn">
                                                Liên kết
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">Facebook</div>
                                        <div class="user__login--method__bind--control__group">
                                            
                                            <div class="user__login--method__bind--control__btn">
                                                Liên kết
                                            </div>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="user__login--method__bind--cart__box">
                                <!-- items -->
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo">
                                            <ion-icon name="logo-apple"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">Apple</div>
                                        <div class="user__login--method__bind--control__group">
                                            <div class="user__login--method__bind--control__btn">
                                                Liên kết
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="user__login--method__bind--cart__item">
                                    <div class="user__login--method__bind--cart__top">
                                        <div class="user__login--method__bind--cart__logo">
                                            <ion-icon name="logo-wechat"></ion-icon>
                                        </div>
                                        <div class="user__login--method__bind--cart__name">
                                            Wechat
                                        </div>
                                        <div class="user__login--method__bind--control__group">
                                            
                                            <div class="user__login--method__bind--control__btn">
                                                Liên kết
                                            </div>
                                            

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!--  -->
                <!--  -->

            </div>
        </div>
    </div>
    


    <!-- responsive mobile -->
   
            <div class="user__mb--container">
                <div class="user__mb--box__method">
                 
                        <div class="user__mb--above__header">
                            <div>Phương thức đăng nhập  </div>
                        </div>
                                <!-- khu vực body -->
                                <div>
                                    <div class="user__mb--login__method--title__h5">
                                        <div class="user__mb--login__method--title__header">
                                            <h5>
                                                E-mail & số điện thoại
                                              </h5>
                                        </div>
                                        <div class="user__mb--login__method--title__body">
                                            <!--  -->
                                        </div>
                                    </div>
                                    <!-- first item -->
                                    <div class="user__mb--login__method--bind__card--box">
                                        <div class="user__mb--login__method--bind__card--items">
                                            <div class="user__mb--login__method--bind__card--top">

                                                    <div class="user__mb--login__method--bind__card__logo">
                                                        <ion-icon name="id-card-outline"></ion-icon>
                                                    </div>
                                                    <div class="user__mb--login__method--bind__card__name">Email</div>
                                                    <div class="user__mb--login__method--bind--control__group">
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Liên kết
                                                        </div>
            
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="user__mb--login__method--bind__card--items">
                                            <div class="user__mb--login__method--bind__card--top">

                                                    <div class="user__mb--login__method--bind__card__logo user__bound--data">
                                                        <ion-icon name="mail"></ion-icon>
                                                    </div>
                                                    <div class="user__mb--login__method--bind__card__name">Số điện thoại</div>
                                                    <div class="user__mb--login__method--bind--control__group">
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Chỉnh sửa
                                                        </div>
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Hủy liên kết
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="user__login--method__bind--cart__desc">
                                                84-386790307
                                            </div>
                                        </div>
                                        <!--  -->

                                     
                                    </div>

                                    <!-- banner 2 -->
                                    <div class="user__mb--login__method--title__h5">
                                        <div class="user__mb--login__method--title__header">
                                            <h5>
                                                Mạng xã hội
                                              </h5>
                                        </div>
                                        <div class="user__mb--login__method--title__body">
                                            <!--  -->
                                        </div>
                                    </div>
                                    <!-- first item -->
                                    <div class="user__mb--login__method--bind__card--box">
                                        <div class="user__mb--login__method--bind__card--items">
                                            <div class="user__mb--login__method--bind__card--top">

                                                    <div class="user__mb--login__method--bind__card__logo">
                                                        <ion-icon name="logo-google"></ion-icon>
                                                    </div>
                                                    <div class="user__mb--login__method--bind__card__name">Google</div>
                                                    <div class="user__mb--login__method--bind--control__group">
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Liên kết
                                                        </div>
            
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="user__mb--login__method--bind__card--items">
                                            <div class="user__mb--login__method--bind__card--top">

                                                    <div class="user__mb--login__method--bind__card__logo">
                                                        <ion-icon name="logo-wechat"></ion-icon>
                                                    </div>
                                                    <div class="user__mb--login__method--bind__card__name">Wechat</div>
                                                    <div class="user__mb--login__method--bind--control__group">
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Liên kết
                                                        </div>
            
                                                    </div>
                                                
                                            </div>
                                        </div>

                                        <div class="user__mb--login__method--bind__card--items">
                                            <div class="user__mb--login__method--bind__card--top">

                                                    <div class="user__mb--login__method--bind__card__logo">
                                                        <ion-icon name="logo-apple"></ion-icon>
                                                    </div>
                                                    <div class="user__mb--login__method--bind__card__name">Apple</div>
                                                    <div class="user__mb--login__method--bind--control__group">
                                                        <div class="user__mb--login__method--bind--control__btn">
                                                            Liên kết
                                                        </div>
            
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <!--  -->

                                     
                                    </div>
                                    
                                </div>
                      
                </div>
            </div>


<?php get_footer();?>