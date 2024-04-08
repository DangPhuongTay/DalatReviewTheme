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



<?php get_footer(); ?>