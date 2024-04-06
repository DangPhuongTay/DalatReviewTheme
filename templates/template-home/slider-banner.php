<?php
function get_all_media_items_with_slide_home_title() {
    global $wpdb;

    // Sử dụng truy vấn SQL để lấy tất cả các phần tử phương tiện có tiêu đề chứa "slide-home"
    $query = "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'attachment' AND post_title LIKE '%slide-home%'";
    $media_items = $wpdb->get_results($query);

    return $media_items;
}

// Sử dụng hàm để lấy danh sách các phần tử phương tiện
$media_items = get_all_media_items_with_slide_home_title();

// Hiển thị danh sách các phần tử phương tiện (ví dụ)
foreach ($media_items as $media_item) {
    // Lấy mã HTML của hình ảnh với class "home__slider--item__image"
    $image_html = wp_get_attachment_image($media_item->ID, 'full', false, array('class' => 'home__slider--item__image'));
    // Hiển thị hình ảnh
    echo $image_html;
}
?>
