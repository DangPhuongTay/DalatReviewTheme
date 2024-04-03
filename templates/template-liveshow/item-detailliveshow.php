<?php global $product; ?>

<div class="detail__liveshow--content__right--item">
    <a href="checkout-tour.html">
 

<?php
                                    
foreach ($product->attributes as $taxonomy => $attribute) {
foreach ($attribute->get_terms() as $term) {
 if($term ->taxonomy == 'pa_loai-ve'){
        
          ?>
          <div class="detail__liveshow--content__right--item__name">
            <?php echo $term->name ?>
        </div>
        <div class="detail__liveshow--content__right--item__price">
            <span>đ</span>  <?php echo $term->description ?>
        </div>
          
          <?php
    }else{
  echo '';
   }
  }
} ?>
