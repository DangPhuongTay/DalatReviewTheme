<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $product; ?>
        <div class="detail__car">
            <div class="detail__car--container">
                <div class="detail__car--container__option">
                    <div class="detail__car--container__header">
                        <?php the_title();?>
                    </div>
                    <div class="detail__car--container__top">
                        <div class="detail__car--container__top--contact">
                            <span>Điện Thoại liên hệ:</span>
                            <?php
                           
                             foreach ($product->attributes as $taxonomy => $attribute) {
                                
                                foreach ($attribute->get_terms() as $term) {
                                    if($term ->taxonomy == 'pa_so-dien-thoai'){
                                  echo $term->name ;
                                        }else{
                                    echo '';
                                }
                                }
                             } ?>
                        </div>
                        <div class="detail__car--container__top--address">
                                <span>Địa chỉ :</span>
                                <?php
                           
                                foreach ($product->attributes as $taxonomy => $attribute) {
                                   
                                   foreach ($attribute->get_terms() as $term) {
                                       if($term ->taxonomy == 'pa_dia-chi'){
                                     echo $term->name ;
                                           }else{
                                       echo '';
                                   }
                                   }
                                } ?>
                        </div>
                        <div class="detail__car--container__top--des">
                            <p><?php echo $product->get_short_description (); ?> </p>
                            <img src=" <?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>" alt="">
                        </div>
                    </div>
                    <div class="detail__car--container__header">
                        Danh sách dịch vụ
                    </div>
                </div>
    
            </div>
            <div class="detail__car--info">
                <div class="detail__car--info__body">
                    <div class="detail__car--info__title">
                        Air Blade  <?php echo $product->get_price_html(); ?>
                    </div>
                    <div class="detail__car--info__body--img">
                  <?php  if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                    return;
                }
                
                
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
                  <div class="detail__car--info__body--form">
                    <div class="detail__car--info__body--form__item">
                        <label for="">Chọn nơi nhận xe</label>
                        <input type="submit" value="Chọn địa điểm" class="detail__car--info__map">
                    </div>
                    <div class="detail__car--info__body--form__item">
                        <label for="">Chọn ngày thuê</label>
                       <input type="date" value="2017-06-01" >
                    </div>
                  <div class="detail__car--info__body--form__item">
                        <label for="">Chọn ngày trả</label>
                        <input type="date" value="2017-06-01" >
                  </div>
                  </div>
                  <div class="detail__car--info__body--desc">
                    <div class="detail__car--info__body--desc__text">
                       <?php echo $product->get_description (); ?>
                    </div>
                  </div>
                </div>
                <div class="detail__car--info__btn">
                    <?php wc_get_template('loop/add-to-cart.php'); ?> 
                </div>
            </div>
            <div class="detail__car--map">
                <div class="detail__car--map__header">
                    <ion-icon class="detail__car--map__header--icon" name="close-outline" onclick="closeMapCarFormBtn()">
                    </ion-icon> <span>CHỌN ĐỊA ĐIỂM TRÊN BẢN ĐỒ</span>
                </div>
                <div class="detail__car--map__body">
                    <iframe class="detail__car--map__body--iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1160.4162387727945!2d108.4411451931558!3d11.963462031245864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112c5ba5970a1%3A0x900519971f498118!2zMTA4IEzDvSBOYW0gxJDhur8sIFBoxrDhu51uZyA4LCBUaMOgbmggcGjhu5EgxJDDoCBM4bqhdCwgTMOibSDEkOG7k25nIDY2MTA2!5e0!3m2!1svi!2s!4v1706237902739!5m2!1svi!2s"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="detail__car--map__body--input">
                        <input type="text" placeholder="Nhập địa chỉ nhận xe">
                        <input type="submit" value="XÁC NHẬN" onclick="closeMapCarFormBtn()">
                    </div>
                </div>
            </div>
        </div>
            
        <?php

    }
}
get_footer();?>