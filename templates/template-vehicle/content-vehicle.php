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
                        <?php the_title(); ?>
                    </div>
                    <div class="detail__car--container__top--des">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>"
                                alt="">
                            <p><?php echo $product->get_short_description(); ?></p>
                            <div class="detail__car--container__top--contact">
                            <span>Giá: <?php echo $product->get_price_html(); ?></span>
                        </div> </div>
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
                                    if ($term->taxonomy == 'pa_address') {
                                        echo $term->name;
                                    } else {
                                        echo '';
                                    }
                                }
                            } ?>
                        </div>

                    </div>
                    <div class="detail__car--container__header">
                        Danh sách dịch vụ
                    </div>
                </div>

            </div>
            <div class="detail__car--info">
                <div class="detail__car--info__body">
                <p><?php echo $product->get_description(); ?></p>           
                    <div class="detail__car--info__body--img">
                        <?php if (!function_exists('wc_get_gallery_image_html')) {
                            return;
                        }
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

                <div class="detail__car--info__btn">
                    <?php wc_get_template('loop/add-to-cart.php'); ?>
                </div>
            </div>
           
        </div>
        <?php
    }
}
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script><?php
get_footer(); ?>