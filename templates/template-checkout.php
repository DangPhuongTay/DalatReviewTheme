<?php
/**
 * Template Name: TemplateCheckOut
 * Display Only CheckOut template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    // get_header();?>
<!-- ==============================================
    Name: header html
    Creact by: Dang Phuong Tay
    Creact at: 21/2/2024
    Update at: 2/2/2024
============================================== -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>Đà Lạt Review Tất Tần Tật</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/404.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/checkout_success.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/checkout-tour.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<?php get_template_part('menu');
wc_get_template('checkout/form-checkout.php');
?>

