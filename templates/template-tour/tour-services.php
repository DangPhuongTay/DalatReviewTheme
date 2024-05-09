<?php
global $product;
$available_variations = $product->get_available_variations(); ?>

<?php
if (count($available_variations) > 0) {

    foreach ($available_variations as $variation) {
        ?>
        <div class="detailTour__services--body__list--wrap shadow">
            <form class="variations_form"
                action="<?php echo esc_url(apply_filters('woocommerce_loop_add_to_cart_link', $product->get_permalink())); ?>"
                method="get" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>"
                data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
                <div class="detailTour__services--body__list--wrap__item">
                    <div class="detailTour__services--body__list--wrap__item--left" onclick="btnDetailHotelRoom()">
                        <div class="detailTour__services--body__list--wrap__item--left__wrapper">
                            <?php echo "<img src=" . $variation['image']['url'] . ">"; ?>
                        </div>

                        <div class="detailTour__services--body__list--wrap__item--left__img">
                            <?php echo "<img src=" . $variation['image']['url'] . ">"; ?>
                        </div>

                    </div>
                    <div class="detailTour__services--body__list--wrap__item--right">
                        <div class="detailTour__services--body__list--wrap__item--right__body">
                            <div class="detailTour__services--body__list--wrap__item--right__body--info">
                                <div class="detailTour__services--body__list--wrap__item--right__body--info__left">
                                    <div
                                        class="detailTour__services--body__list--wrap__item--right__body--info__left--container">
                                        <div
                                            class="detailTour__services--body__list--wrap__item--right__body--info__left--name">


                                            <?php
                                            foreach ($variation['attributes'] as $attribute => $term_slug) {
                                                $taxonomy = str_replace('attribute_', '', $attribute);
                                                $attribute_name = get_taxonomy($taxonomy)->labels->singular_name;
                                                $term_name = get_term_by('slug', $term_slug, $taxonomy)->name;

                                                echo '<span>' . $attribute_name . ': ' . $term_name . '</span>';

                                            }


                                            ?>
                                      <div
                                            class="detailTour__services--body__list--wrap__item--right__body--info__left--rate">

                                            <div
                                                class="detailTour__services--body__list--wrap__item--right__body--info__left--name__bottom">
                                                <span>Mô tả:</span><div><?php echo $variation['variation_description'];?></div>
                                            </div>
                                          
                                               
                                         
                                        </div>   
                                    </div>
                                      
                                    </div>
                                    <div class="detailTour__services--body__list--wrap__item--right__body--info__right">

                                        <div
                                            class="detailTour__services--body__list--wrap__item--right__body--info__right--price">
                                            <div
                                                class="detailTour__services--body__list--wrap__item--right__body--info__right--price__part">
                                                <div
                                                    class="detailTour__services--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                    <?php echo $variation['price_html']; ?>
                                                </div>
                                            </div>
                                            <div
                                                class="detailTour__services--body__list--wrap__item--right__body--info__right--price__bottom">
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
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>


        <?php

    }

}
?>