<?php 
global $product;
$available_variations = $product->get_available_variations();?>
<section class="detail__liveshow">
    <div class="detail__liveshow--ticket__box">
        <div class="detail__liveshow--ticket">
            <div class="detail__liveshow--ticket__left">
                <div class="detail__liveshow--ticket__left--top">
                    <div class="detail__liveshow--ticket__left--title">
                        [LULULOLA SHOW] BẰNG KIỀU & THUỲ DUNG | LẠI GẦN HÔN ANH VIENS M'EMBRASSER
                    </div>
                    <div class="detail__liveshow--ticket__left--time">
                        <ion-icon name="calendar-clear-outline"></ion-icon> 
                        <p>17:15 - 19:15, 16 Mar, 2024  </p>
                    </div>
                    <div class="detail__liveshow--ticket__left--local">
                        <ion-icon name="location-outline"></ion-icon> 
                        <p>
                            <span>Lululola Coffee</span>
                            <span>Đường 3/4, Đồi Cà Ri Dê, Phường 3, Thành Phố Đà Lạt, Tỉnh Lâm Đồng</span>
                        </p>
                    </div>
                </div>
                
                    <div class="detail__liveshow--ticker__left--bottom">
                        <div class="detail__liveshow--ticket__left--price">
                            <p><span class="numberVnd">500000</span></p>
                        </div>
                        <!-- <div class="detail__liveshow--ticket__left--btn">
                            MUA NGAY
                        </div> -->
                    </div>
            </div>
            <div class="detail__liveshow--ticket__right">
                <img src="/assets/img/liveshow_ticker.jpg" alt="">
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
                    <h4>Liveshow Bằng Kiều | CƠN MƯA BĂNG GIÁ</h4>
                    <p class="detail__liveshow--content__left--body__text--1">Lululola Show - Hơn cả âm nhạc, không gian lãng mạn đậm chất thơ Đà Lạt bao trọn hình ảnh thung lũng Đà Lạt, được ngắm nhìn khoảng khắc hoàng hôn thơ mộng đến khi Đà Lạt về đêm siêu lãng mạn, được giao lưu với thần tượng một cách chân thật và gần gũi nhất trong không gian ấm áp và không khí se lạnh của Đà Lạt. Tất cả sẽ  mang đến một đêm nhạc ấn tượng mà bạn không thể quên khi đến với Đà Lạt.</p>
                    <h5>Qúy Khách sẽ được Lululola gửi thông tin số ghế và xác nhận đặt chỗ thành công!</h5>
                    <img src="/assets/img/detail_liveshow_1.jpg" alt="">
                    <img src="/assets/img/detail_liveshow_2.jpg" alt="">
                </div>
            </div>
            <div class="detail__liveshow--content__right shadow">
                <div class="detail__liveshow--content__left--header">
                    Danh sách vé
                </div>
                          <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_loop_add_to_cart_link', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
          <?php
          if( count($available_variations) > 0 ){

              $output = '<div class="product-variations-dropdown">
                  <select id="available-variations" class="" name="add-to-cart">';

              $output .= '<option value="">'. __('Choose a variation') .'</option>';

              foreach( $available_variations as $variation ){
                  $option_value = array();

                  foreach( $variation['attributes'] as $attribute => $term_slug ){
                      $taxonomy = str_replace( 'attribute_', '', $attribute );
                      $attribute_name = get_taxonomy( $taxonomy )->labels->singular_name; // Attribute name
                      $term_name = get_term_by( 'slug', $term_slug, $taxonomy )->name; // Attribute value term name

                      $option_value[] = $attribute_name . ': '.$term_name;
                  }
                  $option_value = implode( ' | ', $option_value );

                  $output .= '<option value="'.$variation['variation_id'].'">'.$option_value.'</option>';
              }
              $output .= '
                  </select>
              </div>';

              echo $output;
          }
          ?>
          <div class="quantity">
            <input name="quantity" type="number" min="1" max="9" step="1" value="1">
          </div>
          <button type="submit" class="add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

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