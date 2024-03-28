
<?php get_header(); 
function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}
  
    switch (sb_get_current_url()) {
        case "http://localhost/wordpress/category/tour/":
            get_template_part('archives/archive', 'tour' );
            break;
        case "http://localhost/wordpress/category/hotel/":
            get_template_part('archives/archive', 'hotel' );
            break;

    }
get_footer( );
echo the_category();