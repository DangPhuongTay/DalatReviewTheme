<div class="tour__banner"
    style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>');">
    <div class="tour__banner--wrap ">
        <div class="tour__banner--heading">
            <h1><?php the_title(); ?></h1>
            <h2>Tour du lịch, trải nghiệm khám phá và hơn thế
                nữa</h2>
        </div>
        <div class="tour__banner--search">
                <?php wc_get_template('templates/template-search/searchtour.php'); ?>
        </div>
    </div>
</div>