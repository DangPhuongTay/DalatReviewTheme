<?php get_header();
 
function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}
if(strpos( sb_get_current_url(), "/hotel" )){
    get_template_part('templates/template-hotel/archive', 'hotel');
}elseif(strpos( sb_get_current_url(), "/tour" )){
    get_template_part('templates/template-tour/archive', 'tour');
}elseif(strpos( sb_get_current_url(), "/car" )){
    get_template_part('templates/template-car/archive', 'car');
}elseif(strpos( sb_get_current_url(), "/blog" )){
    get_template_part('templates/template-blog/archive', 'blog' );
}elseif(strpos( sb_get_current_url(), "/motobike" )){
    get_template_part('templates/template-motobike/archive', 'motobike' );
}elseif(strpos( sb_get_current_url(), "/liveshow" )){
    get_template_part('templates/template-liveshow/archive', 'liveshow' );
}elseif(strpos( sb_get_current_url(), "/product" )){
    get_template_part('templates/template-tour/archive', 'product');
};


