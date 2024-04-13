<?php
/**
 * Template Name: TemplateOrder
 * Display Only Order template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */

get_header(); ?>

<div class="found">
        <?php
          $slug_request = $wp->request;
          $requestid = explode("/",  $slug_request);
          
          echo $requestid[2];
          $order = wc_get_order( $requestid[2] );
          $order_data = $order->get_data();
          $order_id  = $order->get_id(); // Get the order ID
          $parent_id = $order->get_parent_id(); // Get the parent order ID (for subscriptions…)
          
          $user_id   = $order->get_user_id(); // Get the costumer ID
          $user      = $order->get_user(); // Get the WP_User object
          
          $order_status  = $order->get_status(); // Get the order status (see the conditional method has_status() below)
          $currency      = $order->get_currency(); // Get the currency used  
          $payment_method = $order->get_payment_method(); // Get the payment method ID
          $payment_title = $order->get_payment_method_title(); // Get the payment method title
          $date_created  = $order->get_date_created(); // Get date created (WC_DateTime object)
          $date_modified = $order->get_date_modified(); // Get date modified (WC_DateTime object)
          
          $order_received_url = $order->get_checkout_order_received_url();
          
          $billing_country = $order->get_billing_country(); // Customer billing country

          ## BILLING INFORMATION:

          $order_billing_first_name = $order_data['billing']['first_name'];
          $order_billing_last_name = $order_data['billing']['last_name'];
          $order_billing_company = $order_data['billing']['company'];
          $order_billing_address_1 = $order_data['billing']['address_1'];
          $order_billing_address_2 = $order_data['billing']['address_2'];
          $order_billing_city = $order_data['billing']['city'];
          $order_billing_state = $order_data['billing']['state'];
          $order_billing_postcode = $order_data['billing']['postcode'];
          $order_billing_country = $order_data['billing']['country'];
          $order_billing_email = $order_data['billing']['email'];
          $order_billing_phone = $order_data['billing']['phone'];
        ?>
        <p class="found__title"><?php echo $date_created ?></p>
        <p class="found__title"><?php echo $date_modified ?></p>
        <p class="found__title"><?php echo $order_received_url ?></p>
        <p class="found__title"><?php echo $order_billing_first_name ?></p>
        <a class="found__link" href="<?php echo home_url();?>">Quay lại trang chủ</a>
    </div>
          
<?php  ?>

