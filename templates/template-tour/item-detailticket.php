<?php global $product; ?>
<ul>
    <li class="detail__tour--content__left--sale__info--item">
        <?php

        the_title();

        ?>
    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
    <div class="detail__tour--content__left--sale__info--item__text">
        <p>Giá vé</p>
        <p>
            <span><span>Người lớn: đ</span> <?php echo $product->get_price_html(); ?></span>
            <span><span>Trẻ em: đ</span> <?php echo $product->get_price_html(); ?></span>
        </p>
    </div>
    <div class="detail__tour--content__left--sale__info--item__text">
        <p>Điều kiện</p>
        <p>
            <span>Trẻ em có độ tuổi từ 0-3 có thể vào miễn phí</span>
        </p>
    </div>
    <div class="detail__tour--content__left--sale__info--item__text">
        <p>Bao gồm</p>
        <p>
            <span>1 vé Saigon Skydeck</span>
            <span>Bảo tàng áo dài ở tầng 49</span>
        </p>
    </div>
    <div class="detail__tour--content__left--sale__info--item__text">
        <p>Địa chỉ</p>
        <p>
            <?php
                                    
            foreach ($product->attributes as $taxonomy => $attribute) {
               
               foreach ($attribute->get_terms() as $term) {
                   if($term ->taxonomy == 'pa_dia-chi'){
                 echo $term->name ;
                 
                       }else{
                   echo '';
               }
               }
            } ?>
        </p>
    </div>
    <div class="detail__tour--content__left--sale__info--item__btn">
        <a href="" >Xem thêm</a>
    </div>
</li>
</ul>