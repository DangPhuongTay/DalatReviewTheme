<?php
/**
 * Template Name: TemplateUserSettingPass
 * Display Only UserSettingPass template
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
                                <a class="user__module--link" href="user-credit">
                                    <ion-icon name="diamond-outline"></ion-icon>
                                    <span>DLR credit</span>
                                    <!--  -->
                                    <span class="user__num--count">0</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link " href="user-gift-card">
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
                                <a class="user__module--link user__focus" href="user-setting-pass">
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

                <div class="user__settings--changepwd">
                    <div>
                        <div class="user__settings--changepwd__title">
                            <div class="user__settings--changepwd__title--h3">
                                <div class="user__section--title__header ">
                                    <h3>
                                        Đổi mật khẩu
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="user__settings--changepwd__title--desc">
                            <!--  -->
                            <div>Hãy tạo một mật khẩu mạnh để tài khoản của bạn được an toàn</div>
                            <!--  -->
                        </div>
                        <div>
                            <!--  -->
                            <div>
                                <!--  -->
                                <div class="user__settings--input">
                                    <div class="user__settings--input__title">
                                        Đặt mật khẩu (Mật khẩu phải từ 8-20 kí tự với ít nhất 1 số, 1 chữ cái, và 1
                                        kí tự đặc biệt)
                                    </div>
                                    <div class="user__settings--input__title__wrapper">
                                        <div class="user__settings--input__title__container">
                                            <div class="user__settings--input__inner">
                                                <!-- -->
                                                <input type="password" id="password" placeholder="Nhập mật khẩu"
                                                    autocomplete="off" spellcheck="false">
                                                <!--- -->
                                                <i class="user__settings--input__btn icon__other__view__on"
                                                    id="togglePasswordVisibility">
                                                    <ion-icon name="eye-outline"></ion-icon>
                                                </i>
                                                <!--  -->
                                            </div>

                                        </div>
                                    </div>
                                    <span id="passwordLengthWarning" class="user__warning"></span>
                                    <span id="passwordRequirementWarning" class="user__warning"></span>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                </div>
                            </div>
                            <div>
                                <div class="user__settings--input">
                                    <div class="user__settings--input__title__wrapper">
                                        <div class="user__settings--input__title__container">
                                            <div class="user__settings--input__inner">
                                                <!-- -->
                                                <input type="password" id="confirmPassword"
                                                    placeholder="Xác nhận mật khẩu" autocomplete="off"
                                                    spellcheck="false">
                                                <!--- -->
                                                <i class="user__settings--input__btn icon__other__view__on"
                                                    id="toggleConfirmPasswordVisibility">
                                                    <ion-icon name="eye-outline"></ion-icon>
                                                </i>
                                                <!--  -->
                                            </div>

                                        </div>
                                    </div>
                                    <span id="passwordMatchWarning" class="user__warning"></span>
                                </div>
                            </div>
                            <!-- hết banner input -->
                            <div class="user__settings--input__btn">
                                <button id="saveButton" disabled>Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="user__settings--notify">
                    <div>
                        <div class="user__settings--notify__title" onclick="btnUserNotify()">
                            <span>Tùy chỉnh thông báo</span>
                            <span class="user__icon user__iconDrop--down">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </span>
                            <span class="user__icon user__iconDrop--up">
                                <ion-icon name="chevron-up-outline"></ion-icon>
                            </span>
                        </div>
                        <div class="user__settings--notify__options">
                            <div>
                                <div>
                                    <div>
                                        <div class="user__settings--notify__options--title">
                                            Cập nhật và Ưu đãi
                                        </div>
                                        <div class="user__settings--notify__options--desc">
                                            Hãy là người đầu tiên nhận thông tin về các chương trình, mã ưu đãi,
                                            giảm giá và tính năng mới từ Đà Lạt Review
                                        </div>
                                        <!-- Reuse - checkbox -->
                                        <div class="user__checkbox">
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">Email
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">SMS
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                    </div>
                                    <!--  -->
                                    <div>
                                        <div class="user__settings--notify__options--title">
                                            Cập nhật và Ưu đãi
                                        </div>
                                        <div class="user__settings--notify__options--desc">
                                            Hãy là người đầu tiên nhận thông tin về các chương trình, mã ưu đãi,
                                            giảm giá và tính năng mới từ Đà Lạt Review
                                        </div>
                                        <!-- Reuse - checkbox -->
                                        <div class="user__checkbox">
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">Email
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">SMS
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                    </div>
                                    <!--  -->
                                    <div>
                                        <div class="user__settings--notify__options--title">
                                            Cập nhật và Ưu đãi
                                        </div>
                                        <div class="user__settings--notify__options--desc">
                                            Hãy là người đầu tiên nhận thông tin về các chương trình, mã ưu đãi,
                                            giảm giá và tính năng mới từ Đà Lạt Review
                                        </div>
                                        <!-- Reuse - checkbox -->
                                        <div class="user__checkbox">
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">Email
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span role="checkbox" class="user__checkbox--normal">
                                                <label class="cart__container--top__left--all__left--check">SMS
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                    </div>
                                    <!--  -->
                                    <div class="user__settings--update__btn">
                                        <button id="user__settings--update">Cập nhật tùy chọn</button>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!--  -->

                <div class="user__settings--deleteaccount">
                    <div class="user__settings--deleteaccount__title">
                        <span>Xóa tài khoản</span>
                        <span class="user__open--popup">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </span>

                    </div>
                    <div class="user__settings--deleteaccount__desc">
                        Xoá tài khoản Klook và dữ liệu cá nhân của bạn
                    </div>
                </div>
                <!-- popup - xóa tài khoản -->
                <div class="user__popup">
                    <div class="user__popup--container">
                        <div class="user__verify--sms__wrap">
                            <div class="user__verify--sms__code">
                                <div class="user__verify--sms__code--title">
                                    Xác minh tài khoản
                                </div>
                                <!-- pop up 1 -->
                                <div class="user__verify--sms__code--container">
                                    <div class="user__verify--sms__code--subtitle">
                                        Để xác nhận là bạn, hãy điền mã xác nhận
                                    </div>
                                    <div class="user__verify--sms__code--phonenum">
                                        +84 386790307
                                    </div>
                                    <div class="user__verify--sms__input--wrap">
                                        <div class="user__verify--sms__input">
                                            <div class="user__verify--sms__input--inner">
                                                <!--  -->
                                                <input type="text" placeholder="Nhập mã xác minh" autocomplete="off"
                                                    spellcheck="false">
                                                <div class="user__verify--sms__input--append">
                                                    <div class="user__verify--sms__input--ready">
                                                        Gửi mã xác nhận
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <!-- button -->
                                    <button class="user__primary--button">
                                        <span>Tiếp</span>
                                    </button>
                                </div>
                                <!--  -->
                                <!--popup 2 -->
                                <div class="user__verify--sms__input--validate">
                                    <h5 class="user__verify--sms__input--validate__title">Nhập mã xác nhận</h5>
                                    <p class="user__verify--sms__input--validate__desc">Chúng tôi đã gửi mã tới</p>
                                    <p class="user__verify--sms__input--validate__phone">+84-386790307</p>
                                    <div class="user__verify--sms__input--wrapper">
                                        <div class="user__verify--sms__otp--valid">
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                            <label for="otp-validate-code"
                                                class="user__verify--sms__otp--valid__label"></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="user__close--icon">
                            <span class="i-icon close-icon">
                                <ion-icon name="close-outline"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- responsive mobile -->
<div class="user__mb--container">
    <div class="user__mb--box">
        <div class="user__mb--settings">
            <div class="user__mb--above__header">
                <div>Sửa tài khoản</div>
            </div>

            <div class="user__mb--settings__container">
                <a href="user-setting-log" class="user__mb--changepwd">
                    <div>
                        <span> Thay đổi mật khẩu</span>
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </a>
                <a href="" class="user__mb--options">
                    <div>
                        <span>Tùy chỉnh thông báo</span>
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </a>
            </div>
            <a href="" class="verify__account">
                <div>
                    <span>Xoá tài khoản</span>
                </div>
            </a>
        </div>
    </div>
</div>


<?php get_footer();?>