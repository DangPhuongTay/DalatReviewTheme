<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */
?>
    <section class="checkouttour">

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;coupon;
}
$checkout = WC()->checkout();
do_action( 'woocommerce_before_checkout_form', $checkout );



?>

<form name="checkout" style="padding: 10px 0 30px 0;" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<div class="checkouttour__container">
    <div class="checkouttour__container--left">
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col-12" id="customer_details">
			<div class="col-12">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>


		</div>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
	</div>
	<div class="checkouttour__container--right">
        <div class="checkouttour__container--right__top">
			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
		</div>
	</div>		
	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div>
</form>

<style>
	.woocommerce-additional-fields__field-wrapper,
	.woocommerce-billing-fields__field-wrapper{
		width: 100%;
	}
	.woocommerce-additional-fields__field-wrapper .form-row,
	.woocommerce-billing-fields__field-wrapper .form-row{
		width: 100%;
		display: flex;
		justify-content: space-between;
		padding: 5px 0;
	}

	.woocommerce-billing-fields__field-wrapper .form-row span{
		width: 70%;
		display: flex;
 		align-items: center;
	}
	.woocommerce-billing-fields__field-wrapper .form-row lable{
		width: 30%;
		display: flex;
 		align-items: center;
	}
	.woocommerce-billing-fields__field-wrapper .form-row span textarea,
	.woocommerce-billing-fields__field-wrapper .form-row span input,
	.woocommerce-billing-fields__field-wrapper .form-row span select{
		resize: none;
		width: 100%;
		padding: 7px 15px;
		border: 1px solid var(--color-text-12);
    	border-radius: var(--border-radius-size-1);
		outline:none;
	}
	.woocommerce-billing-fields__field-wrapper .form-row span textarea{
		height: 150px;
	}
	.woocommerce-additional-fields__field-wrapper,
	.woocommerce-billing-fields__field-wrapper .form-row .optional{
		display:none;
	}
</style>

<?php  do_action( 'woocommerce_after_checkout_form', $checkout ); ?>