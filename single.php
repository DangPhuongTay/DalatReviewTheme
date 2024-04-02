
<?php 

function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}
get_header();
if(strpos( sb_get_current_url(), "/hotel" )){
    get_template_part('templates/template-hotel/content', 'hotel');
}elseif(strpos( sb_get_current_url(), "/tour" )){
    get_template_part('templates/template-tour/content', 'tour');
}elseif(strpos( sb_get_current_url(), "/car" )){
    get_template_part('templates/template-car/content', 'car');
}elseif(strpos( sb_get_current_url(), "/blog" )){
    get_template_part('templates/template-blog/content', 'blog');
}elseif(strpos( sb_get_current_url(), "/motobike" )){
    get_template_part('templates/template-motobike/content', 'motobike');
}elseif(strpos( sb_get_current_url(), "/liveshow" )){
    get_template_part('templates/template-liveshow/content', 'liveshow');
}elseif(strpos( sb_get_current_url(), "/product" )){
    get_template_part('templates/template-tour/content', 'product');
};

