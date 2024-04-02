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
    get_header();?>

    <section class="motorbike">
        <div class="motorbike__container">
            <div class="motorbike__container--banner">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/motorbike-banner.jpg" alt="">
               <div class="motorbike__container--banner__btn">
                <div class="motorbike__container--banner__box">
                    <div class="motorbike__container--banner__box--item">
                        <a href="http://localhost/wordpress/vehicle/">
                            <ion-icon name="bicycle-outline"></ion-icon>
                            <span>Xe máy</span>
                        </a>
                    </div>
                    <div class="motorbike__container--banner__box--item">
                        <a href="http://localhost/wordpress/car/">
                            <ion-icon name="car-outline"></ion-icon>
                            <span>Xe Ôto</span>
                        </a>
                    </div>
                </div>
               </div>
            </div>
           
            <div class="motorbike__container--content">
                <div class="motorbike__container--header">
                    Xe máy
                </div>
                
                    <?php  get_template_part('templates/template-vehicle/archive', 'vehicle');   ?>
                

            </div>
        </div>
    </section>

    

<?php get_footer();?>