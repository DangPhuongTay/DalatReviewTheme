<?php global $product; ?>
<div class="fourProductList__wrapper--item">
    <a href="<?php the_permalink(); ?>">
        <div class="fourProductList__wrapper--img">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
        </div>
        <div class="fourProductList__wrapper--main">
            <div class="fourProductList__wrapper--info">
                <div class="fourProductList__wrapper--info__title">
                    <?php the_title(); ?>

                </div>

                <div class="fourProductList__wrapper--info__ellipsis text__overflow--main">
                    <!-- <ion-icon name="location-outline"></ion-icon> -->
                    <?php echo $product->get_short_description(); ?>

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
  
            </div>
        </div>
    </a>
</div>