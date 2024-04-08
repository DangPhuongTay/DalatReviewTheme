<?php global $product; ?>
<div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="<?php the_permalink(); ?>" class="">
                                <div class="firstProduct__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                                </div>
                                <div class="firstProduct__info">

 
                                            <a href="#"><?php

                                                the_title();
                                    
                                                ?></p></a>

                                        
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(<?php echo $review_count = $product->get_review_count(); ?>)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <!-- <div class="firstProduct__info--top__score--booked"> -->
                                                <span firstProduct__info--top__score--booked__number>1K+
                                                    Đã được đặt </span>
                                            <!-- </div> -->
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">
                                                        Hướng dẫn tiếng Việt</span>
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
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
                                                <div class="tagging__tag">
                                                    <span
                                                        class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">
                                                        Chính sách đảm bảo về giá
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>