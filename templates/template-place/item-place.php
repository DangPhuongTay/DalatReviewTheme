<?php global $product; ?>
<?php global $rating_html; ?>
<div class="hotel__right--item">
    <a href="<?php the_permalink(); ?>">
        <div class="hotel__right--img">
            <div class="hotel__right--img__icon">
                <ion-icon name="heart-outline"></ion-icon>
            </div>
            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
        </div>
        <div class="hotel__right--main">
            <div class="hotel__right--section">
                <div class="hotel__right--info">
                    <div class="hotel__right--info__name">
                        <span class="hotel__right--title">
                            <?php the_title(); ?>
                        </span>
                        <span class="hotel__right--text">Golf Valley Hotel</span>
                        <span>
                            <span class="hotel__right--stars">
                                <ion-icon name="star" class="icon__star"></ion-icon>
                                <ion-icon name="star" class="icon__star"></ion-icon>
                                <ion-icon name="star" class="icon__star"></ion-icon>
                                <ion-icon name="star" class="icon__star"></ion-icon>
                            </span>
                        </span>

                    </div>
                    <div class="hotel__right--review">
                        <div class="hotel__right--review__score">
                            <span>4.4</span>
                            <span class="slash">/</span>
                            <span>5</span>
                        </div>
                        <div class="hotel__right--review__desc">
                       
                        </div>
                        <div class="hotel__right--review__count"><?php echo $review_count = $product->get_review_count(); ?> Bình luận</div>
                    </div>

                    <?php
                    foreach ($product->attributes as $taxonomy => $attribute) {
                        foreach ($attribute->get_terms() as $term) {
                            if ($term->taxonomy == 'pa_dia-chi') {
                                ?>
                                <div class="hotel__right--ellipsis">
                                    <ion-icon name="location-outline"></ion-icon>
                                    <span class="hotel__right--location">
                                        <?php echo $term->name; ?>
                                    </span>
                                </div>
                                <?php
                            } else {
                                echo '';
                            }
                        }
                    }
                    ?>


                </div>
                <div class="hotel__right--tag">
                    <div class="hotel__right--tag__wrap">
                        <?php
                        foreach ($product->attributes as $taxonomy => $attribute) {
                            foreach ($attribute->get_terms() as $term) {
                                if ($term->taxonomy == 'pa_loai-phong') {
                                    ?>

                                    <div class="hotel__right--card__tag">
                                        <span>
                                            <?php echo $term->name; ?>
                                        </span>
                                    </div>
                                    <?php
                                } else {
                                    echo '';
                                }
                            }
                        }
                        ?>
                        <div class="hotel__right--card__tag">
                            <span>Lễ tân 24/24</span>
                        </div>
                    </div>
                    <div class="hotel__right--booking">
                        <div class="hotel__right--booking__tag">
                            <span class="text__overflow--main"><?php echo $product->get_short_description(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel__right--price">
                <div class="hotel__right--price__info">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="hotel__right--desc">Giá một đêm bao gồm thuế</div>
                <div class="hotel__right--price__btn firstBtn">
                    Xem chi tiết
                </div>
                <div class="hotel__right--price__date">Dựa trên giá cả 18/2</div>
                </div>
        </div>
    </a>
</div>