<div class="container__slides">
                <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
                <div class="image_empty">

                <?php if (!function_exists('wc_get_gallery_image_html')) {
                        return;
                    }
             
                    $attachment_ids = $product->get_gallery_image_ids();
                    if ($attachment_ids && $product->get_image_id()) {
                        foreach ($attachment_ids as $attachment_id) {
                            ?>
                            <div class="mySlides">
                                <?php
                                echo apply_filters('woocommerce_single_product_image_thumbnail_html',
                                 wc_get_gallery_image_html($attachment_id), $attachment_id); //
                                ?>
                            </div>
                            <?php
                        }
                    } ?>

                </div>   

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                 
                </div>