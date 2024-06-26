<?php global $product; ?>
<div class="fourProductList__wrapper--item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="fourProductList__wrapper--img">
                       <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" alt="">
                        </div>
                        <div class="fourProductList__wrapper--main">
                            <div class="fourProductList__wrapper--info">
                                <div class="fourProductList__wrapper--info__title">
                                    <span><?php the_title(); ?></span>
                                    <span class="fourProductList__wrapper--stars">
                                        <!-- <ion-icon name="star" class="icon__star"></ion-icon>
                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                        <ion-icon name="star" class="icon__star"></ion-icon> -->
                                    </span>
                                </div>
                                <div class="fourProductList__wrapper--info__review">
                                    <!-- <div class="fourProductList__wrapper--info__score">
                                        <span>4.4</span>
                                        <span class="slash">/</span>
                                        <span>5</span>
                                    </div> -->
                                    <!-- <div class="fourProductList__wrapper--info__desc">Rất tốt</div> -->
                                    <div class="fourProductList__wrapper--info__count"><?php echo $review_count = $product->get_review_count(); ?>  Bình luận</div>
                                </div>
                                <?php
                    foreach ($product->attributes as $taxonomy => $attribute) {
                        foreach ($attribute->get_terms() as $term) {
                            if ($term->taxonomy == 'pa_dia-chi') {
                                ?>
                                <div class="fourProductList__wrapper--info__ellipsis">
                                    <span class="fourProductList__wrapper--info__location">
                                        <ion-icon name="location-outline"></ion-icon>
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
                                <div class="fourProductList__wrapper--info__tag">
                                <?php
                        foreach ($product->attributes as $taxonomy => $attribute) {
                            foreach ($attribute->get_terms() as $term) {
                                if ($term->taxonomy == 'pa_loai-phong') {
                                    ?>
                                    <div class="fourProductList__wrapper--info__card--tag">
                                        <span><?php echo $term->name; ?></span>
                                    </div>
                                    <?php
                                } else {
                                    echo '';
                                }
                            }
                        }
                        ?>
                                </div>
                            </div>
                            <div class="fourProductList__wrapper--price">
                                <div class="fourProductList__wrapper--price__info">
                                    <?php echo $product->get_price_html(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>