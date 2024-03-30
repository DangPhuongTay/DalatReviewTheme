<?php get_header();
 
function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}

    switch (sb_get_current_url()) {
        case "http://localhost/wordpress/category/tour/":
            get_template_part('templates/template-tour/archive', 'tour');
            break;
        case "http://localhost/wordpress/category/hotel/":
            get_template_part('templates/template-hotel/archive', 'hotel');
            break;
        case "http://localhost/wordpress/category/blog/":
            get_template_part('templates/template-blog/archive', 'blog' );
            break;
        case "http://localhost/wordpress/category/liveshow/":
            get_template_part('templates/template-liveshow/archive', 'liveshow' );
            break;
        case "http://localhost/wordpress/category/car/":
            get_template_part('templates/template-car/archive', 'car' );
            break;
        case "http://localhost/wordpress/category/motobike/":
            get_template_part('templates/template-motobike/archive', 'motobike' );
        case "http://localhost/wordpress/product-category/demo/":
            get_template_part('templates/template-tour/archive', 'hotel' );
            break;

    }

