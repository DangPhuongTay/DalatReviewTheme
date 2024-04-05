<?php
$tags = get_terms( array(
    'taxonomy' => 'product_tag', // WooCommerce sử dụng 'product_tag' làm taxonomy cho các tag
    'hide_empty' => false, // Hiển thị cả các tag không có sản phẩm nào liên kết
));

// Tạo các mảng riêng cho từng chủ đề
$topics = array(
    'Giao thông ở Đà Lạt' => array(),
    'xu hướng nổi bật' => array(),
    'Khám phá những trải nghiệm tại địa phương' => array()
);

// Phân loại các tag vào các chủ đề tương ứng
foreach ($tags as $tag) {
    $tag_slug = $tag->slug;
    switch (true) {
        case strpos($tag_slug, 'giao-thong') !== false:
            $topics['Giao thông ở Đà Lạt'][] = $tag;
            break;
        case strpos($tag_slug, 'xu-huong') !== false:
            $topics['xu hướng nổi bật'][] = $tag;
            break;
        case strpos($tag_slug, 'kham-pha') !== false:
            $topics['Khám phá những trải nghiệm tại địa phương'][] = $tag;
            break;
        default:
            // Xử lý các tag khác ở đây nếu cần thiết
            break;
    }
}

// Hiển thị các tag cho từng chủ đề
foreach ($topics as $topic_slug => $topic_tags) {
    ?>
    <div class="firstTag__internal--content">
    <h2 class="firstTag__internal--header"><?php echo ucwords(str_replace('-', ' ', $topic_slug)); ?></h2>
    <ul class="firstTag__internal--wrapper">
        <?php foreach ($topic_tags as $tag) : ?>
            <li class="firstTag__internal--unit">
                <a href="<?php echo get_term_link($tag); ?>" class="firstTag__unit--suggestion"><?php echo $tag->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
    <?php
}
?>
