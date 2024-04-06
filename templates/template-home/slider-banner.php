<div class="home__slider--show">
    <div class="home__slider--list__images">
        <img class="home__slider--item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-slider-1.webp"\>
        <img class="home__slider--item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-slider-2.webp"\>
        <img class="home__slider--item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-slider-3.jpg"\>
    </div>
    <div class="home__slider--btns">
        <div class="home__slider--btn__left btn-slider"><ion-icon name="chevron-back"></ion-icon></div>
        <div class="home__slider--btn__right btn-slider"><ion-icon name="chevron-forward"></ion-icon></div>
    </div>
    <div class="home__slider--contents">
        <p class="home__slider--content__title">đà lạt trọn niềm vui</p>
        <p class="home__slider--content__des">Khám phá niềm vui của bạn mọi lúc, mọi nơi - từ chuyến du lịch ngẫu hứng tới những cuộc phiêu lưu khắp thế giới</p>
        <div class="home__slider--searchbox">
            <div class="home__slider--serchbox__search">
                <ion-icon name="search"></ion-icon>
                <?php wc_get_template('templates/template-search/searchhome.php'); ?> 
            </div>
            <input class="home__slider--searchbox__btn" type="button" value="Khám phá">
        </div>
    </div>
</div>
