<?php global $product; ?>

 
  <?php
                                    
  foreach ($product->attributes as $taxonomy => $attribute) {
  foreach ($attribute->get_terms() as $term) {
  if($term ->taxonomy == 'pa_loai-ve'){
        
          ?>
          <div class="detail__liveshow--content__right--item">
          <div class="detail__liveshow--content__right--item__name">
            <?php echo $term->name ?>
        </div>
        <div class="detail__liveshow--content__right--item__price numberVnd">
             <?php echo $term->description ?>
        </div>
        </div>
          <?php
    }else{
      echo '';
        }
      }
} ?>


