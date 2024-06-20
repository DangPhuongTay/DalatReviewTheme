<?php global $product; ?>

<div class="flight-card">
    <div class="flight-summary">
        <div class="flight-details">
            <div class="flight-img">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'thumbnail')); ?>
                <?php the_title(); ?>
            </div>
            <div class="flight-info">
                <div class="flight-info-route">
                    <div class="flight-times">
                        <?php
                        foreach ($product->attributes as $taxonomy => $attribute) {
                            foreach ($attribute->get_terms() as $term) {
                                if ($term->taxonomy == 'pa_thoi-gian') {
                                    echo '<span>' . $term->name . '</span>';
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="flight-route">
                        <?php
                        foreach ($product->attributes as $taxonomy => $attribute) {
                            foreach ($attribute->get_terms() as $term) {
                                if ($term->taxonomy == 'pa_dia-diem') {
                                    echo '<span>' . $term->name . '</span>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="flight-info-type">
                    <div class="flight-class">
                    <?php
                        foreach ($product->attributes as $taxonomy => $attribute) {
                            foreach ($attribute->get_terms() as $term) {
                                if ($term->taxonomy == 'pa_loai-ve') {
                                    echo '<span>' . $term->name . '</span>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="flight-price">
                <span><?php echo $product->get_price_html(); ?></span>
                <a href="<?php the_permalink(); ?>"></a>
                <div class="flight-price-btn firstBtn" onclick="toggleDropdown()">
                    Xem Thêm Loại Vé
                </div>
            </div>
        </div>
    </div>

    <?php
$available_variations = $product->get_available_variations();

if (count($available_variations) > 0) {
    $name_js = 1;
    ?>

    <div class="flight-dropdown-content">
        <?php foreach ($available_variations as $variation) {
            $variation_obj = wc_get_product($variation['variation_id']);
            ?>
            <div class="flight-dropdown-content-option">
                <div class="flight-option-type">
                     <?php 
                        foreach ($variation['attributes'] as $attribute => $term_slug) {
                            $taxonomy = 'pa_loai-ve';
                            $term = get_term_by('slug', $term_slug, $taxonomy);
                            if ($term) {
                                $term_name = $term->name;
                                echo '<p>' . $term_name . '</p>';
                            }
                        }
                        ?>
                </div>
                <div class="flight-option-details">
                    <div class="flight-option-details-title">
                    <?php
                            $nub = 0;
                            foreach ($product->attributes as $taxonomy => $attribute) {
                                foreach ($attribute->get_terms() as $term) {
                                    if ($term->taxonomy == 'pa_tien-ich' && $nub < 4) {
                                        $nub = $nub + 1;
                                        ?>

                                        <div>
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
                    </div>

                </div>
                <div class="flight-option-order">
                    <div class="flight-option-price">
                        <?php echo $variation_obj->get_price_html(); ?>
                    </div>
                    <form action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
                        <div class="flight-option-submit">
                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($variation['variation_id']); ?>">
                            <div class="quantity">
                                <input type="number" class="input-text qty text" step="1" min="1" max="9" name="quantity" value="1" title="SL" size="4" inputmode="numeric">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="add_to_cart_button button alt firstBtn"><?php echo esc_html__('Đặt', 'textdomain'); ?></button>
                        </div>
                    </form>
                </div>
                <script> 
            const detailHotelBody<?php echo $name_js;?> = document.querySelector('body');
            function btnDetailHotelRoom<?php echo $name_js;?>(){
                        detailHotelBody<?php echo $name_js;?>.classList.toggle('listDetailHotelRoom<?php echo $name_js;?>');
                    }                               
            </script>
            </div>
        <?php } ?>
    </div>

<?php } ?>
</div>
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