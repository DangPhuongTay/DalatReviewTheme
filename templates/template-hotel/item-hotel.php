<?php global $product; ?>
<div class="hotel__right--item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="hotel__right--img">
                                <div class="hotel__right--img__icon">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </div>
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                            </div>
                            <div class="hotel__right--main">
                                <div class="hotel__right--section">
                                    <div class="hotel__right--info">
                                        <div class="hotel__right--info__name">
                                            <span class="hotel__right--title"><?php  the_title( );?></span>
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
                                            <div class="hotel__right--review__desc"> <?php wc_get_template('loop/rating.php'); ?> </div>
                                            <div class="hotel__right--review__count">47 Bình luận</div>
                                        </div>
                                        <div class="hotel__right--ellipsis">
                                            <ion-icon name="location-outline"></ion-icon>
                                            <span class="hotel__right--location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                            <span class="hotel__right--view__map">Xem bản đồ</span>
            
                                        </div>
                                    </div>
                                    <div class="hotel__right--tag">
                                        <div class="hotel__right--tag__wrap">
                                            <div class="hotel__right--card__tag">
                                                <span>Phòng Gym</span>
                                            </div>
                                            <div class="hotel__right--card__tag">
                                                <span>Lễ tân 24/24</span>
                                            </div>
                                            <div class="hotel__right--card__tag">
                                                <span>Trung tâm thành phố</span>
                                            </div>
                                        </div>
                                        <div class="hotel__right--booking">
                                            <div class="hotel__right--booking__tag">
                                                <img src="https://pics.freeicons.io/uploads/icons/png/8661800331595601827-512.png" alt="">
                                                <span>700+ Khách đã đặt</span>
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