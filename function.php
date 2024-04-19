<?php
add_filter("woocommerce_checkout_fields", "remove_billing_fields");
function remove_billing_fields($fields) {

    unset($fields["billing"]["billing_company"]);
    unset($fields["billing"]["billing_address_1"]);
    unset($fields["billing"]["billing_address_2"]);
    unset($fields["billing"]["billing_city"]);
    unset($fields["billing"]["billing_postcode"]);
    unset($fields["billing"]["billing_country"]);
    unset($fields["billing"]["billing_state"]);
    return $fields;
}
add_action( 'woocommerce_product_query', 'zero_price_products' );
function zero_price_products( $q ){
    $meta_query = $q->get( 'meta_query' );
        $meta_query[] = array(
        'key'       => '_price',
        'value'     => 0,
        'compare'   => '='
    );
    $q->set( 'meta_query', $meta_query );
}
    add_action( 'after_setup_theme', 'setup_woocommerce_support' );

    function setup_woocommerce_support()
    {
    add_theme_support('woocommerce');
    }

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'template_redirect', 'check_thankyou_order_key' );
    function check_thankyou_order_key() {
        if( is_wc_endpoint_url('order-received') && isset($_GET['key']) ) {
            global $wp;
    
            $order_id  = absint( $wp->query_vars['order-received'] );
            $order     = wc_get_order( $order_id );
    
            if( $order->get_order_key() != wc_clean($_GET['key']) ){
                // Display a custom error notice
                wc_add_notice( __('Oups! The order key is invalid…', 'woocommerce'), 'error');
    
                // Optionally redirect to shop page (uncomment code below)
                // wp_redirect( get_permalink( wc_get_page_id( 'shop' ) ) );
                // exit();
            }
        }
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support');
    // function wpbootstrap_enqueue_styles() {
    //     wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
    //     }
    //     function shapeSpace_include_custom_jquery() {

    //         wp_deregister_script('jquery');
    //         wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
        
    //     }
    //     add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

        
        
    
?>