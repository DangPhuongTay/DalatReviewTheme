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

  <div class="liveshowMoblie__fitter--wrap">
    <div class="liveshowMobile__fitter">
      <div class="liveshowMobile__fitter--input">
        <input type="text" placeholder="Đang tìm...">
      </div>



      <div class="liveshowMobile__fitter--icon">
        <ion-icon name="search-outline"></ion-icon>
      </div>
    </div>
  </div>
  <div class="liveshow__container">
    <div class="liveshow__container--link">
      <a class="liveshow__container--link__return1" href="http://localhost/wordpress/">Trang chủ> </a>
      <a class="liveshow__container--link__return2" href="http://localhost/wordpress/liveshow/">Vé LiveShow>
      </a>
      <a class="liveshow__container--link__return3" href="http://localhost/wordpress/liveshow/detail-liveshow/">Lịch
        diễn liveshow Đà Lạt</a>
    </div>
    <!--  -->
    <!-- Category -->
    <!--  -->
  <?php wc_get_template('templates/template-liveshow/liveshow-container-body.php'); ?>
    
</section>


<?php get_footer(); ?>
