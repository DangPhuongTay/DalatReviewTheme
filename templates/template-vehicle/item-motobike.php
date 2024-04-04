<?php global $product; ?>
<a href="<?php the_permalink(); ?>">
    <div class="detail__car--container__item shadow">
    <div class="detail__car--container__item--img">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
    </div>
    <div class="detail__car--container__item--text">
        <p class="detail__car--container__item--text__name">
            <?php

            the_title();

            ?></p>
        <p class="detail__car--container__item--text__des firstProduct__info--top__title">
            <?php echo $product->get_short_description (); ?>
        </p>
        <p class="detail__car--container__item--text__price">
           <?php echo $product->get_price_html(); ?>
        </p>
        
    </div>
    <div class="detail__car--container__item--select" ">
        Chọn
    </div>
</div>
</a>
