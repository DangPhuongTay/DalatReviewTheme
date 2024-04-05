<?php
$tags = get_terms( array(
    'taxonomy' => 'product_tag', // WooCommerce sử dụng 'product_tag' làm taxonomy cho các tag
    'hide_empty' => false, // Hiển thị cả các tag không có sản phẩm nào liên kết
));

// Tạo các mảng riêng cho từng chủ đề
$topics = array(
    'giao-thong' => array(),
    'xu-huong' => array(),
    'kham-pha' => array()
);

// Phân loại các tag vào các chủ đề tương ứng
foreach ($tags as $tag) {
    $tag_slug = $tag->slug;
    switch (true) {
        case strpos($tag_slug, 'giao-thong') !== false:
            $topics['giao-thong'][] = $tag;
            break;
        case strpos($tag_slug, 'xu-huong') !== false:
            $topics['xu-huong'][] = $tag;
            break;
        case strpos($tag_slug, 'kham-pha') !== false:
            $topics['kham-pha'][] = $tag;
            break;
        default:
            // Xử lý các tag khác ở đây nếu cần thiết
            break;
    }
}

// Hiển thị các tag cho từng chủ đề
foreach ($topics as $topic_slug => $topic_tags) {
    ?>
    <h2><?php echo ucwords(str_replace('-', ' ', $topic_slug)); ?></h2>
    <ul>
        <?php foreach ($topic_tags as $tag) : ?>
            <li class="firstTag__internal--unit">
                <a href="<?php echo get_term_link($tag); ?>" class="firstTag__unit--suggestion"><?php echo $tag->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
}
?>
