<body>
    <div class="header__compoment">
        <header>
            <div class="header__content--top">
                <div class="header__top">
                    <div class="header__top--left">
                        <div class="header__top--left__hamburger">
                            <div class="header__top--left__hamburger--box">
                            </div>
                        </div>
                        <a href="http://localhost/wordpress"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-logo.png" alt="" class="header__top--left__logo"></a>
                        <div class="header__top--left__namewebsite">Đà Lạt Review Tất Tần Tật</div>
                        <div class="header__top--left__search">
                            <?php wc_get_template('templates/template-search/searchform.php'); ?>
                            <ion-icon name="search-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="header__top--right">
                        <ul>
                            <li class="logout">
                                <div class="header__top--right__item logout">
                                    Đăng xuất
                                </div>
                            </li>
                            <li class="open__login--signup__form--1">
                                <div class="header__top--right__item  check__login">
                                    Đăng ký
                                </div>
                            </li>
                            <li class="open__login--signup__form--2">
                                <div class="header__top--right__itemlast check__login">
                                    Đăng nhập
                                </div>
                            </li>
                            <li>
                                <div class="header__top--right__item--checker">
                                    <a href="user-voucher">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header__top--right__mobile">
                        <div class="header__top--right__mobile--item">
                            <a href=""><ion-icon name="search-outline"></ion-icon></a>
                        </div>
                        <div class="header__top--right__mobile--item">
                            <a href="cart"><ion-icon name="cart-outline"></ion-icon></a>
                        </div>
                        <div class="header__top--right__mobile--item open__login--signup__form login__mobile check__login">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="header__top--right__item--checker">
                            <a href="user-voucher">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="header__mobile shadow">
            <div class="header__mobile--box">
                <ul>
                    <?php

                    $taxonomy     = 'product_cat';
                    $orderby      = 'name';
                    $show_count   = 0;      // 1 for yes, 0 for no
                    $pad_counts   = 0;      // 1 for yes, 0 for no
                    $hierarchical = 1;      // 1 for yes, 0 for no  
                    $title        = '';
                    $empty        = 0;

                    $args = array(
                        'taxonomy'     => $taxonomy,
                        'orderby'      => $orderby,
                        'show_count'   => $show_count,
                        'pad_counts'   => $pad_counts,
                        'hierarchical' => $hierarchical,
                        'title_li'     => $title,
                        'hide_empty'   => $empty
                    );
                    $all_categories = get_categories($args);
                    foreach ($all_categories as $cat) {
                        if ($cat->category_parent == 0 && $cat->term_id != 24) {
                            $category_id = $cat->term_id;
                            $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);

                            // get the image URL
                            $image = wp_get_attachment_url($thumbnail_id);
                    ?>

                            <li><a href="<?php echo home_url() ?>/<?php echo $cat->slug ?>"><img src=" <?php echo $image; ?>" alt="img"><span><?php echo $cat->name ?></span></a></li>
                            <?php


                            $args2 = array(
                                'taxonomy'     => $taxonomy,
                                'child_of'     => 0,
                                'parent'       => $category_id,
                                'orderby'      => $orderby,
                                'show_count'   => $show_count,
                                'pad_counts'   => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li'     => $title,
                                'hide_empty'   => $empty
                            );
                            $sub_cats = get_categories($args2);
                            if ($sub_cats) {
                                foreach ($sub_cats as $sub_category) {
                                    $thumbnail_id = get_term_meta($sub_category->term_id, 'thumbnail_id', true);

                                    // get the image URL
                                    $image = wp_get_attachment_url($thumbnail_id);
                            ?>

                                    <li><a href="<?php echo home_url() ?>/<?php echo $sub_category->slug ?>"><img src="<?php echo $image; ?>" alt="img"><span><?php echo  $sub_category->name; ?></span></a></li>
                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </ul>



                <!-- <ul>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-1.png" alt="img"><span>Tour</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-2.png" alt="img"><span>Vé Đạp Vịt</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-3.png" alt="img"><span>Mát xa người mù</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-4.png" alt="img"><span>Tour đi biển</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-5.png" alt="img"><span>Hoạt động cắm trại</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-6.png" alt="img"><span>Trải nghiệm văn hóa</span></a></li>
                    <li><a href="liveshow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-7.png" alt="img"><span>Công viên giải trí</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-8.png" alt="img"><span>Bể bơi</span></a></li>
                    <li><a href="liveshow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-9.png" alt="img"><span>Viện bảo tàng</span></a></li>
                    <li><a href="liveshow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-10.png" alt="img"><span>Công viên và vườn Bác thảo</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-11.png" alt="img"><span>Trại thú cưng</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-12.png" alt="img"><span>Cáp treo</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-1.png" alt="img"><span>Tour</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-2.png" alt="img"><span>Vé Đạp Vịt</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-3.png" alt="img"><span>Mát xa người mù</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-4.png" alt="img"><span>Tour đi biển</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-5.png" alt="img"><span>Hoạt động cắm trại</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-6.png" alt="img"><span>Trải nghiệm văn hóa</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-7.png" alt="img"><span>Công viên giải trí</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-8.png" alt="img"><span>Bể bơi</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-9.png" alt="img"><span>Viện bảo tàng</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-10.png" alt="img"><span>Công viên và vườn Bác thảo</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-11.png" alt="img"><span>Trại thú cưng</span></a></li>
                    <li><a href="tour"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon-12.png" alt="img"><span>Cáp treo</span></a></li>
                </ul> -->
            </div>
        </div>
        <div class="header__background--blur">
        </div>
        <div class="header__background--blur__fullview">
        </div>
        <div class="login__signup--box">
            <ion-icon class="login__signup--box__close" name="close-outline"></ion-icon>
            <div class="login__signup--box__container">
                <div class="login__signup--box__container--header">
                    <p>Đăng nhập/ Đăng ký</p>
                    <span>Nhập tài khoản và khám phá niềm vui của bạn ở bất cứ đâu</span>
                </div>
                <div class="login__sigup--box__container--form__box">
                    <div class="login__signup--box-container-form">
                        <div class="login__signup--box__container--number">
                            <div class="login__signup--box__container--number__main">
                                <div class="login__singup--box__container--number__main--btn">
                                    <div class="login__signup--box__container--main__btn--email" id="login__signup--box__container--main__btn--email">
                                        Địa chỉ Email
                                    </div>
                                    <div class="login__signup--box__container--main__btn--numberphone">
                                        Số điện thoại
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="login__signup--box__container--main__form">
                                        <label for="#">
                                            <select name="#" id="#">
                                                <option value="#">+84</option>
                                                <option value="#">+84</option>
                                                <option value="#">+84</option>
                                                <option value="#">+84</option>
                                                <option value="#"></option>
                                            </select>
                                        </label>
                                        <input type="text" placeholder="Số điện thoại">
                                    </div>
                                </form>
                                <div class="login__signup--box__container--main__note_1">Đăng nhập bằng số điện thoại chưa đăng ký để tạo tài khoản Đà Lạt review tất tần tật mới</div>
                                <button class="login__signup--box__container--main__btn firstBtn login2">Gửi mã xác nhận</button>
                                <div class="login__signup--box__container--main__note_2">Đăng nhập bằng mật khẩu</div>
                                <div class="login__signup--box__container--main__note_3">Hoặc đăng nhập bằng </div>
                                <div class="login__signup--box__container--main__bottom">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_logo.png" alt=""></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gg_logo.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="login__signup--box__container--email">
                            <div class="login__signup--box__container--email__main">
                                <div class="login__singup--box__container--email__main--btn">
                                    <div class="login__signup--box__container--main__btn--numberphone">
                                        Địa chỉ Email
                                    </div>
                                    <div class="login__signup--box__container--main__btn--email" id="login__signup--box__container--main__btn--numberphone">
                                        Số điện thoại
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="login__signup--box__container--main__form">
                                        <input type="text" placeholder="Địa chi Email">
                                    </div>
                                </form>
                                <button class="login__signup--box__container--main__btn firstBtn login1">Xác nhận</button>
                                <div class="login__signup--box__container--main__note_3">Hoặc đăng nhập bằng </div>
                                <div class="login__signup--box__container--main__bottom">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_logo.png" alt=""></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gg_logo.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="header__container--chatcall">
            <div class="header__box--chatcall">

                <p><ion-icon name="chatbubbles-outline" onclick="openChat()"></ion-icon></p>
            </div>
            <div class="header__container--chat  shadow">
                <div class="header__container--chat__box">
                    <div class="header__container--chat__box--title">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_Congty.png" alt="">
                            <span>Đà Lạt Review Tất Tần Tật</span>
                        </div>
                        <ion-icon class="header__container--chat__close" onclick="closeChat()" name="close-outline"></ion-icon>
                    </div>
                    <div class="header__container--chat__box--body">
                        <div class="header__container--chat__box--list">
                            <div class="header__container--chat__box--item chatbox__left">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_Congty.png" alt="">
                                <div class="header__container--chat__box--item__text">
                                    <p>Do ảnh hưởng của không khí lạnh tăng cường, khu vực phía Đông Bắc Bộ trời tiếp tục rét đậm, có nơi rét hại, khu vực phía Tây Bắc Bộ và Bắc Trung Bộ trời tiếp tục rét.</p>
                                    <span>20:00 - 29/2/2024</span>
                                </div>
                            </div>
                            <div class="header__container--chat__box--item chatbox__right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                <div class="header__container--chat__box--item__text ">
                                    <p>Dự báo xa hơn, từ 28-29/2, miền Bắc tiếp tục rét nhưng nền nhiệt tăng 2-3 độ C mỗi ngày, trời nhiều mây, có sương mù, mưa phùn. Sau đó khoảng 1-2/3, miền Bắc đón một đợt không khí lạnh có cường độ mạnh khiến rét đậm, rét hại trở lại, trời mưa nhỏ nhiều ngày..</p>
                                    <span>20:30 - 1/3/2024</span>
                                </div>
                            </div>
                            <div class="header__container--chat__box--item chatbox__left">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_Congty.png" alt="">
                                <div class="header__container--chat__box--item__text">
                                    <p>Do ảnh hưởng của không khí lạnh tăng cường, khu vực phía Đông Bắc Bộ trời tiếp tục rét đậm, có nơi rét hại, khu vực phía Tây Bắc Bộ và Bắc Trung Bộ trời tiếp tục rét.</p>
                                    <span>20:00 - 29/2/2024</span>
                                </div>
                            </div>
                            <div class="header__container--chat__box--item chatbox__right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                <div class="header__container--chat__box--item__text ">
                                    <p>Dự báo xa hơn, từ 28-29/2, miền Bắc tiếp tục rét nhưng nền nhiệt tăng 2-3 độ C mỗi ngày, trời nhiều mây, có sương mù, mưa phùn. Sau đó khoảng 1-2/3, miền Bắc đón một đợt không khí lạnh có cường độ mạnh khiến rét đậm, rét hại trở lại, trời mưa nhỏ nhiều ngày..</p>
                                    <span>20:30 - 1/3/2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__container--chat__box--input">
                        <textarea rows="1" cols="50" placeholder="Nhập câu hỏi..."></textarea>
                        <input type="submit" value="Gửi">
                    </div>
                </div>
            </div>
        </div> -->
    </div>