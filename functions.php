<?php
    global $theme_path;
    $theme_path = get_template_directory_uri();
    function tao_contact()
{


    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Contact Manager', 
        'singular_name' => 'Liên hệ' 
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tạo Liên hệ', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
        ), 
        
        //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/contact.png', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post',
    );


    register_post_type('contact', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_contact');

add_filter('pre_get_posts','lay_contact');

function lay_contact($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','contact'));
return $query;
}
    function tao_custom_post_type()
    {
    
    
        /*
         * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
         */
        $label = array(
            'name' => 'Sale Banner', //Tên post type dạng số nhiều
            'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
        );
    
    
        /*
         * Biến $args là những tham số quan trọng trong Post Type
         */
        $args = array(
            'labels' => $label, //Gọi các label trong biến $label ở trên
            'description' => 'Tạo Banner DalatReview', //Mô tả của post type
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            //Các tính năng được hỗ trợ trong post type
            
            'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
            'public' => true, //Kích hoạt post type
            'show_ui' => true, //Hiển thị khung quản trị như Post/Page
            'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
            'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
            'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
            'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
            'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/sale.png', //Đường dẫn tới icon sẽ hiển thị
            'can_export' => true, //Có thể export nội dung bằng Tools -> Export
            'has_archive' => true, //Cho phép lưu trữ (month, date, year)
            'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
            'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
            'capability_type' => 'post',
        );
    
    
        register_post_type('sale', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    
    
    }
    /* Kích hoạt hàm tạo custom post type */
    add_action('init', 'tao_custom_post_type');
    
    add_filter('pre_get_posts','lay_custom_post_type');

function lay_custom_post_type($query) {
  if (is_home() && $query->is_main_query ())
    $query->set ('post_type', array ('post','sale'));
    return $query;
}

// footer
function tao_footer()
{


    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Footer', //Tên post type dạng số nhiều
        'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tạo footer', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ), 
        
        //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/bottom.png', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post',
    );


    register_post_type('footer', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_footer');

add_filter('pre_get_posts','lay_footer');
function lay_footer($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','footer'));
return $query;
}




function tao_slide_img()
{


    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Slide Manager', 
        'singular_name' => 'Tạo slide Ảnh' 
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tạo slide', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
        ), 
        
        //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/presentation.png', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post',
    );


    register_post_type('slide', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_slide_img');

add_filter('pre_get_posts','lay_img');

function lay_img($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','slide'));
return $query;
}


function tao_banner_info()
{


    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Banner Info Manager', 
        'singular_name' => 'Tạo banner info' 
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tạo banner info', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), 
        
        //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/banner-info.png', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post',
    );


    register_post_type('bannerinf', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_banner_info');

add_filter('pre_get_posts','lay_banner_info');

function lay_banner_info($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','bannerinf'));
return $query;
}

function tao_banner_contact()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Banner Info Manager', 
        'singular_name' => 'Tạo banner info' 
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tạo banner info', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), 
        
        //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  home_url(). '/wp-content/uploads/2024/04/banner-info.png', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post',
    );


    register_post_type('bannercontact', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_banner_contact');

add_filter('pre_get_posts','lay_banner_contact');

function lay_banner_contact($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','bannercontact'));
return $query;
}

add_filter( 'woocommerce_get_remove_url', 'custom_item_remove_url', 10, 1 );
function custom_item_remove_url( $remove_url ) {
    $cart_page_url   = wc_get_page_permalink( 'cart' );
    $replacement_url = wc_get_page_permalink( 'shop' ); // Shop page

    // Change URL to shop page + remove Url query vars
    $remove_url = str_replace($cart_page_url, $replacement_url, $remove_url);

    return $remove_url;
}
function wpse_178112_permastruct_html( $post_type, $args ) {
    if ( $post_type === 'product' )
    add_permastruct( $post_type, "{$args->rewrite['slug']}/%$post_type%.html", $args->rewrite );
  }
  
  add_action( 'registered_post_type', 'wpse_178112_permastruct_html', 10, 2 );
  function na_remove_slug( $post_link, $post, $leavename ) {
 
    if ( 'product' != $post->post_type || 'publish' != $post->post_status ) {

    return $post_link;

}

    $post_link = str_replace( '/product/', '/', $post_link );

    return $post_link;

}

add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function change_slug_struct( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {

    return;

}

            if ( ! empty( $query->query['name'] ) ) {

            $query->set( 'post_type', array( 'post', 'product', 'page' ) );

            } elseif ( ! empty( $query->query['pagename'] ) && false === strpos( $query->query['pagename'], '/' ) ) {

            $query->set( 'post_type', array( 'post', 'product', 'page' ) );

    // We also need to set the name query var since redirect_guess_404_permalink() relies on it.

    $query->set( 'name', $query->query['pagename'] );

}

}

add_action( 'pre_get_posts', 'change_slug_struct', 99 );

