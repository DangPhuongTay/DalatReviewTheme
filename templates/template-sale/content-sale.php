<?php 

if(have_posts()){
    while (have_posts()){
        the_post();
        ?>
        <section class="detail__blog">
            <div class="detail__blog--container" style="justify-content: center;">
                <div class="detail__blog--left" >
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

      
            </div>
        </section>


        <?php 

    }
}

?>