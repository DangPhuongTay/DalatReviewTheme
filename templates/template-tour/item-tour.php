<?php global $product; ?>
<div class="firstProduct__content--list__item">
    <div class="firstProduct__content--list__item--wrap">
        <a href="<?php the_permalink() ?>" class="">
            <div class="firstProduct__img">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>  
            </div>
            <div class="firstProduct__info">
                <div class="firstProduct__info--top">
                    <div class="firstProduct__info--top__title text__overflow--main">
                        <p>
                            <?php

                            the_title();

                            ?>
                        </p>
                    </div>
                    <div class="firstProduct__info--top__score">
                        <div class="firstProduct__info--top__score--star">
                            <div class="firstProduct__info--top__score--star__icon">
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="firstProduct__info--top__score--star__number">
                                <span>4.8</span>
                            </div>
                        </div>
                        <span class="firstProduct__info--top__score--review">(39)</span>
                        <!-- sep -->
                        <div class="sep">
                            <ion-icon name="ellipse"></ion-icon>
                        </div>
                        <div class="firstProduct__info--top__score--booked">
                            <span firstProduct__info--top__score--booked__number>800+
                                Đã được đặt </span>
                        </div>
                    </div>
                    <!-- tag -->
                    <div class="tagging__wrap">
                        <div class="tagging__box">
                            <div class="tagging__tag">
                                <span class="tagging__tag--text">
                                    <?php the_author_posts_link(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom -->
                <div class="firstProduct__info--bottom">
                    <div class="firstProduct__info--bottom__content">
                        <div class="firstProduct__info--bottom__content--box">
                            <div class="firstProduct__info--bottom__content--box__price">

                                <?php echo $product->get_price_html(); ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>