<?php
/**
 * Template Name: TemplateHome
 * Display Only home template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */

get_header(); ?>

    <section class="home">
        <!-- home header -->
        <div class="header__content--bottom shadow">
            <?php wc_get_template('menudesktop.php'); ?>
        </div>
        <!-- slider home -->
        <div class="home__slider">
            
           <div class="home__slider--show">
            <div class="home__slider--list__images">
            <?php  get_template_part('templates/template-home/slider','banner'); ?>
            </div>
            <div class="home__slider--btns">
                <div class="home__slider--btn__left btn-slider"><ion-icon name="chevron-back"></ion-icon></div>
                <div class="home__slider--btn__right btn-slider"><ion-icon name="chevron-forward"></ion-icon></div>
            </div>
            <div class="home__slider--contents">
                <p class="home__slider--content__title">đà lạt trọn niềm vui</p>
                <p class="home__slider--content__des">Khám phá niềm vui của bạn mọi lúc, mọi nơi - từ chuyến du lịch
                    ngẫu hứng tới những cuộc phiêu lưu khắp thế giới</p>
                <div class="home__slider--searchbox">
                   
                        <?php wc_get_template('templates/template-search/searchhome.php'); ?>
                   
                
                </div>
            </div>
           </div>

        </div>
        <!-- banner & box search mobile home -->
       <div class="home__banner--search__mobile">
            <div class="home__banner--search__mobile--box">
                <div class="home__search--box">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" placeholder="Tìm kiếm theo địa điểm, hoạt động">
                </div>
                <div class="home__banner--mobile">
                     <div class="home__banner--mobile__top">
                        <a href="category/liveshow/" class="home__banner--mobile__top--item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-menu-item-5.png" alt="img">
                            <span>Tour & Trải nghiệm</span>
                        </a>
                        <a href="category/tour/" class="home__banner--mobile__top--item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-menu-item-4.png" alt="img">
                            <span>Vé tham quan</span>
                        </a>
                        <a href="category/hotel/" class="home__banner--mobile__top--item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-menu-item-3.png" alt="img">
                            <span>Chỗ nghỉ</span>
                        </a>
                        <a href="category/motorbike/" class="home__banner--mobile__top--item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-menu-item-2.png" alt="img">
                            <span>Di chuyển</span>
                        </a>
                        <a href="category/car/" class="home__banner--mobile__top--item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-menu-item-1.png" alt="img">
                            <span>Thuê xe tự lái</span>
                        </a>
                     </div>
                     <a href="#" class="home__banner--mobile__bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-moblie-all-category.png" alt="img">
                        <span>Tất cả các mục</span>
                     </a>
                </div>
            </div>
       </div>
       <!-- home sale banner -->
       <div class="home__sale--banner">
        <div class="home__sale--banner__container">
            <div class="home__sale--banner__container--header">
                <p>Ưu đãi hấp dẫn</p>
            </div>
            <?php get_template_part('templates/template-home/archive', 'voucher'); ?>

        </div>
    </div>
    <!-- home info banner -->
    <div class="home__info--banner">
        <div class="home__info--banner__container">
            <div class="home__info--banner__container--header">
                <p>Vì sao bạn nên chọn Đà Lạt Review</p>
            </div>
            <div class="home__info--banner__container--list">
                <div class="home__info--banner__container--list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-info-banner-img-3.png"
                        alt="img">
                    <p>Vô vàn lựa chọn</p>
                    <span>Tìm kiếm niềm vui với gần nửa triệu điểm tham quan, phòng khách sạn và nhiều trải nghiệm thú
                        vị</span>
                </div>
                <div class="home__info--banner__container--list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-info-banner-img-2.png"
                        alt="img">
                    <p>Chơi vui, giá tốt</p>
                    <span>Trải nghiệm chất lượng với giá tốt. Tích luỹ Klook credit để được thêm ưu đãi</span>
                </div>
                <div class="home__info--banner__container--list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-info-banner-img-1.png"
                        alt="img">
                    <p>Dễ dàng và tiện lợi</p>
                    <span>Đặt vé xác nhận ngay, miễn xếp hàng, miễn phí hủy, tiện lợi cho bạn tha hồ khám phá</span>
                </div>
                <div class="home__info--banner__container--list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-info-banner-img-3.png"
                        alt="img">
                    <p>Đáng tin cậy</p>
                    <span>Tham khảo đánh giá chân thực. Dịch vụ hỗ trợ tận tình, đồng hành cùng bạn mọi lúc, mọi
                        nơi</span>
                </div>
            </div>
        </div>
    </div>
    <!-- home contact banner -->
    <div class="home__contact--banner">
        <div class="home__contact--banner__container">
            <div class="home__contact--banner__container--header">
                <p>Liên hệ với chúng tôi</p>
            </div>
            <div class="home__contact--banner__container--list">
                <div class="home__contact--banner__container--content">
                    <div class="home__contact--banner__container--content__info">
                        <p>Để lại thông tin liên hệ của bạn để được tư vấn thêm</p>
                        <span>Hệ thống tư vấn trực tuyến của Đà Lạt Review tất tần tật giúp bạn tìm ra các trải nghiệm
                            du lịch Đà Lạt phù hợp với bản thân.</span>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Nhập tên của bạn">
                        <input type="text" placeholder="Nhập sđt hoặc email">
                    </form>
                    <button><span>Gửi ngay</span> <ion-icon name="paper-plane"></ion-icon></button>
                </div>
                <div class="home__contact--banner__container--list__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner-img-1.png"
                        alt="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- home product hot banner -->
    <div class="home__product--banner">
        <div class="home__product--banner__container">
            <div class="home__product--banner__container--header">
                <p>Sản phẩm nổi bật</p>
            </div>
            <?php
            get_template_part('templates/template-home/archive', 'product'); ?>
        </div>

    </div>


    <div class="firstTag__internal--desktop">
        <div class="firstTag__internal--wrap">
            <h2 class="firstTag__internal--title">Khám phá thêm trên Đà Lạt Review !</h2>

            <!-- module-banner -->
            <div class="firstTag__internal--content">

                <h3 class="firstTag__internal--header">
                    Trải nghiệm tuyệt vời tại Đà Lạt
                </h3>
                <?php
                get_template_part('templates/template-home/first', 'tag'); ?>

            </div>
        </div>
    </div>

    <div class="firstTag__internal--mobile">

        <div class="firstTag__internal--wrap">
            <h2 class="firstTag__internal--title">Hấp dẫn không kém</h2>

            <!-- module-banner -->
            <div class="firstTag__internal--content">
                <h3 class="firstTag__internal--header">
                    Khám phá các hoạt động phổ biến
                </h3>
                <ul class="firstTag__internal--wrapper">
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Warner Bros Studio Tour Tokyo</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Ba Na Hills</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Grand World Phú QuốC</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">xe Huế- Đà Nẵng</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Vinwonders Phú QuốC</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Saigon Skydeck</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Taipei 101 Ticket</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Garden By The Bay</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Vinpearl Safari Phú QuốC</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Xe Limousine Đi Vũng Tàu</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Puppy Farm</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Vé Cáp Treo Núi Bà Đen</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Xe Limousine Hà NộI Hạ Long</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Universal Studios Japan</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Artscience Museum</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Tropicana Park</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Sun World Hạ Long</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">London Eye Ticket</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Limousine Hà NộI Ninh Bình</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Universal Singapore</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">BảO Tàng Thế GiớI Cà Phê</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Sagrada Familia</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Bts Skytrain Bangkok</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Ký ỨC HộI An</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Vinwonders Nam HộI An</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Cung ĐiệN Versailles</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Fresh Garden Đà LạT</a>
                    </li>
                    <li class="firstTag__internal--unit">
                        <a href="" class="firstTag__unit--suggestion">Landmark 81 Skyview</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>