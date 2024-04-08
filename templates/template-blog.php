<?php
    /**
     * Template Name: TemplateBlog
     * Display Only Blog template
     * 
     * @package WordPress
     * @subpackage eminent
     * @since eminent 1.0
     * 
     */
    get_header();?>
    
    <section class="blog">
        <div class="blog__banner">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>  
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
                    <?php  get_template_part('templates/template-blog/archive', 'blog') ?>
                </div>
                <div class="blog__container--bottom">
                    <div class="blog__container--bottom__left">
                        <div class="blog__container--bottom__left--header">
                            <p>Xu hướng du lịch mới nhất</p>
                        </div>
                        <div class="blog__container--bottom__left--header__list">
                        <?php  get_template_part('templates/template-blog/archive', 'blognew') ?>
                        </div>
                    </div>
                    <div class="blog__container--bottom__right">
                        <div class="blog__container--bottom__right--header">
                            <p>Phổ biến nhất</p>
                        </div>
                        <div class="blog__container--bottom__right--header__list">
                        <?php  get_template_part('templates/template-blog/archive', 'bloghot');?>
                        </div>
                    </div>
                </div>

            </div>
    </section>

 <?php get_footer();?>