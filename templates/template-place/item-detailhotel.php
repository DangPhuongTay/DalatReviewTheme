<?php
global $product;
$available_variations = $product->get_available_variations(); ?>

<?php
if (count($available_variations) > 0) {
    $name_js =1;
    $string_name= '__item';
    ?>

    <?php
    foreach ($available_variations as $variation) {
        ?>
            <style>
        .detailHotel__list--body__list--wrap__item--right__item<?php echo $name_js;?> {
        display: none;
    }
        body.listDetailHotelRoom<?php echo $name_js;?> .detailHotel__list--body__list--wrap__item--right__item<?php echo $name_js;?> {
        display: block;
    }
    </style>
            <div class="detailHotel__list--body__list--wrap">
                <form class="variations_form"
                    action="<?php echo esc_url(apply_filters('woocommerce_loop_add_to_cart_link', $product->get_permalink())); ?>"
                    method="get" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>"
                    data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
                    <div class="detailHotel__list--body__list--wrap__name">
                    <?php 
                        foreach ($variation['attributes'] as $attribute => $term_slug) {
                            $taxonomy = 'pa_loai-phong';
                            $term = get_term_by('slug', $term_slug, $taxonomy);
                            if ($term) {
                                $term_name = $term->name;
                                echo '<p>' . $term_name . '</p>';
                            }
                        }
                        ?>

                    </div>
                <div class="detailHotel__list--body__list--wrap__item">
                    <div class="detailHotel__list--body__list--wrap__item--left" onclick="btnDetailHotelRoom<?php echo $name_js;?>()">
                        <div class="detailHotel__list--body__list--wrap__item--left__img">
                            
                                    <?php echo "<img src=" . $variation['image']['url'] . ">"; ?>

                        </div>
                        <div class="detailHotel__list--body__list--wrap__item--left__popular">
                            <div class="detailHotel__list--body__list--wrap__item--left__popular--name">
                           
                            <?php 
                                foreach ($variation['attributes'] as $attribute => $term_slug) {
                                    $taxonomy = 'pa_loai-phong';
                                    $term = get_term_by('slug', $term_slug, $taxonomy);
                                    if ($term) {
                                        $term_name = $term->name;
                                        echo '<p>' . $term_name . '</p>';
                                    }
                                }
                                ?>

                               
                                
                            </div>
                            
                            <div class="detailHotel__list--body__list--wrap__item--left__popular--price">
                                <div class="detailHotel__list--body__list--wrap__item--left__popular--price__amount">
                                    Từ <div class="detailHotel__list--body__list--wrap__item--left__popular--price__format">
                                        <?php echo $variation['price_html']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__list--wrap__item--left__action">
                            <div class="detailHotel__list--body__list--wrap__item--left__action--arrow__down">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>

                        <!-- <div class="detailHotel__list--body__list--wrap__item--left__facility">
                            <?php
                            $nub = 0;
                            foreach ($product->attributes as $taxonomy => $attribute) {
                                foreach ($attribute->get_terms() as $term) {
                                    if ($term->taxonomy == 'pa_tien-ich' && $nub < 4) {
                                        $nub = $nub + 1;
                                        ?>

                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>
                                                <?php echo $term->name; ?>
                                            </p>
                                        </div>
                                        <?php
                                    } else {
                                        echo '';
                                    }
                                }
                            }
                            ?>
                        </div> -->
                    </div>
                    <div class="detailHotel__list--body__list--wrap__item--right<?php echo $string_name.$name_js;?>">
                        <div class="detailHotel__list--body__list--wrap__item--right__header">
                            <div>Đề xuất cho bạn</div>
                            <div>Giá</div>
                        </div>
                        <div class="detailHotel__list--body__list--wrap__item--right__body">
                            <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                        <span>Tiện ích Phòng</span>
                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                        <div
                                            class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__wraper">
                                            <?php


                                            foreach ($variation['attributes'] as $attribute => $term_slug) {
                                                $taxonomy = str_replace('attribute_', '', $attribute);
                                                $attribute_name = get_taxonomy($taxonomy)->labels->singular_name;
                                                $term_name = get_term_by('slug', $term_slug, $taxonomy)->name;

                                                echo '<p>' . $attribute_name . ': ' . $term_name . '</p>';

                                            }





                                            ?>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                            <span>Mô tả</span>
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </div>
                                        <div class="text__overflow--main">
                                            <?php echo $variation['variation_description']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                        <div
                                            class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                            <div
                                                class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                <?php echo $variation['price_html']; ?>
                                            </div>
                                        </div>
                                        <div
                                            class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__bottom">
                                            <div>
                                                <input type="hidden" name="add-to-cart"
                                                    value="<?php echo $variation['variation_id']; ?>">
                                                <div class="quantity">
                                                    <input name="quantity" type="number" min="1" max="9" step="1" value="1">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="add_to_cart_button firstBtn button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">Đặt</button>
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
            <script> 
            const detailHotelBody<?php echo $name_js;?> = document.querySelector('body');
            function btnDetailHotelRoom<?php echo $name_js;?>(){
                        detailHotelBody<?php echo $name_js;?>.classList.toggle('listDetailHotelRoom<?php echo $name_js;?>');
                    }                               
            </script>
        <?php
        $name_js++;
    }

}
?>
<script>
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
        var newVal = oldValue;
        } else {
        var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
        var newVal = oldValue;
        } else {
        var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    });
    </script>