<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $product;
 ?>


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
        <section class="detail__tour">
            <div class="detail__tour--content__right--mobile shadow">
                <p><span>đ</span> <span
                        class="detail__tour--content__right--price"><?php echo $product->get_price_html(); ?></span></p>
                <div class="detail__tour--content__right--mobile__btn firstBtn">
                    <?php wc_get_template('loop/add-to-cart.php'); ?>
                </div>
            </div>
            <div class="detail__tour--container">
                <div class="detail__tour--header">
                    <div class="detail__tour--header__link">
                        <?php
                        $category = get_the_terms($product->term_id, 'product_cat');

                        foreach ($category as $term) {
                            $categoryname = $term->name;
                            $categoryslug = $term->slug;
                        }
                        ?>
                        <a href="<?php echo home_url(); ?>">Trang chủ</a> > <a href="<?php echo $categoryslug; ?>">
                            <?php echo $categoryname ?></a>> <a href=""> <?php the_title(); ?></a>
                    </div>
                    <div class="detail__tour--header__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="detail__tour--header__info">
                        <ion-icon name="location-outline"></ion-icon>
                       
                    </div>
                </div>


                <div class="">

                    <!-- =========================================================================== -->

                    <div class="detail__tour--img">
                        <?php

                        $attachment_ids = $product->get_gallery_attachment_ids();
                        $nubimg = 1;

                        foreach ($attachment_ids as $attachment_id) {

                            $nameimg = 'img' . $nubimg;
                            $image_link = wp_get_attachment_url($attachment_id);
                            //Get image show by tag <img> 
                            echo '<img class="thumb ' . $nameimg . '" src="' . $image_link . '">';
                            $nubimg++;
                        }
                        ?>
                        <?php
                        for ($i = 1; $i <= count($attachment_ids); $i++) {
                            ?>
                            <script>
                                const btnimg<?php echo $i; ?> = document.querySelector(`.img<?php echo $i; ?>`);

                                btnimg<?php echo $i; ?>.addEventListener('click', () => {
                                    slideIndex = <?php echo $i; ?>;
                                    location.hash = '#' + slideIndex;
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

                        <?php

                        $attachment_ids = $product->get_gallery_attachment_ids();
                        $nubimg = 1;

                        foreach ($attachment_ids as $attachment_id) {

                            $nameimg = 'imgtour' . $nubimg;
                            $image_link = wp_get_attachment_url($attachment_id);
                            //Get image show by tag <img> 
                            echo '<img class="thumb' . $nameimg . '" src="' . $image_link . '">';
                            $nubimg++;
                        }
                        ?>
                        <?php
                        for ($i = 1; $i <= count($attachment_ids); $i++) {
                            ?>
                            <script>
                                const btnimg<?php echo $i; ?> = document.querySelector(`.imgtour<?php echo $i; ?>`);

                                btnimg<?php echo $i; ?>.addEventListener('click', () => {
                                    slideIndex = <?php echo $i; ?>;
                                    location.hash = '#' + slideIndex;
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

                        <!-- ========================= -->

                    </div>


                    <!-- ------------------------------------------------------------------------ -->
                </div>
                               <!-- ----------------------------------Start banner type services------------------------------------------------------ -->
                            <div class="detail__tour--content">
                                    <div class="detail__tour--content__left detail__tour--services__left">
                
                                    <?php
                
                get_template_part('templates/template-tour/tour', 'services');
                ?>
                                        
                                    </div>
                                </div>
                <!-- ===================================end================================================== -->
  
                
                <div class="detail__tour--content">
                    <div class="detail__tour--content__left">

                        <div class="detail__tour--content__left--header">
                            Về dịch vụ này
                        </div>
                        <div class="detail__tour--content__left--service">
                            <?php echo $product->get_description(); ?>
                        </div>



                        
                        <div class="detail__tour--content__left--header">
                            Tiết kiệm hơn khi du lịch Đà Lạt
                        </div>
                        <div class="detail__tour--content__left--sale">
                            <div class="detail__tour--content__left--sale__left">
                                <span class="detail__tour--content__left--sale__header">
                                    Ưu đãi ngập tràn
                                </span>
                                <div class="detail__tour--content__left--sale__title">
                                    <p>Du lịch Đà Lạt</p>
                                    <span>Bao gồm các chuyến đi thú vị </span>
                                </div>
                                <div class="detail__tour--content__left--sale__price">
                                    <!-- <p>₫ 640,000</p><span>₫ 730,000</span> -->
                                </div>
                            </div>
                            <div class="detail__tour--content__left--sale__right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                <a href="<?php echo home_url(); ?>/tour">Xem chi tiết <ion-icon
                                        name="chevron-forward-outline"></ion-icon></a>
                            </div>
                        </div>
                        <div class="detail__tour--content__left--sale__info shadow">

                            <div class="detail__tour--content__left--sale__info--header">
                                <ion-icon class="detail__tour--content__left--sale__info--close"
                                    name="close"></ion-icon><span>Bao gồm 11 hoạt động</span>
                            </div>
                            <div class="detail__tour--content__left--sale__info--list">
                                <?php
                                get_template_part('templates/template-tour/archive', 'detailticket');
                                ?>

                            </div>
                        </div>
                        <!--<div class="detail__tour--content__left--header">
                        Đánh giá gần đây <a href="">Đọc tất cả đánh giá</a>
                    </div>
                    <div class="detail__tour--content__left--rate__first">
                        <div class="detail__tour--content__left--rate__first--title">
                            <p>7/10</p>
                            <div class="detail__tour--content__left--rate__first--title__liststar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <span>2 <span>Bình chọn</span></span>
                        </div>
                        <div class="detail__tour--content__left--rate__first--list">
                            <div class="detail__tour--content__left--rate__first--item">
                                <div class="detail__tour--content__left--rate__first--item__info">
                                    <p>Người dùng Đà Lạt review</p><span>4 ngày</span>
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__des">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__imgs">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                            </div>
                            <div class="detail__tour--content__left--rate__first--item">
                                <div class="detail__tour--content__left--rate__first--item__info">
                                    <p>Người dùng Đà Lạt review</p><span>4 ngày</span>
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__des">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__imgs">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>-->

                        <div class="detail__tour--content__left--header">
                            Đánh giá
                        </div>
                        <div class="detail__tour--content__left--rate__second">
                            <div class="detail__tour--content__left--rate__second--list">
                                <?php
                                $args = array('post_id' => $product->id);
                                $comments = get_comments($args);
                                wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                                ?>

                            </div>
                        </div>
                        <style>
                            .comment .comment_container img {
                                width: 30px;
                                height: 30px
                            }

                            .comment .comment_container .comment-text img {
                                width: 100px;
                                height: 100px;
                                border-radius: 10px;
                            }
                        </style>
                        <div class="detail__tour--content__left--header">
                            Liên hệ với chúng tôi
                        </div>
                        <div class="detail__tour--content__left--contact">
                            <p>Bạn thắc mắc về dịch vụ này? Chat với tôi!</p>
                            <a href="https://zalo.me/dalatreview"
                                class="detail__tour--content__left--contact__btn secondBtn"><ion-icon
                                    name="chatbubbles"></ion-icon> <span>Chat với chúng tôi</span></a>
                        </div>

                    </div>
                    <div class="detail__tour--content__right">
                        <button class="detail__tour--content__right--btn__pc detail__tour--content__right--btn firstBtn">
                          Chọn loại vé
                        </button>
                    </div>
                </div>

                <!-- mobile -->

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
                <!-- end -->
           </div>
            <div class="detail__tour--content__left--related">
                <div class="fourProductList__wrapper">
                    <?php
                    get_template_part('templates/template-tour/archive', 'detailtour');
                    ?>
                </div>
            </div>
            </div>
        </section>
        </section>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detailHotel.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail-tour.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/checkout-tour.js"></script>
        <?php

    }
}
?>