<?php
$tags = get_terms( 
    array(
    'taxonomy' => 'product_tag', // WooCommerce sử dụng 'product_tag' làm taxonomy cho các tag
    'hide_empty' => false, // Hiển thị cả các tag không có sản phẩm nào liên kết
));


// Phân loại các tag vào các chủ đề tương ứng
foreach ($tags as $tag) {
?>                        
<form class="tag__home" method="get" name="form" action="<?php echo home_url();?>/tag" >
    <div  >
        <button class="hotel__left--star" value="<?php echo $tag->slug ?>"  name="tag"  onChange="this.form.submit();"><?php echo $tag->name ?></button> 
        <span>  |  </span>
    </div>
    
</form>
        
        <?php
    }




?>

