<?php
/**
 * Template Name: TemplateCheckOut
 * Display Only CheckOut template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

    <?php wc_get_template('checkout/form-checkout.php'); ?>
<?php get_footer();?>