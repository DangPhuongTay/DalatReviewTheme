<?php 
global $product;
$available_variations = $product->get_available_variations();?>
<section class="detail__liveshow">
    <div class="detail__liveshow--ticket__box">
        <div class="detail__liveshow--ticket">
            <div class="detail__liveshow--ticket__left">
                <div class="detail__liveshow--ticket__left--top">
                    <div class="detail__liveshow--ticket__left--title">
                    <?php the_title(); ?>
                    </div>
                    <div class="detail__liveshow--ticket__left--time">
                        <ion-icon name="calendar-clear-outline"></ion-icon> 
                        <p>                                    <?php
                                    
                                    foreach ($product->attributes as $taxonomy => $attribute) {
                                       
                                       foreach ($attribute->get_terms() as $term) {
                                           if($term ->taxonomy == 'pa_thoi-gian'){
                                         echo $term->name ;
                                         
                                               }else{
                                           echo '';
                                       }
                                       }
                                    } ?></p>
                    </div>
                    <div class="detail__liveshow--ticket__left--local">
                        <ion-icon name="location-outline"></ion-icon> 
                        <p>
                            <span>                                    <?php
                                    
                                    foreach ($product->attributes as $taxonomy => $attribute) {
                                       
                                       foreach ($attribute->get_terms() as $term) {
                                           if($term ->taxonomy == 'pa_dia-chi'){
                                         echo $term->name ;
                                         
                                               }else{
                                           echo '';
                                       }
                                       }
                                    } ?></span>
                          
                        </p>
                    </div>
                </div>
                
                    <div class="detail__liveshow--ticker__left--bottom">
                        <div class="detail__liveshow--ticket__left--price">
                            <p><span class="numberVnd"><?php echo $product->get_price_html(); ?></span></p>
                        </div>
                        <!-- <div class="detail__liveshow--ticket__left--btn">
                            MUA NGAY
                        </div> -->
                    </div>
            </div>
            <div class="detail__liveshow--ticket__right">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail',array('class' => 'thumbnail')); ?>   " alt="">
            </div>
        </div>
    </div>
    <div class="detail__liveshow--container">
        <div class="detail__liveshow--content">
            <div class="detail__liveshow--content__left shadow">
                <div class="detail__liveshow--content__left--header">
                    Mô tả
                </div>
                <div class="detail__liveshow--content__left--body">
                    <h4><?php the_title(); ?></h4>
                    <?php echo $product->get_description(); ?>
                </div>
            </div>
            <div class="detail__liveshow--content__right shadow">
                <div class="detail__liveshow--content__left--header">
                    Danh sách vé
                </div>
                          <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_loop_add_to_cart_link', $product->get_permalink() ) ); ?>" method="get" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
          <?php
          if( count($available_variations) > 0 ){

              $output = '<div class="product-variations-dropdown">
                  <select id="available-variations" class="selector" name="add-to-cart">';
                
              $output .= '<option  value="">'. __('Chọn loại vé') .'</option>';

              foreach( $available_variations as $variation ){
                  $option_value = array();

                  foreach( $variation['attributes'] as $attribute => $term_slug ){
                      $taxonomy = str_replace( 'attribute_', '', $attribute );
                      $attribute_name = get_taxonomy( $taxonomy )->labels->singular_name; // Attribute name
                      $term_name = get_term_by( 'slug', $term_slug, $taxonomy )->name; // Attribute value term name

                      $option_value[] = $attribute_name . ': '.$term_name;
                  }
                  $option_value = implode( ' | ', $option_value );

                  $output .= '<option  value="'.$variation['variation_id'].'">'.$option_value.'</option>';
                  
              }
              $output .= '
                  </select>
              </div>';
         
              echo $output;
         
          }
          ?>
          <div class="liveshow__bottom--form">
          <div class="quantity">
            <input name="quantity" type="number" min="1" max="9" step="1" value="1">
          </div>
          <button type="submit" class="add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">Thêm vào giỏ hàng</button>
          </div>
                
          

          </form>
            </div>
        </div>
    </div>

  </section>


<script>
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
  var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.quantity-up'),
    btnDown = spinner.find('.quantity-down'),
    min = input.attr('min'),
    max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

});
    </script>