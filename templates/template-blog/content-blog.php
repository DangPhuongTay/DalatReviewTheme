<?php 

if(have_posts()){
    while (have_posts()){
        the_post();
        ?>
        <section class="detail__blog">
            <div class="detail__blog--container">
                <div class="detail__blog--left">
                    <div class="detail__blog--left__date--img">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?> 
                    </div>
                    <div class="detail__blog--left__header">
                        <?php the_title(); ?>
                    </div>
                    <div class="detail__blog--left__date">
                        <span>Đăng ngày: </span><span>16/02/21</span>
                    </div>
                    <div class="detail__blog--left__content">
                    <?php the_content(); ?>
                    </div>
                    <!-- <div class="detail__blog--voucher">
                        <div class="voucher__card shadow">
                            <div class="voucher__card--left">
                                <div class="voucher__card--showMore">
                                    <div class="voucher__card--title">
                                    Áp dụng khi mua 3 vé Universal Studios Singapore. Không cộng dồn với các mã khuyến mãi khác.
                                    </div>
                                    <div class="voucher__card--desc">
                                        Áp dụng khi mua 3 vé Universal Studios Singapore. Không cộng dồn với các mã khuyến mãi khác. 
                                    </div>
                                </div>
                                <div class="voucher__card--popper">
                                    <div class="voucher__card--popper__inner">
                                        <div class="voucher__card--popper__inner--title">Giảm 260.000đ</div>
                                        <div class="voucher__card--popper__inner--content">Áp dụng khi mua 3 vé Skyline Luge. Không cộng dồn với các mã khuyến mãi khác.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="voucher__card--right">
                                <div class="voucher__card--right__type">
                                    <p>Mã ưu đãi</p>
                                    <span>WINGSOFTIME</span> 
                                </div>
                                <div class="voucher__card--right__useBtn">
                                    <span>SỬ DỤNG</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
    
                </div>
                <div class="blog__container--bottom__right">
                        <div class="blog__container--bottom__right--header">
                            <p>Phổ biến nhất</p>
                        </div>
                        <div class="blog__container--bottom__right--header__list">
                            <?php 
                            $args = array(
                                'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                                'showposts' => 6, // số lượng bài viết
                                'cat'=>6,
                                'tag'=>'new',
                            );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php  get_template_part('templates/template-blog/item', 'bloghot') ?>
                        <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                </div>
      
            </div>
        </section>


        <?php 

    }
}

?>