<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $comment; ?>
        <?php 
global $product;
$available_variations = $product->get_available_variations();?>

<div class="flight-dropdown-content">
            <div class="flight-dropdown-content-option">
                <div class="flight-option-type">Phổ thông</div>
                <div class="flight-option-details">
                    <div class="flight-option-details-title">1 x 7kg hand luggage</div>
                    <div class="flight-option-details-title">1 x 7kg hand luggage</div>
                </div>
                <div class="flight-option-oder">
                    <div class="flight-option-price">1.559.600₫</div>
                    <button class="select-button">Chọn</button>
                </div>
         
            </div>
            <div class="flight-dropdown-content-option">
                <div class="flight-option-type">Phổ thông đặc biệt</div>
                <div class="flight-option-details">1 x 7kg hand luggage, 1 x 20kg checked luggage</div>
                <div class="flight-option-price">2.315.600₫</div>
            </div>
            <div class="flight-dropdown-content-option">
                <div class="flight-option-type">Thương gia</div>
                <div class="flight-option-details">1 x 10kg hand luggage, 1 x 30kg checked luggage</div>
                <div class="flight-option-price">3.914.000₫</div>
            </div>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plane.js"></script>
        <?php
    }

}

get_footer(); ?>