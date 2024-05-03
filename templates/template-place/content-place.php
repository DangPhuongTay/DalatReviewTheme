<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $comment; ?>
        <?php 
global $product;
$available_variations = $product->get_available_variations();?>
        <div class="detail__hotel--wrap">
            
            <!-- slide- area -->
            <div class="slide__img--box">
                <div class="container__slides">
                <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
                <div class="image_empty">
                <?php if (!function_exists('wc_get_gallery_image_html')) {
                        return;
                    }
                    $attachment_ids = $product->get_gallery_image_ids();
                    if ($attachment_ids && $product->get_image_id()) { ?>
                        <!-- <div class="mySlides">
                        <div data-thumb="" data-thumb-alt="" class="woocommerce-product-gallery__image">
                            <a href="">
                                <img width="600" height="338" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" data-large_image="http://localhost/wordpress/wp-content/uploads/2024/04/z5385579883187_f04897b50e299e7c4fa29a67112b402e.jpg" data-large_image_width="2560" data-large_image_height="1440" decoding="async" loading="lazy">
                        </a>
                        </div>
                        </div> -->
                        
                
                        <?php foreach ($attachment_ids as $attachment_id) {
                            ?>
                            <div class="mySlides">
                          
                                <?php
                                    echo apply_filters(
                                        'woocommerce_single_product_image_thumbnail_html',
                                        wc_get_gallery_image_html($attachment_id),
                                        $attachment_id
                                    ); 
                                ?>

                            </div>
                            <?php
                        }

                    } ?>

                </div>   

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="currentSlide(1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>


                </div>
            </div>

            <div class="secondDropDown">
                <?php get_template_part('templates/template-search/searchhotel'); ?>

            </div>
            <div class="detailHotel__banner">
                <div class="detailHotel__top--link">
                    <ion-icon name="chevron-back-outline"></ion-icon>

                    <a href="<?php echo home_url(); ?>/">Tìm thêm khách sạn tại Đà Lạt</a>

                </div>
                <div class="detailHotelMobile__slides">
                    <div class="detailHotelMobile__slides--show">
                        <div class="detailHotelMobile__slides--show__item" onclick="btnDetailHotelSlides( )">
                            <?php


                            $attachment_ids = $product->get_gallery_image_ids();

                            if ($attachment_ids && $product->get_image_id()) {
                                foreach ($attachment_ids as $attachment_id) {
                                    ?>

                                    <?php
                                    echo apply_filters('woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html($attachment_id), $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                                    ?>

                                    <?php
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail__car--map">
                <div class="detail__car--map__header">
                    <ion-icon class="detail__car--map__header--icon" name="close-outline" onclick="closeMapCarFormBtn()">
                    </ion-icon> <span>CHỌN ĐỊA ĐIỂM TRÊN BẢN ĐỒ</span>
                </div>
                <div class="detail__car--map__body">
                    <iframe class="detail__car--map__body--iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1160.4162387727945!2d108.4411451931558!3d11.963462031245864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112c5ba5970a1%3A0x900519971f498118!2zMTA4IEzDvSBOYW0gxJDhur8sIFBoxrDhu51uZyA4LCBUaMOgbmggcGjhu5EgxJDDoCBM4bqhdCwgTMOibSDEkOG7k25nIDY2MTA2!5e0!3m2!1svi!2s!4v1706237902739!5m2!1svi!2s"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="detail__car--map__body--input">
                        <input type="text" placeholder="Xem địa chỉ">
                        <input type="submit" value="XÁC NHẬN" onclick="closeMapCarFormBtn()">
                    </div>
                </div>
            </div>
            <section class="detailHotel">

                <div class="detailHotel__img">
                    <div class="detailHotel__img--left"  onclick="btnDetailHotelSlides()">
                      
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
                    </div>
                    <div class="detailHotel__img--right">

                        <?php


                        $attachment_ids = $product->get_gallery_image_ids();

                        if ($attachment_ids && $product->get_image_id()) {
                            foreach ($attachment_ids as $attachment_id) {
                                ?>
                                
                                <?php
                                echo apply_filters('woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html($attachment_id), $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                             
                                ?>

                                <?php
                            }
                        } ?>
                    </div>
                </div>
                <div class="detailHotel__info">
                    <div class="detailHotel__info--wapper">
                        <div class="detailHotel__info--wapper__left">
                            <h1>
                                <?php the_title() ?>

                               
    
<?php

    $attachment_ids = $product->get_gallery_attachment_ids();
    $nubimg = 1;
    $nameimg = 'img'.$nubimg;
    echo $nameimg;
    foreach( $attachment_ids as $attachment_id ) {
        $image_link =wp_get_attachment_url( $attachment_id );
        //Get image show by tag <img> 
        echo '<img class="thumb '.$nameimg.'" src="' . $image_link . '">';
       $nameimg++; 
    }
?>

            <!-- banner area -->
                            </h1>
                            <!-- <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon> -->
                            
                        </div>
                        <div class="detailHotel__info--wapper__right">
                            <p class="detailHotel__info--wapper__right--name">
                                <span class="detailHotel__info--wapper__right--price">


                                    <?php echo $product->get_price_html(); ?>

                                    
                                </span>
                                <span class="detailHotel__info--wapper__right--unit">Mỗi đêm</span>
                            </p>
                            <p class="detailHotel__info--wapper__right--tip"></p>
                            <a href="#detailHotel__selectRoom" class="detailHotel__info--wapper__btn firstBtn">Chọn phòng</a>
                        </div>
                        <div class="fourProductList__wrapper--info__review list__wrapper">
                            <!-- <div class="fourProductList__wrapper--info__score">
                                <span>4.4</span>
                                <span class="slash">/</span>
                                <span>5</span>
                            </div>
                            <div class="fourProductList__wrapper--info__desc">Rất tốt</div> -->
                            <div class="fourProductList__wrapper--info__count" onclick="btnDetailHotelRate()"><?php echo $review_count = $product->get_review_count(); ?>  Bình luận</div>
                        </div>
                    </div>
                    <div class="detailHotel__info--summary">
                        <div class="detailHotelMobile__info--summary sevice">
                            <?php
                            $nub = 0;
                            foreach ($product->attributes as $taxonomy => $attribute) {
                                foreach ($attribute->get_terms() as $term) {
                                    if ($term->taxonomy == 'pa_tien-ich' && $nub < 2) {
                                        $nub = $nub + 1;
                                        ?>

                                        <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <span>
                                                <?php echo $term->name; ?>
                                            </span>
                                        </div>
                                        <?php
                                    } else {
                                        echo '';
                                    }
                                }
                            }
                            ?>
                            <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                        </div>
                        <div class="detailHotel__info--summary__left" onclick="btnDetailHotelRate()">
                            <div class="detailHotel__info--summary__left--top">
                                <div class="detailHotel__info--summary__left--top__rating">
                                    <span>Đánh giá</span>
                                </div>
                                <div class="detailHotel__info--summary__left--top__score">
                                   
                                    <span><?php echo $review_count = $product->get_review_count(); ?> Bình luận</span>
                                </div>
                            </div>
                            <div class="detailHotel__info--summary__left--bot">
                                <?php
                                $number_of_reviews = 1;
                                $args = array('number' => $number_of_reviews, 'post_id' => $product->id);
                                $comments = get_comments($args);
                                wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                                ?>

                            </div>
                        </div>
                        <div class="detailHotel__info--summary__right" onclick="openMapsCarFormBtn()">
                            <div class="detailHotel__info--summary__right--address">
                                <span> <ion-icon name="location-outline"></ion-icon>
                                    <?php
                                    
                                    foreach ($product->attributes as $taxonomy => $attribute) {
                                       
                                       foreach ($attribute->get_terms() as $term) {
                                           if($term ->taxonomy == 'pa_dia-chi'){
                                         echo $term->name ;
                                         
                                               }else{
                                           echo '';
                                       }
                                       }
                                    } ?></span>
                                <!-- <div class="detailHotel__info--summary__right--location">
                                    <ion-icon name="train-outline"></ion-icon>
                                    <p>Ga Đà Lạt, 1.1km</p>
                                </div> -->
                            </div>
                            <div class="detailHotel__info--summary__right--map">
                                <span>Xem bản đồ</span>
                                <ion-icon name="location-sharp"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__list">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title" id="detailHotel__selectRoom">
                                <h2>Chọn phòng của bạn</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body">
                            <p class="detailHotel__list--body__desc">Khám phá những lựa chọn tuyệt vời nhất. Mức giá hiển thị là
                                mức giá cho mỗi phòng mỗi đêm bao gồm thuế phí</p>
                            <!-- <p class="detailHotel__list--body__fitter">Lọc để tìm các lựa chọn phù hợp:</p>
                            <div class="detailHotel__list--body__checkbox">
                                <div class="detailHotel__list--body__checkbox--group">
                                    <input type="checkbox" id="checkbox--group">
                                    <label class="detailHotel__list--body__checkbox--lable" for="checkbox--group">
                                        <ion-icon name="gift-outline"></ion-icon>
                                        <p>Ưu đãi của khách sạn(8)</p>
                                    </label>
                                </div>
                            </div> -->
                            <div class="detailHotel__list--body__select">
                                <div class="detail__list--body__select--rom">
                                    <div class="primary__dropdown">
                                        <div class="primary__dropdown--button detail__list--body__select--rom__container">
                                            <span>2 loại phòng</span>
                                            <div class="primary__dropdown--icon">
                                                <ion-icon name="chevron-down-outline"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="detail__list--body__select--rom__item">
                                            <ul class=" primary__dropdown--content__list" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="primary__dropdown--content__list--item" href="#">Phòng Deluxe (Từ
                                                        ₫ 20XXXXX)</a></li>
                                                <li><a class="primary__dropdown--content__list--item" href="#">Phòng Đôi (Từ ₫
                                                        20XXXXX)</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="detail__list--body--select__tip">
                                    Có <b>4</b> mức giá cho loại phòng này
                                </div> -->
                            </div>
                            <!-- <div class="detailHotel__list--body__list--wrapper">
                                <div class="detailHotel__list--body__list--wrapper__icon">
                                    <ion-icon name="close-outline"></ion-icon>
                                </div>

                                <div class="detailHotel__list--body__list--wrapper__container--box">
                                    <nav>
                                        <a href="#detailHotel__room">Phòng Deluxe</a>
                                        <a href="#detailHotel__include">Bao gồm</a>
                                        <a href="#detailHotel__prices">Giá chi tiết</a>
                                        <a href="#detailHotel__location">Chính sách chỗ lưu trú</a>
                                    </nav>
                                    <div class="detailHotel__list--body__list--wrapper__container">
                                        <div class="header__list--header__title" id="detailHotel__room">
                                            <h2>Phòng Deluxe</h2>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrappper__img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/detailHotel1.avif"
                                                alt="">
                                        </div>
                                        <div class="detailHotel__rate--content__list">
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
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular">
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="bar-chart-outline"></ion-icon>
                                                <p>25.0 m²</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="albums-outline"></ion-icon>
                                                <p>Tầm nhìn hướng sân trong</p>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--text">
                                            Tiện ích Phòng
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility">
                                            <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                <p>Không hút thuốc</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                <p>Quạt trần</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                <p>TV</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                <p>Dịch vụ dọn phòng</p>
                                            </div>
                                        </div>
                                        <div class="header__list--header__title" id="detailHotel__include">
                                            <h2>Bao gồm</h2>
                                        </div>
                                        <div
                                            class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                            <ion-icon name="car-sport-outline"></ion-icon>
                                            <span>Đỗ xe miễn phí</span>
                                        </div>
                                        <div class="header__list--header__title" id="detailHotel__prices">
                                            <h2>Giá chi tiết</h2>
                                        </div>
                                        <div class="detailHotel__price--item__top">
                                            <div class="detailHotel__lable--section">
                                                <span>1 phòng x 1 đêm</span>
                                            </div>
                                            <span class="detailHotel__value--section">
                                                đ<b>615</b>
                                            </span>
                                        </div>
                                        <div class="detailHotel__price--item__top">
                                            <div class="detailHotel__lable--section">
                                                <span>Thuế và phí</span>
                                            </div>
                                            <span class="detailHotel__value--section">
                                                đ<b>615</b>
                                            </span>
                                        </div>
                                        <div class="detailHotel__price">
                                            <div class="detailHotel__price--item__top">
                                                <span>Thanh toán online</span>
                                                <p>
                                                    <i>Tổng</i>
                                                    <b>₫ 529,901</b>
                                                </p>
                                            </div>
                                            <div class="detailHotel__price--tip">
                                                <span>Đã bao gồm thuế</span>
                                            </div>
                                        </div>
                                        <div class="header__list--header__title" id="detailHotel__location">
                                            <h2>Chính sách chỗ lưu trú</h2>
                                        </div>
                                        <div class="detailHotel__policy--section">
                                            <div class="detailHotel__policy--section__title">Xác nhận tức thời</div>
                                            <div class="detailHotel__policy--section__content">Nhận xác nhận đặt phòng chỉ trong
                                                vài phút</div>
                                        </div>
                                        <div class="detailHotel__policy--section">
                                            <div class="detailHotel__policy--section__title">Không hoàn tiền</div>
                                            <div class="detailHotel__policy--section__content">Sau khi xác nhận, đơn hàng của
                                                bạn không thể huỷ hoặc sửa đổi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detailHotel__footer">
                                    <div class="detailHotel__footer--price">
                                        <div class="detailHotel__footer--price__info">
                                            <div class="detailHotel__footer--price__info--desc">đ <b>20XXXXX</b></div>
                                            <div class="detailHotel__footer--price__info--unit">Mỗi đêm</div>
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                        </div>
                                        <a class="firstBtn" <?php wc_get_template('loop/add-to-cart.php'); ?> </div>
                                    </div>
                                </div> -->

                                <div class="detailHotel__list--body__list">
                                    <?php

                                    get_template_part('templates/template-place/item', 'detailhotel');
                                    ?>

                               

                                        
                                </div>
                                <div class="detailHotel__backgroup--blur"></div>

                                <div class="detailHotel__list--body__reviews--wrap">
                                    <div class="detailHotel__list--body__reviews--wrap__icon">
                                        <ion-icon name="close-outline"></ion-icon>
                                    </div>
                                    <div class="detailHotel__list--body__reviews">
                                        <div class="detailHotel__list--header">
                                            <div class="header__list--header__title">
                                                <h2>Đánh giá</h2>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content">
                                            <div class="detailHotel__list--body__reviews--content__overview ">
                                                <div class="detailHotel__list--body__reviews--content__overview--info">
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--info__score">
                                                        <span>5.0</span>
                                                        <span>/5</span>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--info__fomart">
                                                        <p>Tuyệt vời</p>
                                                        <span><?php echo $review_count = $product->get_review_count(); ?> Bình luận</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="detailHotel__list--body__reviews--content__overview--category">
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item">
                                                        <div>Vị trí</div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                                5.0</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item">
                                                        <div>Vị trí</div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                                5.0</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item">
                                                        <div>Vị trí</div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                                5.0</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item">
                                                        <div>Vị trí</div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                                5.0</div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                            </div>
                                            <!-- <div class="detailHotel__list--body__reviews--content__swiper">
                                                <div class="detailHotel__list--body__reviews--content__swiper--item">
                                                    <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                        Tất cả
                                                    </div>
                                                    <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                        Có hình
                                                        ảnh</div>
                                                    <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                        4.5+</div>
                                                    <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                        3.0+</div>
                                                </div>
                                            </div> -->

                                            <?php
                                            $args = array('post_id' => $product->id);
                                            $comments = get_comments($args);
                                            wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                                            ?>


                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="detailHotel__list--body__reviews">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title">
                                            <h2>Đánh giá</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content">
                                        <div class="detailHotel__list--body__reviews--content__overview">
                                            <a class="detailHotel__list--body__reviews--content__overview--link"
                                                onclick="btnDetailHotelRate()">Đọc tất cả đánh giá</a>
                                            <div class="detailHotel__list--body__reviews--content__overview--info">
                                                <div class="detailHotel__list--body__reviews--content__overview--info__score">
                                                    <span>5.0</span>
                                                    <span>/5</span>
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__overview--info__fomart">
                                                    <p>Tuyệt vời</p>
                                                    <span><?php echo $review_count = $product->get_review_count(); ?> Bình luận</span>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category">
                                                <div
                                                    class="detailHotel__list--body__reviews--content__overview--category__item">
                                                    <div>Vị trí</div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                            5.0</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="detailHotel__list--body__reviews--content__overview--category__item">
                                                    <div>Vị trí</div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                            5.0</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="detailHotel__list--body__reviews--content__overview--category__item">
                                                    <div>Vị trí</div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                            5.0</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="detailHotel__list--body__reviews--content__overview--category__item">
                                                    <div>Vị trí</div>
                                                    <div
                                                        class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway">
                                                            </div>
                                                            <div
                                                                class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">
                                                            5.0</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__swiper">
                                            <div class="detailHotel__list--body__reviews--content__swiper--item">
                                                <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                    Tất cả</div>
                                                <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                    Có hình ảnh
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                    4.5+</div>
                                                <div class="detailHotel__list--body__reviews--content__swiper--items">
                                                    3.0+</div>
                                            </div>
                                        </div>
                                        <div class="" onclick="btnDetailHotelRate()">
            
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="detailHotel__list--body__detail">
                                                    <div class="detailHotel__list--header">
                                                        <div class="header__list--header__title">
                                                            <h2>Điểm tham quan gần đó</h2>
                                                        </div>
                                                    </div>
                                                    <div class="detailHotel__list--body__detail--content">
                                                        <div class="detailHotel__list--body__detail--content__wrap">
                                                            <div class="detailHotel__list--body__detail--content__item">
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Chùa
                                                                        Thiên Vương</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        200m
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Ha Dong
                                                                        Flower Village</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        800m
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Câu lạc
                                                                        bộ golf Dalat Palace</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        1.5km</div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Gasoline
                                                                        tree Ta Nung</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        11.6km</div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Tượng
                                                                        phật vàng</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        300m
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Vườn Ánh
                                                                        Sáng Lumiere</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        1.3km</div>
                                                                </div>
                                                                <div
                                                                    class="detailHotel__list--body__detail--content__item--wrap">
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__left">
                                                                        Cathedral of Da Lat Diocese</div>
                                                                    <div
                                                                        class="detailHotel__list--body__detail--content__item--wrap__distance">
                                                                        3.3km</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="detailHotel__list--body__detail--content__footer"
                                                        onclick="openMapsCarFormBtn()">
                                                        <span>Xem bản đồ</span>
                                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                                    </div>
                                                </div> -->

                                <div class="detailHotel__list--body__facility">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title">
                                            <h2>Dịch vụ và cơ sở vật chất</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__facility--content">
                                        <div class="detailHotel__list--body__facility--content__item">
                                            <div class="detailHotel__list--body__facility--content__item--title">
                                                Tiện nghi phổ biến nhất</div>
                                            <div
                                                class="detailHotel__list--body__facility--content__item--content boder__bottom">
                                                <?php
                                                foreach ($product->attributes as $taxonomy => $attribute) {
                                                    foreach ($attribute->get_terms() as $term) {
                                                        if ($term->taxonomy == 'pa_tien-ich') {
                                                            ?>
                                                            <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                                <span>
                                                                    <?php echo $term->name; ?>
                                                                </span>
                                                            </div>
                                                            <?php
                                                        } else {
                                                            echo '';
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--footer sevice">
                                        <button class="detailHotel__list--footer__btn "><span>Xem tất cả các
                                                tiện
                                                nghi</span></button>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__policies">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title">
                                            <h2>Chính sách chỗ lưu trú</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__policies--content">
                                        <?php echo $product->get_description(); ?>
                                    </div>


                                </div>
                                <div class="detailHotelMobile__list--body__service--container">
                                    <div class="detailHotelMobile__list--body__service--body">
                                        <nav>
                                            <a href="#detailHotelMobile__facility">Dịch vụ và cơ sở vật chất</a>
                                            <a href="#detailHotelMobile__policies">Chính sách chỗ lưu trú</a>
                                            <a href="#detailHotelMobile__description">Mô tả</a>
                                        </nav>
                                        <div class="detailHotelMobile__list--body__service--body__content">
                                            <div class="detailHotel__list--body__facility">
                                                <div class="detailHotel__list--header">
                                                    <div class="header__list--header__title" id="detailHotelMobile__facility">
                                                        <h2>Dịch vụ và cơ sở vật chất</h2>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--body__facility--content">
                                                    <div class="detailHotel__list--body__facility--content__item">
                                                        <div class="detailHotel__list--body__facility--content__item--title">
                                                            Tiện
                                                            nghi phổ biến nhất</div>
                                                        <div
                                                            class="detailHotel__list--body__facility--content__item--content boder__bottom">
                                                            <?php
                                                            foreach ($product->attributes as $taxonomy => $attribute) {
                                                                foreach ($attribute->get_terms() as $term) {
                                                                    if ($term->taxonomy == 'pa_tien-ich') {
                                                                        ?>
                                                                        <div
                                                                            class="detailHotel__list--body__facility--content__item--content--subitem">
                                                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                                            <span>
                                                                                <?php echo $term->name; ?>
                                                                            </span>
                                                                        </div>
                                                                        <?php
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--footer">
                                                    <button class="detailHotel__list--footer__btn"><span>Xem tất
                                                            cả các tiện
                                                            nghi</span></button>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__policies">
                                                <div class="detailHotel__list--header">
                                                    <div class="header__list--header__title" id="detailHotelMobile__policies">
                                                        <h2>Chính sách chỗ lưu trú</h2>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--body__policies--content">
                                                    <?php echo $product->get_description(); ?>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__description">
                                                <div class="detailHotel__list--header">
                                                    <div class="header__list--header__title"
                                                        id="detailHotelMobile__description">
                                                        <h2>Mô tả</h2>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--body__description--text">
                                                    <?php echo $product->get_short_description(); ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="detailHotelMobie__footer">
                                        <div class="firstBtn">Chọn phòng</div>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__description">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title">
                                            <h2>Mô tả</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__description--text">
                                        <?php echo $product->get_short_description(); ?>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__similar">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title">
                                            <h2>Chỗ lưu trú gần đó</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__similar--content">
                                        <div class="fourProductList__wrapper">
                                            <?php get_template_part('templates/template-place/archive', 'stay'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="detailHotel__list--body__link">
                                    <div class="detailHotel__list--body__link--inner">
                                        <span class="detailHotel__list--body__link--inner__item">
                                            <a href="<?php echo home_url(); ?>">Trang chủ</a>
                                        </span>
                                        <span class="detailHotel__list--body__link--inner__divider">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </span>
                                        <span class="detailHotel__list--body__link--inner__item">
                                            <a href="<?php echo home_url(); ?>/place">Place</a>
                                        </span>
                                        <span class="detailHotel__list--body__link--inner__divider">
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </span>
                                        <span class="detailHotel__list--body__link--inner__item">
                                            <a class="last__link" href="#"><?php the_title(); ?></a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <?php wc_get_template('templates/template-home/home-contact.php'); ?>
                        </div>
                    </div>
            </section>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detailHotel.js"></script>
        <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/secondDropdown.js"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail_car.js"></script>


        <?php
    }

}

get_footer(); ?>