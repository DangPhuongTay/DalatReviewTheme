<?php
/**
 * Template Name: TemplateUserGiftCard
 * Display Only UserGiftCard template
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
                                <a class="user__module--link" href="user-credit">
                                    <ion-icon name="diamond-outline"></ion-icon>
                                    <span>DLR credit</span>
                                    <!--  -->
                                    <span class="user__num--count">0</span>
                                    <!--  -->
                                </a>
                            </div>
                            <div class="user__content--link">
                                <a class="user__module--link user__focus" href="user-gift-card">
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
                <div class="user__gift--card__panel">
                    <!--  -->
                    <!--  -->
                    <div>
                        <div class="user__gift--card__banner--container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gift_card_banner.jpg"
                                alt="" srcset="">
                            <div class="content">
                                <h1 class="user__gift--card__banner--title">
                                    Phiếu Quà Tặng Đà Lạt Review !!!
                                </h1>
                                <button type="button" class="user__buynow--btn">
                                    <!--  -->
                                    <!--  -->
                                    <span>Dùng ngay</span>
                                    <!--  -->
                                    <!--  -->
                                </button>
                            </div>
                        </div>
                        <!-- các tiện ích -->

                        <div class="user__gift--card__benefit">
                            <!-- item1 -->
                            <div class="user__gift--card__benefit--items">
                                <img class="user__benefit--icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_1.png"
                                    alt="" srcset="">
                                <div class="user__gift--card__benefit--content">
                                    <div class="user__gift--card__benefit--title">
                                        Dễ thanh toán
                                    </div>
                                    <div class="user__gift--card__benefit--desc">
                                        Chỉ cần chọn phiếu quà tặng Klook tại trang thanh toán
                                    </div>
                                </div>
                            </div>
                            <!-- item2 -->
                            <div class="user__gift--card__benefit--items">
                                <img class="user__benefit--icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_2.png"
                                    alt="" srcset="">
                                <div class="user__gift--card__benefit--content">
                                    <div class="user__gift--card__benefit--title">
                                        Không bao giờ hết hạn
                                    </div>
                                    <div class="user__gift--card__benefit--desc">
                                        Bạn chưa có kế hoạch? Đừng lo lắng - hãy dùng phiếu quà tặng bất cứ lúc nào
                                    </div>
                                </div>
                            </div>
                            <!-- item3 -->
                            <div class="user__gift--card__benefit--items">
                                <img class="user__benefit--icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_3.png"
                                    alt="" srcset="">

                                <div class="user__gift--card__benefit--content">
                                    <div class="user__gift--card__benefit--title">
                                        Rất quyền năng
                                    </div>
                                    <div class="user__gift--card__benefit--desc">
                                        Đặt vé tham quan, khách sạn, di chuyển và hơn thế nữa tại hơn 1700 điểm đến
                                        trên
                                        toàn thế giới cùng Đà Lạt Review!
                                    </div>
                                </div>
                            </div>
                            <div class="user__gift--card__benefit--items">
                                <img class="user__benefit--icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_4.png"
                                    alt="" srcset="">
                                <div class="user__gift--card__benefit--content">
                                    <div class="user__gift--card__benefit--title">
                                        Dùng kèm với ưu đãi khác & tiết kiệm thêm
                                    </div>
                                    <div class="user__gift--card__benefit--desc">
                                        Dùng chung với Klook credits hay mã ưu đãi? Không thành vấn đề
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner share gift card với mọi người -->
                        <div class="user__gift--card__share">
                            <p class="title">Chia sẻ niềm vui với mọi người</p>
                            <!-- item 1 -->
                            <div class="another__person--container">
                                <div class="wrapper">
                                    <div class="user__gift--card__another--item ">
                                        <img class="user__family"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps1.jpg"
                                            alt="" srcset="">
                                    </div>
                                    <div class="desc">
                                        Bạn bè
                                    </div>
                                </div>

                                <!-- item 2 -->
                                <div class="wrapper">
                                    <div class="user__gift--card__another--item ">
                                        <img class="user__family"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps2.jpg"
                                            alt="" srcset="">
                                    </div>
                                    <div class="desc">
                                        Gia đình
                                    </div>
                                </div>



                                <!-- item 3 -->
                                <div class="wrapper">
                                    <div class="user__gift--card__another--item ">
                                        <img class="user__family"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps3.jpg"
                                            alt="" srcset="">
                                    </div>
                                    <div class="desc">
                                        Người ấy
                                    </div>
                                </div>
                            </div>





                        </div>

                        <!-- banner khám phá hành trình tiếp theo -->
                        <div class="user__gift--card__explore">
                            <p class="title">Chọn ngay cho hành trình tiếp theo</p>
                            <div class="adv__img--container">
                                <div class="adv__img--item">

                                    <img class="user__gift--card__explore--img"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore1.png"
                                        alt="" srcset="">
                                    <div class="desc">Tham quan & giải trí </div>
                                </div>
                                <div class="adv__img--item">
                                    <img class="user__gift--card__explore--img"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore2.png"
                                        alt="" srcset="">
                                    <div class="desc">Di chuyển </div>
                                </div>
                                <div class="adv__img--item">
                                    <img class="user__gift--card__explore--img"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore3.png"
                                        alt="" srcset="">
                                    <div class="desc">Lưu trú & nghỉ dưỡng </div>
                                </div>
                                <div class="adv__img--item">
                                    <img class="user__gift--card__explore--img"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore4.png"
                                        alt="" srcset="">
                                    <div class="desc">Ẩm thực & Nhà hàng </div>
                                </div>
                                <div class="adv__img--item">
                                    <img class="user__gift--card__explore--img"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore5.png"
                                        alt="" srcset="">
                                    <div class="desc">Tiện ích du lịch </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner áp mã quà tặng/ mã giảm giá -->
                        <div class="user__gift--card__redeem--container">
                            <div class="user__gift--card__redeem">
                                <div class="user__gift--card__redeem--left">
                                    <div class="user__section--title__header">
                                        <h3>Sử dụng Phiếu Quà Tặng</h3>
                                    </div>
                                    <div class="user__gift--card__redeem--wrapper">
                                        <input type="text" placeholder="Điền mã phiếu quà tặng của bạn">
                                        <span class="user__reedem--btn">Sử dụng</span>
                                    </div>
                                    <p class="errorText"></p>
                                    <div class="user__gift--card__redeem--detail">
                                        <p>
                                            <span></span>
                                            Số dư đã sử dụng trên Phiếu Quà Tặng DLR không thể rút hoặc chuyển sang
                                            tài
                                            khoản DLR khác
                                        </p>
                                        <p>
                                            <span></span>
                                            Phiếu Quà Tặng DLR không hỗ trợ chuyển đổi ngoại tệ
                                        </p>
                                    </div>
                                </div>
                                <div class="user__gift--card__redeem--right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gift_card_input.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <!-- banner điều khoản/ điều kiện -->
                        <div class="user__gift--card__tnc--container">
                            <div class="user__section--title__header">
                                <h3>Điều kiện & Điều khoản</h3>
                            </div>
                            <div class="user__gift--card__tnc--desc">
                                <ul>
                                    <li>Tất cả Phiếu Quà Tặng Klook đều được phát hành bởi Klook Travel Technology
                                        Limited (sau đây gọi tắt là “KLOOK”).</li>
                                    <li>Khi bạn mua Phiếu Quà Tặng Klook, bạn đã đồng ý với tất cả Điều Kiện & Điều
                                        Khoản, <a>, có thể được thay đổi và điều chỉnh theo quyết định riêng của
                                            KLOOK.
                                            Việc tiếp tục sử dụng Phiếu Quà Tặng Klook và/hoặc trang web và ứng dụng
                                            KLOOK (gọi chung là “nền tảng KLOOK”) sau khi đã có sự thay đổi và điều
                                            chỉnh đồng nghĩa với việc bạn đồng ý với tất cả những điều khoản đó.</a>
                                    </li>
                                    <li>Không thể chuyển nhượng, hoàn tiền, hay bán lại cho bên thứ ba.</li>
                                    <li>Klook Credit sẽ không được tích luỹ khi mua Phiếu Quà Tặng Klook</li>
                                    <li>Trừ khi có quy định ngoại lệ, không thể sử dụng Klook Credit, số dư trong
                                        Phiếu
                                        Quà Tặng, hay tất cả các mã ưu đãi từ các chương trình giảm giá, ưu đãi đặc
                                        biệt, hay coupon khuyến mãi để mua Phiếu Quà Tặng Klook.</li>
                                    <li>Chỉ chấp nhận thanh toán cùng một mệnh giá tiền tệ với mệnh giá của số dư
                                        trên
                                        Phiếu Quà Tặng Klook.</li>
                                    <li>Thẻ Quà tặng Điện tử Klook không áp dụng cho các Thẻ Klook / Vé Gói & Tiết
                                        kiệm
                                        / Bảo hiểm Du lịch / Vé Bảo tàng Cung điện Hồng Kông / Triển lãm Đặc biệt
                                        Bảo
                                        tàng Khoa học Hồng Kông.</li>
                                    <li>KLOOK sẽ không xử lý hay chịu trách nhiệm về bất kỳ mất mát hay hư hỏng nào
                                        xảy
                                        ra với Phiếu Quà Tặng Klook do các hành vi hay thiếu sót của người dùng hoặc
                                        bên
                                        thứ ba bất kỳ</li>
                                    <li>Theo luật hiện hành, KLOOK có quyền thay đổi, điều chỉnh, tạm ngừng, huỷ,
                                        hay
                                        chấm dứt các Điều Kiện & Điều Khoản của Phiếu Quà Tặng Klook bất cứ lúc nào
                                        dựa
                                        theo quyết định riêng của Klook mà không cần thông báo trước.</li>
                                    <li>Trong trường hợp có bất kỳ sự khác biệt nào giữa phiên bản tiếng Anh của
                                        Điều
                                        Kiện & Điều Khoản Klook với các ngôn ngữ khác, bản tiếng Anh sẽ được ưu tiên
                                        áp
                                        dụng.</li>
                                    <li>Xin liên lạc với bộ phận hỗ trợ của KLOOK theo email
                                        <a>support@klook.com</a>
                                        nếu bạn có thắc mắc.
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--  -->
                    <!--  -->
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
        <div class="user__mb--gift__card--introduction">
            <div class="user__mb--gift__card--banner__container">
                <img src="https://res.klook.com/image/upload/v1646622198/banner/q45xmuvkmscuqk3furhm.jpg" alt=""
                    srcset="">
                <div class="content">
                    <h1 class="title">Phiếu quà tặng Đà Lạt Review</h1>
                    <button class="giftcard_btn">Mua ngay</button>
                </div>
            </div>
            <div class="user__mb--gift__card--propositions">
                <div class="propositions__items">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_1.png"
                                alt="" srcset="">
                        </div>
                        <div class="content">
                            <div class="title">Dễ thanh toán</div>
                            <div class="desc">Chỉ cần chọn phiếu quà tặng Klook tại trang thanh toán</div>
                        </div>
                    </div>
                </div>
                <div class="propositions__items">

                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_2.png"
                                alt="" srcset="">
                        </div>
                        <div class="content">
                            <div class="title">Không bao giờ hết hạn</div>
                            <div class="desc">Bạn chưa có kế hoạch? Đừng lo lắng - hãy dùng phiếu quà tặng bất cứ
                                lúc nào</div>
                        </div>
                    </div>
                </div>
                <div class="propositions__items">

                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_3.png"
                                alt="" srcset="">
                        </div>
                        <div class="content">
                            <div class="title">Rất quyền năng</div>
                            <div class="desc">Đặt vé tham quan, khách sạn, di chuyển và hơn thế nữa tại hơn 1700
                                điểm đến trên toàn thế giới cùng Klook!</div>
                        </div>
                    </div>
                </div>

                <div class="propositions__items">

                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gif-benefit_4.png"
                                alt="" srcset="">
                        </div>
                        <div class="content">
                            <div class="title">Dùng kèm với ưu đãi khác & tiết kiệm thêm</div>
                            <div class="desc">Dùng chung với Klook credits hay mã ưu đãi? Không thành vấn đề</div>
                        </div>
                    </div>
                </div>
                <div class="propositions__items">

                    <div class="item">

                        <div class="content">
                            <div class="title"></div>
                            <div class="desc"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user__mb--gift__card--audience">
                <div class="title">
                    Chia sẻ niềm vui với mọi người
                </div>
                <div class="image__container">
                    <div class="image__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps1.jpg" alt=""
                            srcset="">
                        <div class="desc">Bạn bè</div>
                    </div>
                    <div class="image__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps1.jpg" alt=""
                            srcset="">
                        <div class="desc">Bạn bè</div>
                    </div>
                    <div class="image__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_another_ps1.jpg" alt=""
                            srcset="">
                        <div class="desc">Bạn bè</div>
                    </div>
                </div>
            </div>

            <div class="user__mb--gift__card--explore">
                <div class="title">
                    Chọn ngay cho hành trình tiếp theo
                </div>
                <div class="image__container">
                    <div class="image__items">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore1.png" alt=""
                            srcset="">
                        <div class="description">Tham gia & giải trí </div>
                    </div>
                    <div class="image__items">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore2.png" alt=""
                            srcset="">
                        <div class="description">Tham gia & giải trí </div>
                    </div>
                    <div class="image__items">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore3.png" alt=""
                            srcset="">
                        <div class="description">Tham gia & giải trí </div>
                    </div>
                    <div class="image__items">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore4.png" alt=""
                            srcset="">
                        <div class="description">Tham gia & giải trí </div>
                    </div>
                    <div class="image__items">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_explore5.png" alt=""
                            srcset="">
                        <div class="description">Tham gia & giải trí </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="user__mb--gift__card--buynow">
            <div class="card__buynow--container">
                <div class="left">
                    <div class="buy_title">Mua phiếu quà tặng điện tử</div>
                    <button class="buy_btn">Mua ngay</button>
                </div>
                <div class="right__banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_gift_card_mb.png" alt=""
                        srcset="">
                </div>
            </div>
        </div>

        <div class="user__mb--gift__card--redeem__module">
            <p class="banner">Bạn đã có phiếu quà tặng Klook?</p>
            <button class="button">
                Sử dụng ngay
            </button>
        </div>
        <div class="user__mb--gift__card--corporate">
            <div class="title">
                Bạn muốn mua cho cả nhóm?
            </div>
            <div class="description">

                Phiếu quà tặng Klook là cách tuyệt vời để nói cảm ơn đến nhân viên và khách hàng
            </div>
            <div class="toolbar">
                <button type="button"><span>Liên hệ</span></button>
            </div>
        </div>

        <div class="user__mb--gift__card--btn__fixed">
            <button class="user__btn--block">
                <span>Thanh toán</span>
            </button>
        </div>
    </div>
    <div>

    </div>

</div>



<?php get_footer();?>