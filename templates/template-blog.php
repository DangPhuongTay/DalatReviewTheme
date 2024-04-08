<?php
/**
 * Template Name: TemplateBlog
 * Display Only Blog template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>
<section class="blog">
    <?php wc_get_template('templates/template-blog/blog-banner.php'); ?>
    <div class="blog__container">
        <div class="blog__container--new">
            <?php wc_get_template('templates/template-blog/blog-news-header.php'); ?>
            <?php wc_get_template('templates/template-blog/blog-container-bottom.php'); ?>
        </div>
</section>

<?php get_footer(); ?>