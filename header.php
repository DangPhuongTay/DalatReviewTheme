<!-- ==============================================
    Name: header html
    Creact by: Dang Phuong Tay
    Creact at: 21/2/2024
    Update at: 2/2/2024
============================================== -->
<?php
global $theme_path;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đà Lạt Review Tất Tần Tật</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/style.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/slide_img.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/404.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/blog.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/cart.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/checkout-tour.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/contact-banner.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/detail_hotel.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/detail_liveshow.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/detail-blog.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/detail-car.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/detail-tour.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/firstTag.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/fourProductList.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/hotel.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/liveshow.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/motorbike.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/sale_banner.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/secondDropdown.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/secondProductList.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/tour_style.css">
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/css/range-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<?php get_template_part('menu'); ?>