<div class="blog__container--bottom__left--header__list--item">
                                    <a href="detail-blog">
                                        <div class="blog__container--bottom__left--header__list--item__img">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>  
                                        </div>
                                        <div class="blog__container--bottom__left--header__list--item__text">
                                            <p><?php the_title() ?></p>
                                            <span><?php the_content() ?></span>
                                            <div class="blog__container--new__list--item__text--at">31/2/2024</div>
                                        </div>
                                    </a>
                                </div>