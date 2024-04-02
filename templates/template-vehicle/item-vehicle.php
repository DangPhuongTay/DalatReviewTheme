<?php global $product; ?>
<div class="detail__car--container__item shadow">
    <div class="detail__car--container__item--img">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>    
    </div>
    <div class="detail__car--container__item--text">
        <p class="detail__car--container__item--text__name"> <?php the_title(); ?></p>
        <p class="detail__car--container__item--text__des firstProduct__info--top__title">Bộ tem ở phần ốp hông Air Blade 2021 cũng có đôi chút khác biệt có thêm dòng chữ Special Edition. Ở phiên bản cũ, dòng chữ Special Edition được đặt ở vị trí khu vực tiếp nhiên liệu.</p>
        <p class="detail__car--container__item--text__price"><span class="numberVnd"><?php echo $product->get_price_html(); ?></span>/ngày</span></p>
    </div>
    <div class="detail__car--container__item--select" onclick="openInfoCarFormBtn()">
        Chọn
    </div>
</div>