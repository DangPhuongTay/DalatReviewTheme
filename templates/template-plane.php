<?php
/**
 * Template Name: TemplatePlane
 * Display Only Plane template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>

    <div class="flight-card">
    <?php get_template_part('templates/template-plane/archive', 'plane'); ?>

    </div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plane.js"></script>

<?php get_footer(); ?>