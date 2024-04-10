<?php global $product; ?>
<div class="fourProductList__wrapper--item">
    <a href="<?php the_permalink(); ?>">
        <div class="fourProductList__wrapper--img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-sale-banner-img-1.png">
        </div>
        <div class="fourProductList__wrapper--main">
            <div class="fourProductList__wrapper--info">
                <div class="fourProductList__wrapper--info__title">
                    <?php the_title(); ?>
                    <span class="fourProductList__wrapper--stars">
                        <ion-icon name="star" class="icon__star"></ion-icon>
                        <ion-icon name="star" class="icon__star"></ion-icon>
                        <ion-icon name="star" class="icon__star"></ion-icon>
                        <ion-icon name="star" class="icon__star"></ion-icon>
                    </span>
                </div>
                <div class="fourProductList__wrapper--info__review">
                    <div class="fourProductList__wrapper--info__score">
                        <span>4.4</span>
                        <span class="slash">/</span>
                        <span>5</span>
                    </div>
                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                    <div class="fourProductList__wrapper--info__count" onclick="btnDetailHotelRate()">47 Bình luận</div>
                </div>
                <div class="fourProductList__wrapper--info__ellipsis">
                    <ion-icon name="location-outline"></ion-icon>
                    <?php
                    foreach ($product->attributes as $taxonomy => $attribute) {
                        foreach ($attribute->get_terms() as $term) {
                            if ($term->taxonomy == 'pa_address') {
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
                    <span><?php echo $product->get_price_html(); ?></span>
                </div>
                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
            </div>
        </div>
    </a>
</div>