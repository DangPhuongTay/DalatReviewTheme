<?php
if (have_posts()) {
    ?>
    <section class="blog">
        <div class="blog__banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-banner.png" alt="">
            <div class="blog__banner--text">
                <p>Bí kíp trải nghiệm trọn vẹn Đà Lạt</p>
                <span>Khám phá những câu chuyện, cảm hứng và ý tưởng du lịch Đà Lạt độc đáo cho chuyến vi vu tiếp theo của
                    bạn</span>
            </div>
        </div>
        <div class="blog__container">
            <div class="blog__container--new">
                <div class="blog__container--new__header">
                    <p>Bài viết mới nhất</p>
                </div>
                <div class="blog__container--new__list">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="blog__container--new__list--item">
                            <a href="detail-blog">
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
                        <?php
                        

                    }
                    ?>
                </div>
                <div class="blog__container--bottom">
                    <div class="blog__container--bottom__left">
                        <div class="blog__container--bottom__left--header">
                            <p>Xu hướng du lịch mới nhất</p>
                        </div>
                        <div class="blog__container--bottom__left--header__list">
                            <?php
                            while (have_posts()) {
                                the_post();
                                ?>
                                <div class="blog__container--bottom__left--header__list--item">
                                    <a href="detail-blog">
                                        <div class="blog__container--bottom__left--header__list--item__img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-2.png"
                                                alt="">
                                        </div>
                                        <div class="blog__container--bottom__left--header__list--item__text">
                                            <p><?php the_title() ?></p>
                                            <span><?php the_content() ?></span>
                                            <div class="blog__container--new__list--item__text--at">31/2/2024</div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                

                            }
                            ?>
                        </div>
                    </div>
                    <div class="blog__container--bottom__right">
                        <div class="blog__container--bottom__right--header">
                            <p>Phổ biến nhất</p>
                        </div>
                        <div class="blog__container--bottom__right--header__list">
                            <?php
                            while (have_posts()) {
                                the_post();
                                ?>

                                <div class="blog__container--bottom__right--header__list--item">
                                    <a href="detail-blog">
                                        <div class="blog__container--bottom__right--header__list--item__number">
                                            <span>1</span>
                                        </div>
                                        <div class="blog__container--bottom__right--header__list--item__text">
                                            <p><?php the_title() ?></p>
                                            <span><?php the_content() ?></span>
                                        </div>
                                    </a>
                                </div>
                                <?php
                               

                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
    </section>
    <?php
}
get_footer(); ?>  