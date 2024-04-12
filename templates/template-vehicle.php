<?php
/**
 * Template Name: TemplateVehicle
 * Display Only Vehicle template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>

<section class="motorbike">
    <div class="motorbike__container">
        <?php wc_get_template('templates/template-vehicle/vehicle-banner.php'); ?>
        <?php wc_get_template('templates/template-vehicle/vehicle-container.php'); ?>
    </div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tour.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail_car.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/range-slider.js"></script>
<?php get_footer(); ?>
