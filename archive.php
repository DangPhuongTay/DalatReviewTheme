<?php get_header();
 
function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}
function request() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $wp->request;
}


// if(strpos( sb_get_current_url(), request() )){
//     get_template_part('templates/template-hotel/archive', request());
// }

