<?php
/**
 * Template Name: TemplatePlace
 * Display Only Place template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
        <div class="secondDropDown">
            <?php get_template_part('templates/template-search/searchhotel'); ?>
        </div>
    
       
    <?php wc_get_template('templates/template-place/place-filter.php'); ?>
    <?php wc_get_template('templates/template-place/place-body.php'); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hotel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/secondDropdown.js"></script>
</body>
</html>