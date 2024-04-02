<?php global $product; ?>
<div class="fourProductList__wrapper--item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="fourProductList__wrapper--img">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
                        </div>
                        <div class="fourProductList__wrapper--main">
                            <div class="fourProductList__wrapper--info">
                                <div class="fourProductList__wrapper--info__title">
                                    <span><?php the_title(); ?></span>
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
                                    <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                </div>
                                <div class="fourProductList__wrapper--info__ellipsis">
                                    <ion-icon name="location-outline"></ion-icon>
                                    <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                </div>
                                <div class="fourProductList__wrapper--info__tag">
                                    <div class="fourProductList__wrapper--info__card--tag">
                                        <span>Phòng Gym</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__card--tag">
                                        <span>Lễ tân 24/24</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__card--tag">
                                        <span>Trung tâm thành phố</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fourProductList__wrapper--price">
                                <div class="fourProductList__wrapper--price__info">
                                    <span>đ</span>
                                    <span>1,444,527</span>
                                </div>
                                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                            </div>
                        </div>
                    </a>
                </div>
                