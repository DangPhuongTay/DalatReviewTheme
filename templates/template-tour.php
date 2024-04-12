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
       <!--! firstReview -->
    

    <!--! hightlightProduct -->
    <?php wc_get_template('templates/template-tour/tour-hightlightProduct.php'); ?>
    
</div>


<?php


get_footer(); ?>