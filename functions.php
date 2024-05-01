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

function the_title_trim($title)
            {
            $pattern[0] = '/Protected:/';
            $pattern[1] = '/Private:/';
            $replacement[0] = ''; // Enter some text to put in place of Protected:
            $replacement[1] = ''; // Enter some text to put in place of Private:
            return preg_replace($pattern, $replacement, $title);
            }
   add_filter('the_title', 'the_title_trim');
   
    function my_vc_display_product_price( $args ) {
        $product_id = $args['id'];
        $product = wc_get_product( $product_id );
        echo '<p class="price">' . $product->get_price_html() . '</p>';

    }
add_shortcode( 'my_vc_product_price', 'my_vc_display_product_price');      

// function wc_variation_buttons($html, $args) {
//     $args = wp_parse_args(apply_filters('woocommerce_dropdown_variation_attribute_options_args', $args), array(
//       'options'          => false,
//       'attribute'        => false,
//       'product'          => false,
//       'selected'         => false,
//       'name'             => '',
//       'id'               => '',
//       'class'            => '',
//       'show_option_none' => __('Choose an option', 'woocommerce'),
//     ));
  
//     if(false === $args['selected'] && $args['attribute'] && $args['product'] instanceof WC_Product) {
//       $selected_key     = 'attribute_'.sanitize_title($args['attribute']);
//       $args['selected'] = isset($_REQUEST[$selected_key]) ? wc_clean(wp_unslash($_REQUEST[$selected_key])) : $args['product']->get_variation_default_attribute($args['attribute']);
//     }
  
//     $options               = $args['options'];
//     $product               = $args['product'];
//     $attribute             = $args['attribute'];
//     $name                  = $args['name'] ? $args['name'] : 'attribute_'.sanitize_title($attribute);
//     $id                    = $args['id'] ? $args['id'] : sanitize_title($attribute);
//     $class                 = $args['class'];
//     $show_option_none      = (bool)$args['show_option_none'];
//     $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __('Choose an option', 'woocommerce');
  
//     if(empty($options) && !empty($product) && !empty($attribute)) {
//       $attributes = $product->get_variation_attributes();
//       $options    = $attributes[$attribute];
//     }
  
//     $radios = '<div class="variation-radios">';
  
//     if(!empty($options)) {
//       if($product && taxonomy_exists($attribute)) {
//         $terms = wc_get_product_terms($product->get_id(), $attribute, array(
//           'fields' => 'all',
//         ));
  
//         foreach($terms as $term) {
//           if(in_array($term->slug, $options, true)) {
//             $id = $name.'-'.$term->slug;
//             $radios .= '<label for="'.esc_attr($id).'">'.esc_html(apply_filters('woocommerce_variation_option_name', $term->name)).'</label><input type="radio" id="'.esc_attr($id).'" name="'.esc_attr($name).'" value="'.esc_attr($term->slug).'" '.checked(sanitize_title($args['selected']), $term->slug, false).'>';
//           }
//         }
//       } else {
//         foreach($options as $option) {
//           $id = $name.'-'.$option;
//           $checked    = sanitize_title($args['selected']) === $args['selected'] ? checked($args['selected'], sanitize_title($option), false) : checked($args['selected'], $option, false);
//           $radios    .= '<label for="'.esc_attr($id).'">'.esc_html(apply_filters('woocommerce_variation_option_name', $option)).'</label><input type="radio" id="'.esc_attr($id).'" name="'.esc_attr($name).'" value="'.esc_attr($option).'" id="'.sanitize_title($option).'" '.$checked.'>';
//         }
//       }
//     }
  
//     $radios .= '</div>';
      
//     return $html.$radios;
//   }
  
//   add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'wc_variation_buttons', 20, 2 );
?>
