<?php get_header();
function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}


if(strpos( sb_get_current_url(), "/place" )){
    get_template_part('templates/template-place');
}elseif(strpos( sb_get_current_url(), "/tour" )){
    get_template_part('templates/template-tour');   
}elseif(strpos( sb_get_current_url(), "/blog" )){
    get_template_part('templates/template-blog');
}elseif(strpos( sb_get_current_url(), "/vehicle" )){
    get_template_part('templates/template-vehicle');
}elseif(strpos( sb_get_current_url(), "/liveshow" )){
    get_template_part('templates/template-liveshow');
};
get_footer();


