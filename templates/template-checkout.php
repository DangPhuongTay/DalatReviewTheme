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

    
    <?php 
        global $wp;
        $slug_request = $wp->request;

        if(strpos($slug_request, "/order-received" )) {
            get_template_part('templates/template-order');
        }else{
            wc_get_template('checkout/form-checkout.php');
        }
        ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/checkout-tour.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<?php get_footer();?>