<div class="blog__container--new__list--item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog__container--new__list--item__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>  
                                </div>
                                <div class="blog__container--new__list--item__text">
                                    <p><?php the_title() ?></p>
                                    <!-- <span><?php the_content() ?></span> -->
                                    <div class="blog__container--new__list--item__text--at"><?php the_date() ?></div>
                                </div>
                            </a>
                        </div>