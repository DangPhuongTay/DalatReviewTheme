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
    add_action( 'template_redirect', 'define_default_payment_gateway' );
    function define_default_payment_gateway(){
        if( is_checkout() && ! is_wc_endpoint_url() ) {
            $default_payment_id = 'payment_method_euplatesc';
    
            WC()->session->set( 'chosen_payment_method', $default_payment_id );
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