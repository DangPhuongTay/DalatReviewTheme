<?php
    if(have_posts()){
        ?>
<section class="motorbike">
    <div class="motorbike__container">
        <div class="motorbike__container--banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motorbike-banner.jpg" alt="">
            <div class="motorbike__container--banner__btn">
                <div class="motorbike__container--banner__box">
                    <div class="motorbike__container--banner__box--item">
                        <a href="motorbike">
                            <ion-icon name="bicycle-outline"></ion-icon>
                            <span>Xe máy</span>
                        </a>
                    </div>
                    <div class="motorbike__container--banner__box--item">
                        <a href="car">
                            <ion-icon name="car-outline"></ion-icon>
                            <span>Xe Ôto</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="motorbike__container--content">
            <div class="motorbike__container--header">
                Xe Ô tô
            </div>
            <div class="firstProduct row-max-width">
                <div class="firstProduct__content container-fluid">
                    <div class="firstProduct__content--list row">

                        <?php
        while(have_posts()){
            the_post(); 
            get_template_part('templates/template-car/item', 'car' );

        }
        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
    }
?>