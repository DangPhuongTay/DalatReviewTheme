<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */
?>
   <section class="cart">
        <div class="cart__container">
            <div class="cart__container--top">
                <div class="cart__container--top__left">
                    <div class="cart__container--top__left--all">
						<h5>
						Sản phẩm đã thêm vào giỏ hàng
						</h5>
                    </div>
                    
<?php


defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

						<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
				?> <div class="cart__container--top__left--list"> <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				/**
				 * Filter the product name.
				 *
				 * @since 2.1.0
				 * @param string $product_name Name of the product in the cart.
				 * @param array $cart_item The product in the cart.
				 * @param string $cart_item_key Key for the product in the cart.
				 */
				
				$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
				
				<div class="cart__container--top__left--list__item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                            <div class="cart__container--top__left--list__item--top">
                                <div class="cart__container--top__left--list__item--top__info">

									  <?php
										$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

										if ( ! $product_permalink ) {
											echo $thumbnail; // PHPCS: XSS ok.
										} else {
											printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
										}
										?>
                                    <div class="cart__container--top__left--list__item--top__info--text">
                                        <p>						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( $product_name . '&nbsp;' );
						} else {
							/**
							 * This filter is documented above.
							 *
							 * @since 2.1.0
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?></p>
                                        <span>[Vé QR Code - Vào Cửa Trực Tiếp] Vé Cáp Treo Nữ Hoàng</span>
                                    </div>
                                </div>
                                <div class="cart__container--top__left--list__item--top__quality">
                                    <span>Người lớn</span>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
										<?php
						if ( $_product->is_sold_individually() ) {
							$min_quantity = 1;
							$max_quantity = 1;
						} else {
							$min_quantity = 0;
							$max_quantity = $_product->get_max_purchase_quantity();
						}

						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $max_quantity,
								'min_value'    => $min_quantity,
								'product_name' => $product_name,
							),
							$_product,
							false
						);

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                      </div>
                                    
                                </div>
                            </div>
                            <div class="cart__container--top__left--list__item--bottom">
                                <div class="cart__container--top__left--list__item--bottom__option">
                                    <button><?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">Xóa</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										/* translators: %s is the product name */
										esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?></button>
                                </div>
                                <div class="cart__container--top__left--list__item--bottom__price">
                                    <span>							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></span>
							</div>
						</div>
                	</div>
					
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>
			<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

			</div>
			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</div>
		<div class="cart__container--top__right">
		<?php wc_get_template('cart/cart-totals.php'); ?>
          <div class="cart__container--top__right--sum">
                        <span><?php esc_html_e( '', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td></span>
                    </div>
                    <div class="art__container--top__right--btn firstBtn">
						<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
                    </div>
                </div>
            </div>
            <div class="cart__container--bottom">
                <div class="cart__container--bottom__header">
                    <span>Thường được đặt với</span>
                </div>
                <!-- <div class="firstProduct row-max-width">
                    <div class="firstProduct__content container-fluid">
                        <div class="firstProduct__content--list row">
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải Nghiệm Canyoning
                                                    Vượt Thác Datanla</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.9</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">(
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">120
                                                    </span>)</span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 1,890,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 2,050,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Đi Xe Trượt Thác Datanla
                                                    New Alpine Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">1,485</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>50K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hoàn
                                                            tiền dễ dàng</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 245,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct3.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Da Lat Conquer Langbiang
                                                    Mountain, Datanla Waterfall Day
                                                    Tour with Optional Lumiere
                                                    Visit</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.6</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">265
                                                    </span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>3K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 450,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct4.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour Săn Mây và Ngắm
                                                    Bình Minh Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">142</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>2K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 400,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="firstProduct__content--list row">
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct5.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải Nghiệm Đu Dây High
                                                    Rope Course Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">407</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>10K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 460,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct6.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải nghiệm trượt
                                                    Zipline xuyên rừng tại Datanla
                                                    Đà Lạt </a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">57</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 1,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct7.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour ngày tham quan
                                                    ngoại ô Đà Lạt với tuỳ chọn tham
                                                    quan Vườn ánh sáng Lumiere Đà
                                                    Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">93</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 550,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                            sách đảm bảo về
                                                            giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct8.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour Nửa Ngày Chèo SUP
                                                    Trên Hồ Tuyền Lâm</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">39</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 500,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 540,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section> 
	</table>
	
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
													

<?php do_action( 'woocommerce_after_cart' ); ?>
