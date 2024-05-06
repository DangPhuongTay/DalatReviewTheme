<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php
        global $product;
        $available_variations = $product->get_available_variations(); ?>
        <div class="detail__car">
            <div class="detail__car--container">
                <div class="detail__car--container__option">
                    <div class="detail__car--container__header">
                        <?php the_title(); ?>
                    </div>
                    <div class="detail__car--container__top">
                        <div class="detail__car--container__top--contact">
                            <span>Điện Thoại liên hệ:</span>
                            <?php
                            foreach ($product->attributes as $taxonomy => $attribute) {
                                foreach ($attribute->get_terms() as $term) {
                                    if ($term->taxonomy == 'pa_so-dien-thoai') {
                                        echo $term->name;
                                    } else {
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
                                    if ($term->taxonomy == 'pa_dia-chi') {
                                        echo $term->name;
                                    } else {
                                        echo '';
                                    }
                                }
                            } ?>
                        </div>

                    </div>
                    <div class="detail__car--container__top--des">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>"
                            alt="">
                        <p><?php echo $product->get_short_description(); ?></p>
                   
                    </div>
                 
                    <div class="detail__car--container__header">
                        Danh sách dịch vụ
                    </div>
                </div>

            </div>
            <div class="detail__car--info">
                <div class="detail__car--info__body">
                    <div class="detail__car--info__body--img">
                        <?php
                        if (count($available_variations) > 0) {

                            foreach ($available_variations as $variation) {
                                ?>
                                <form class="variations_form"
                                    action="<?php echo esc_url(apply_filters('woocommerce_loop_add_to_cart_link', $product->get_permalink())); ?>"
                                    method="get" enctype='multipart/form-data'
                                    data-product_id="<?php echo absint($product->get_id()); ?>"
                                    data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
                                    <div class="fourProductList__wrapper--item">
                                            <div class="fourProductList__wrapper--img">
                                            <?php echo "<img src=" . $variation['image']['url'] . ">"; ?>
                                            </div>
                                            <div class="fourProductList__wrapper--main">
                                                <div class="fourProductList__wrapper--info">
                                                    <div class="fourProductList__wrapper--info__title">
                                                        <span>
                                                        <?php 
                                                            foreach ($variation['attributes'] as $attribute => $term_slug) {
                                                                $taxonomy = 'pa_loai-xe';
                                                                $term_name = get_term_by('slug', $term_slug, $taxonomy)->name;
                                                                echo '<p>'. $term_name . '</p>';

                                                            }
                                                        
                                                        ?>
                                                        </span>
                                                        <span class="fourProductList__wrapper--stars">
                                                            <!-- <ion-icon name="star" class="icon__star"></ion-icon>
                                                                <ion-icon name="star" class="icon__star"></ion-icon>
                                                                <ion-icon name="star" class="icon__star"></ion-icon>
                                                                <ion-icon name="star" class="icon__star"></ion-icon> -->
                                                        </span>
                                                    </div>
                                                    
                                                    <div class="fourProductList__wrapper--info__tag">
                                                        Thời gian :
                                                    <?php 
                                                            foreach ($variation['attributes'] as $attribute => $term_slug) {
                                                                $taxonomy = 'pa_thoi-gian';
                                                                $term_name = get_term_by('slug', $term_slug, $taxonomy)->name;
                                                                echo '<p>'. $term_name . '</p>';

                                                            }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__tag">
                                                        Mô tả : 
                                                        <?php echo $variation['variation_description']; ?>
                                                    </div>
                                                </div>
                                                <div class="fourProductList__wrapper--price">
                                                    <div class="fourProductList__wrapper--price__info">
                                                        <?php echo $variation['price_html']; ?>
                                                    </div>
                                                    <div>
                                                <input type="hidden" name="add-to-cart"
                                                    value="<?php echo $variation['variation_id']; ?>">
                                                <div class="quantity">
                                                    <input name="quantity" type="number" min="1" max="9" step="1" value="1">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="add_to_cart_button firstBtn button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
                                            </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </form>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <p><?php echo $product->get_description(); ?></p>
                </div>

                <div class="detail__car--info__btn">

                </div>
            </div>

        </div>
        <?php
    }
}
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script><?php
   get_footer(); ?>