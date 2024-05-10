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

                    <a href="<?php echo home_url(); ?>/place">Tìm thêm khách sạn tại Đà Lạt</a>

                </div>
                <div class="detailHotelMobile__slides">
                    <div class="detailHotelMobile__slides--show">
                        <div class="detailHotelMobile__slides--show__item">
                             <?php

                            $attachment_ids = $product->get_gallery_attachment_ids();
                            $nubimg = 1;
                            
                            foreach( $attachment_ids as $attachment_id ) {

                                $nameimg = 'img'.$nubimg;
                                $image_link =wp_get_attachment_url( $attachment_id );
                                //Get image show by tag <img> 
                                echo '<img class="thumb '.$nameimg.'" src="' . $image_link . '">';
                                $nubimg++; 
                            }
                            ?>
                             <?php
                            for($i = 1; $i <= count($attachment_ids); $i++){
                                ?><script>
                                    const btnimg<?php echo $i; ?> = document.querySelector(`.img<?php echo $i; ?>` );

                                    btnimg<?php echo $i; ?>.addEventListener('click', ()=>{
                                    slideIndex = <?php echo $i; ?>;
                                    location.hash = '#'+slideIndex;
                                    img = slideIndex;
                                    detailHotelBody.classList.add('listDetailHotelSlides')
                                    detailHotelBody.classList.add('detailHotelBlur')
                                    console.log(slideIndex);
                                    showSlides(slideIndex);
                                    })
                                    </script>
                                <?php
                            }
                        ?>
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
                <?php

                    $attachment_ids = $product->get_gallery_attachment_ids();
                    $nubimg = 1;

                    foreach( $attachment_ids as $attachment_id ) {

                        $nameimg = 'imgpc'.$nubimg;
                        $image_link =wp_get_attachment_url( $attachment_id );
                        //Get image show by tag <img> 
                        echo '<img class="thumb '.$nameimg.'" src="' . $image_link . '">';
                        $nubimg++; 
                    }
                    ?>
                    <?php
                    for($i = 1; $i <= count($attachment_ids); $i++){
                        ?>
                        <script>
                            const btnimgpc<?php echo $i; ?> = document.querySelector(`.imgpc<?php echo $i; ?>` );
                            btnimgpc<?php echo $i; ?>.addEventListener('click', ()=>{
                            slideIndex = <?php echo $i; ?>;
                            location.hash = '#'+slideIndex;
                            img = slideIndex;
                            detailHotelBody.classList.add('listDetailHotelSlides')
                            detailHotelBody.classList.add('detailHotelBlur')
                            console.log(slideIndex);
                            showSlides(slideIndex);
                            })
                            </script>
                        <?php
                    }
                    ?>


                   
                </div>
                <div class="detailHotel__info">
                    <div class="detailHotel__info--wapper">
                        <div class="detailHotel__info--wapper__left">
                            <h1>
                                <?php the_title() ?>
                              
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
                                               

                                            </div>
                                         

                                            <?php
                                            $args = array('post_id' => $product->id);
                                            $comments = get_comments($args);
                                            wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                           

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