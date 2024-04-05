
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
            <?php global $product; ?>

            <div class="slide__img--box">
                <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
                <div class="container__slides">
                <?php  if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                    return;
                }
                
                
                $attachment_ids = $product->get_gallery_image_ids();
                
                if ( $attachment_ids && $product->get_image_id() ) {
                    foreach ( $attachment_ids as $attachment_id ) {
                        ?>
                        <div class="mySlides" style="width: 800px;display: flex;align-items: center;justify-content: center;">
                        <?php
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                        ?>
                        </div>
                    <?php
                    }
                } ?>
    
    
    
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
                <!-- Image text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
    
                <!-- Thumbnail images -->
                <div class="container__slide--number">
                <?php  if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                    return;
                }
                
                
                $attachment_ids = $product->get_gallery_image_ids();
                
                if ( $attachment_ids && $product->get_image_id() ) {
                    foreach ( $attachment_ids as $attachment_id ) {
                        ?>
                       <div class="column">
                        <?php
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                        ?>
                        </div>
                    <?php
                    }
                } ?>
    
                </div>
            </div>
        </div>


        
    <section class="detail__tour">
        <div class="detail__tour--content__right--mobile shadow">
            <p><span>đ</span> <span class="detail__tour--content__right--price">245.000</span></p>
            <button class="detail__tour--content__right--btn firstBtn">
                CHỌN DỊCH VỤ
            </button>
        </div>
        <div class="detail__tour--container">
            <div class="detail__tour--header">
                <div class="detail__tour--header__link">
                    <a href="">Trang chủ</a> > <a href="">Vé tham quan</a> > <a href="">Vé tham quan Săn Mây Cầu Gỗ – BÌNH MINH</a>
                </div>
                <div class="detail__tour--header__title">
                    <?php the_title(); ?>
                </div>
                <div class="detail__tour--header__info">
                    <ion-icon name="location-outline"></ion-icon> <?php
                    if ($product->attributes) {
                        foreach ($product->attributes as $taxonomy => $attribute) {
                       
                            foreach ($attribute->get_terms() as $term) {
                                if($term ->taxonomy == 'pa_dia-chi'){
                              echo $term->name ;
                              
                                    }else{
                                echo '';
                            }
                            }
                         } 
                    }else{echo'';} ?>             
                    
                </div>
            </div>
            <div class="detail__tour--img">
                <div class="detail__tour--img__left">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),
                    'thumnail', array( 'class' =>'thumnail') ); ?>   " alt="">
                </div>
                <div class="detail__tour--img__right">
                    <?php  
                    
                    
                    $attachment_ids = $product->get_gallery_image_ids();
                    
                    if ( $attachment_ids && $product->get_image_id() ) {
                        foreach ( $attachment_ids as $attachment_id ) {
                            ?>
                            <?php
                                echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                            ?>
                        <?php
                        }
                    } ?>
                </div>
            </div>
            <div class="detail__tour--content">
                <div class="detail__tour--content__left">
                    <div class="detail__tour--content__left--header">
                        Các gói dịch vụ
                    </div>
                    <div class="detail__tour--content__left--option">
                        <div class="detail__tour--content__left--option__title--1">
                            <p>Vui lòng chọn ngày & gói dịch vụ</p><a href="#">Xóa tất cả</a>
                        </div>
                        <p class="detail__tour--content__left--option__title--2">
                            Xin chọn ngày tham quan
                        </p>
                        <input class="detail__tour--content__left--option__date" type="date">

                        <p class="detail__tour--content__left--option__title--2">
                            Loại gói dịch vụ
                        </p>
                        <div class="detail__tour--content__left--option__item--info shadow "><ion-icon class="detail__tour--content__left--option__item--info__close" name="close"></ion-icon>
                            <div class="detail__tour--content__left--option__item--info__title">Chọn dịch vụ</div>
                            <div class="detail__tour--content__left--option__item--info__list">
                                <div class="detail__tour--content__left--option__item--info__item">
                                    <div class="detail__tour--content__left--option__item--info__header">Vé Xe Trượt Thác Datanla New Alpine</div>
                                    <div class="detail__tour--content__left--option__item--info__quality">
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Người lớn</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail__tour--content__left--option__item--info__item">
                                    <div class="detail__tour--content__left--option__item--info__header"> Combo Vé Đà Lạt High Rope Course + Vé Xe Trượt Thác Datanla</div>
                                    <div class="detail__tour--content__left--option__item--info__quality">
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Người lớn</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Trẻ em</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="detail__tour--content__left--option__item--info__price">
                                <div class="detail__tour--content__left--option__item--info__price--left">
                                    <p><span>đ</span> <span>700000</span></p>
                                
                                </div>
                                <div class="detail__tour--content__left--option__item--info__price--right">
                                    <a href="cart">Thêm vào giỏ hàng</a>
                                    <a href="checkout-tour">Đặt ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="detail__tour--content__left--option__list">
                            <div class="detail__tour--content__left--option__item">
                                Vé Xe Trượt Thác Datanla New Alpine
                            </div>
                            <div class="detail__tour--content__left--option__item">
                                Combo Vé Đà Lạt High Rope Course + Vé Xe Trượt Thác Datanla

                            </div>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Tiết kiệm hơn khi du lịch Đà Lạt
                    </div>
                    <div class="detail__tour--content__left--sale">
                        <div class="detail__tour--content__left--sale__left">
                            <span class="detail__tour--content__left--sale__header">
                                Ưu đãi lên đến 12%
                            </span>
                            <div class="detail__tour--content__left--sale__title">
                                <p>Pass Đà Lạt</p>
                                <span>Bao gồm Đi Xe Trượt Thác Datanla New Alpine Tại Đà Lạt và 11 điểm tham quan</span>
                            </div>
                            <div class="detail__tour--content__left--sale__price">
                                <p>₫ 640,000</p><span>₫ 730,000</span>
                            </div>
                        </div>
                        <div class="detail__tour--content__left--sale__right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                            <a href="">Xem chi tiết <ion-icon name="chevron-forward-outline"></ion-icon></a>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--sale__info shadow">
                       
                        <div class="detail__tour--content__left--sale__info--header">
                            <ion-icon class="detail__tour--content__left--sale__info--close" name="close"></ion-icon><span>Bao gồm 11 hoạt động</span>
                        </div>
                        <div class="detail__tour--content__left--sale__info--list">
                        <?php 

                        get_template_part('templates/template-tour/archive','detailticket');  
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
                        Về dịch vụ này
                    </div>
                    <div class="detail__tour--content__left--service">
                        <?php echo $product->get_description();?>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Những điều cần lưu ý
                    </div>
                    <div class="detail__tour--content__left--note">
                        <p>Alpine Coaster will stop operating when raining</p>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Đánh giá
                    </div>
                    <div class="detail__tour--content__left--rate__second">
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
                        <div class="detail__tour--content__left--rate__second--album">
                            <div class="detail__tour--content__left--rate__second--album__text">
                                <p><span>Album hình</span><span>4 ảnh</span></p>
                                <p><a href="">Xem thêm</a></p>
                            </div>
                            <div class="detail__tour--content__left--rate__second--album__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                            </div>
                        </div>
                        <div class="detail__tour--content__left--rate__second--list">
                            <?php
                            $args = array('post_id' => $product->id);
                            $comments = get_comments($args);
                            wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                            ?>
                            
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Liên hệ với chúng tôi
                    </div>
                    <div class="detail__tour--content__left--contact">
                        <p>Bạn thắc mắc về dịch vụ này? Chat với tôi!</p>
                        <a href="" class="detail__tour--content__left--contact__btn secondBtn"><ion-icon name="chatbubbles"></ion-icon> <span>Chat với chúng tôi</span></a>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Bài viết liên quan
                    </div>
              
                </div>
                <div class="detail__tour--content__right">
                    <p><span>đ</span> <span class="detail__tour--content__right--price">245.000</span></p>
                    <button class="detail__tour--content__right--btn__pc firstBtn">CHỌN DỊCH VỤ
                    </button>
                </div>
            </div>
            <div class="detail__tour--content__left--related">
                <div class="fourProductList__wrapper">
                    <?php 

                    get_template_part('templates/template-tour/archive','detailtour');  
                    ?>
                </div>   
            </div>
        </div>
    </section>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail_tour.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script>
            <?php
              
        }
    }
?>
<?php wc_get_template('loop/pagination.php'); ?> 