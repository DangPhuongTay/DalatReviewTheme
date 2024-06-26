<?php global $product; ?>
<div class="firstProduct__content--list__item">
    <div class="firstProduct__content--list__item--wrap">
        <a href="<?php the_permalink(); ?>" class="firstProduct__content--list__item--wrap__link">
            <div class="firstProduct__img">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
            </div>
            <div class="firstProduct__info">
                <div class="firstProduct__info--top">
                    <div class="firstProduct__info--top__title">
                        <?php
                        the_title();
                        ?></p>
                    </div>
                    <div class="firstProduct__info--top__score">
                      
                        <span
                            class="firstProduct__info--top__score--review"><?php echo $review_count = $product->get_review_count(); ?>
                            Bình luận</span>
                        <!-- sep -->
                        <!-- <div class="sep">
                            <ion-icon name="ellipse"></ion-icon>
                        </div> -->
                        <!-- <div class="firstProduct__info--top__score--booked"> -->
                       
                        <div class="firstProduct__info--top__desc text__overflow--main">
                            <?php echo $product->get_short_description(); ?>
                        </div>
                    </div>
                    <!-- tag -->
                    <div class="tagging__wrap">
                        <div class="tagging__box">
                            <div class="tagging__tag">
                                <p><?php the_tags('Tags: ', ','); ?></p>
                                <!-- <?php
                                $tag = wp_get_post_tags(get_the_ID());
                                $t = $tag[0];
                                if ($t) {
                                    $r = new WP_Query(array('posts_per_page' => 8, 'post__not_in' => array(get_the_ID()), 'tag' => $t->slug));
                                    while ($r->have_posts()):
                                        $r->the_post();
                                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                                    endwhile;
                                    echo '</ol>';
                                    wp_reset_postdata();
                                }
                                ?> -->
                            </div>
                        </div>
                    </div>
                    <div class="firstProduct__info--bottom">
                        <div class="firstProduct__info--bottom__content">
                            <div class="firstProduct__info--bottom__content--box">
                                <div class="firstProduct__info--bottom__content--box__price">
                                    <?php echo $product->get_price_html(); ?>
                                </div>
                            </div>
                            <!-- button policy -->
                            <!-- <div class="firstProduct__info--bottom__tagging tagging__wrap">
                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
                                <div class="tagging__tag">
                                    <span class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">
                                        Chính sách đảm bảo về giá
                                    </span>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>