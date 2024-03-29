<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="found">
        <img class="found__img" src="<?php echo get_template_directory_uri( )?>/assets/images/404found.png" alt="">
        <p class="found__title">Bạn muốn truy cập trang này?</p>
        <p class="found__title">Rất tiếc trang này không khả dụng.</p>
        <a class="found__link" href="http://localhost/wordpress/">Quay lại trang chủ</a>
    </div>

<?php  ?>