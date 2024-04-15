<?php
/**
 * Template Name: TemplateLiveShow
 * Display Only Detail Hotel template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>

<section class="liveshow">
<?php wc_get_template('templates/template-liveshow/liveshow-banner.php'); ?>
<?php wc_get_template('templates/template-search/searchliveshow.php'); ?>
 
  <div class="liveshow__container">
    <div class="liveshow__container--link">
      <a class="liveshow__container--link__return1" href="<?php echo home_url();?>">Trang chủ > </a>
      <a class="liveshow__container--link__return2" href="<?php echo home_url();?>/liveshow">Vé LiveShow</a>

    </div>
    <!--  -->
    <!-- Category -->
    <!--  -->
  <?php wc_get_template('templates/template-liveshow/liveshow-container-body.php'); ?>
    
</section>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide_img.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/range-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/liveshow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/format_number.js"></script>
<?php get_footer(); ?>

