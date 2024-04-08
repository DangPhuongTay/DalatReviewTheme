<div class="slide__img--box">
                <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
                <div class="container__slides">
                    <?php if (!function_exists('wc_get_gallery_image_html')) {
                        return;
                    }


                    $attachment_ids = $product->get_gallery_image_ids();

                    if ($attachment_ids && $product->get_image_id()) {
                        foreach ($attachment_ids as $attachment_id) {
                            ?>
                            <div class="mySlides" style="width: 800px;display: flex;align-items: center;justify-content: center;">
                                <?php
                                echo apply_filters('woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html($attachment_id), $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
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
                        <?php if (!function_exists('wc_get_gallery_image_html')) {
                            return;
                        }


                        $attachment_ids = $product->get_gallery_image_ids();

                        if ($attachment_ids && $product->get_image_id()) {
                            foreach ($attachment_ids as $attachment_id) {
                                ?>
                                <div class="column">
                                    <?php
                                    echo apply_filters('woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html($attachment_id), $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                                    ?>
                                </div>
                                <?php
                            }
                        } ?>

                    </div>
                </div>
            </div>
