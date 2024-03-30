<div class="blog__container--new__list--item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog__container--new__list--item__img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-3.png" alt="">
                                </div>
                                <div class="blog__container--new__list--item__text">
                                    <p><?php the_title() ?></p>
                                    <span><?php the_content() ?></span>
                                    <div class="blog__container--new__list--item__text--at"><?php the_date() ?></div>
                                </div>
                            </a>
                        </div>