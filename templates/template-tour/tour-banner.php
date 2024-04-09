<div class="tour__banner"
    style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>');">
    <div class="tour__banner--wrap ">
        <div class="tour__banner--heading">
            <h1>Tour & Trải nghiệm</h1>
            <h2>Tour du lịch, trải nghiệm khám phá và hơn thế
                nữa</p>
        </div>
        <div class="tour__banner--search">
            <div class="tour__banner--search__icon">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="tour__banner--search__input">
                <?php wc_get_template('templates/template-search/searchtour.php'); ?>
            </div>
        </div>
    </div>
</div>