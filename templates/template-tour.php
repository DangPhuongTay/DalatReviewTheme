<?php
/**
 * Template Name: TemplateTour
 * Display Only Tour template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>

<div class="tour">
    <!--! banner -->
    <?php wc_get_template('templates/template-tour/tour-banner.php'); ?>
    <!--! filter -->
    <?php wc_get_template('templates/template-tour/tour-search-filter.php'); ?>
    <!-- firstProduct -->
    <?php wc_get_template('templates/template-tour/tour-firstProduct.php'); ?>
    <div class="breakCrumb ">
        <div class="breakCrumb__list">
            <a href="http://localhost/wordpress/" class="breakCrumb__list--item">Trang chủ</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <a href="#" class="breakCrumb__list--item">Đà Lạt</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <a href="#" class="breakCrumb__list--item">Tour & Trải
                nghiệm</a>
        </div>
    </div>
    <!--! firstReview -->


       <!--! firstReview -->
    


    <!--! hightlightProduct -->
    <?php wc_get_template('templates/template-tour/tour-hightlightProduct.php'); ?>
    
</div>


<?php ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tour.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/range-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/format_number.js"></script>

