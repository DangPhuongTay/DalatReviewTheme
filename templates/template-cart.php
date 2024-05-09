<?php
/**
 * Template Name: TemplateCart
 * Display Only cart template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
  
    <?php wc_get_template('cart/cart.php'); ?>
   
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
       

