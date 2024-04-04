<?php
    add_action( 'after_setup_theme', 'setup_woocommerce_support' );

    function setup_woocommerce_support()
    {
    add_theme_support('woocommerce');
    }

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support');
    function wpbootstrap_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
        }
        function shapeSpace_include_custom_jquery() {

            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
        
        }
        add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
?>