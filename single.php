
<?php 

function sb_get_current_url() {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
}
get_header( );

if(strpos( sb_get_current_url(), "/hotel" )){
    get_template_part('contents/content', 'hotel');
}elseif(strpos( sb_get_current_url(), "/tour" )){
    get_template_part('contents/content', 'tour');
}elseif(strpos( sb_get_current_url(), "/car" )){
    get_template_part('contents/content', 'car');
}elseif(strpos( sb_get_current_url(), "/blog" )){
    get_template_part('contents/content', 'blog');
}elseif(strpos( sb_get_current_url(), "/motobike" )){
    get_template_part('contents/content', 'motobike');
}elseif(strpos( sb_get_current_url(), "/liveshow" )){
    get_template_part('contents/content', 'liveshow');
};

