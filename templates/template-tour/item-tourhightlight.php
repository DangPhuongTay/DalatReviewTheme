
<?php global $product; ?>
    <div class="hightlightProduct__content--list d-flex align-items-center">
                                    <div class="hightlightProduct__content--list__item--wrap">
                                            <a href="<?php the_permalink(); ?>">
                                        
                                        <div class="hightlightProduct__img">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                                        </div>
                                        <div class="hightlightProduct__title text__overflow--main">
                                            <p class="hightlightProduct__link">
                                                <?php

                                                the_title();
                                    
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                           
                           

