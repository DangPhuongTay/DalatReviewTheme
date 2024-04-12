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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/checkout-tour.js"></script>

<?php get_footer();?>