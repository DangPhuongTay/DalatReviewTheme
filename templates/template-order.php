<?php
/**
 * Template Name: TemplateOrder
 * Display Only Order template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */

get_header(); ?>

    <body>
    <div class="orderpage__container">
        <div class="orderpage__container--wrapper">
            <div class="orderpage__container--wrapper__header">
                Thanh toán hoàn tất
            </div>
            <div class="orderpage__container--wrapper__body shadow">
                <div class="orderpage__container--wrapper__content">
                    <div class="orderpage__container--wrapper__banner banner_left">
                        <div class="orderpage__container--wrapper__banner--box">
                            <div class="orderpage__container--wrapper__banner--box__header">
                                <div class="banner__box"> Thông tin của bạn </div>
                                <div class="button__box">chỉnh sửa</div>
                            </div>
                            <hr class="dashes__ruler">
                            <div class="orderpage__container--wrapper__banner--box__body">
                                <div class="orderpage__container--wrapper__banner--box__body--content top">
                                    <div class="orderpage__container--wrapper__banner--box__body--content--left">
                                        Tên:
                                    </div>
                                    <div class="orderpage__container--wrapper__banner--box__body--content--right">
                                        Nguyễn Văn A
                                    </div>
                                </div>
                                <div class="orderpage__container--wrapper__banner--box__body--content bottom">
                                    <div class="orderpage__container--wrapper__banner--box__body--content--left">
                                        Email
                                    </div>
                                    <div class="orderpage__container--wrapper__banner--box__body--content--right">
                                        ANguyenVan@gmail.com
                                    </div>
                                </div>
                                <div class="orderpage__container--wrapper__banner--box__body--content bottom">
                                    <div class="orderpage__container--wrapper__banner--box__body--content--left">
                                        Số điện thoại
                                    </div>
                                    <div class="orderpage__container--wrapper__banner--box__body--content--right">
                                        0389679765
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderpage__container--wrapper__banner banner_right">
                        <div class="orderpage__container--wrapper__banner--box">
                            <div class="orderpage__container--wrapper__banner--box__header">
                                <div class="banner__box">Địa chỉ</div>
                                <div class="button__box"></div>
                            </div>
                            <hr class="dashes__ruler">
                            <div class="orderpage__container--wrapper__banner--box__body">
                                <div class="orderpage__container--wrapper__banner--box__body--content top">
                                    10 Lý thường kiệt, phường 8, TP.Đà Lạt
                                </div>
                                <div class="orderpage__container--wrapper__banner--box__body--content top">
                                    Note:
                                </div>
                                <div class="orderpage__container--wrapper__banner--box__body--content bottom">
                                    <textarea disabled
                                        placeholder="Em check in sớm 1h, anh chị sắp xếp giúp em nhé !!"></textarea>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="orderpage__container--wrapper__content">
                    <div class="orderpage__container--wrapper__banner banner_bottom">
                        <div class="orderpage__container--wrapper__banner--box">
                            <div class="orderpage__container--wrapper__banner--box__header">
                                <div class="banner__box"> Thông tin đơn hàng </div>
                                <div class="button__box"></div>
                            </div>
                            <hr class="dashes__ruler">
                            <div class="orderpage__container--wrapper__banner--box__body">
                                <div class="orderpage__container--wrapper__banner--box__body--content top">
                                    <div>Giỏ hàng:</div>
                                    <div>số lượng</div>
                                    <div>Thành viên</div>
                                </div>

                                <div class="orderpage__container--wrapper__banner--box__body--content__cart">
                                    <div
                                        class="orderpage__container--wrapper__banner--box__body--content__cart--detail">
                                        Vé Lulolala Show Hà Nhi 05/11
                                    </div>
                                    <div class="orderpage__container--wrapper__banner--box__body--content__cart--desc">
                                        <span>x1</span>
                                        <div>Giá: 750.000 đ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="orderpage__container--wrapper">
            <div class="orderTicket__wrapper">
                <div class="orderTicket__box">
                    <div class="orderTicket__header">
                        <div class="orderTicket__header--avt">
                            
                        </div>
                        <div class="orderTicket__header--content">
                            <div class="orderTicket__header--content__top">
                                <div class="orderTicket__header--content__header">
                                    THUÊ XE MÁY GIÁ RẺ TẠI ĐÀ LẠT
                                </div>
                                <div class="orderTicket__header--content__amount">
                                    01
                                </div>
                            </div>
                            <div class="orderTicket__header--content__bottom">
                                Quý khách thường lo lắng, thường thắc mắc thuê xe máy Đà Lạt giá bao nhiêu?
                                 Sau đây là bảng giá thuê xe máy ở Đà Lạt áp dụng cho ngày thường và đặt trước.
                            </div>
                           
                        </div>
                        
                    </div>
                    <hr>
                    <div class="orderTicket__bottom">
                        100.000 d
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
<div class="found" style="flex-direction: row;">
  <div style="width: 50%; height: 50vh;  align-items: start;">
        <?php
          $slug_request = $wp->request;
          $requestid = explode("/",  $slug_request);
          $order = wc_get_order($requestid[2]);
          $order_data = $order->get_data();
          $order_total = $order_data['total'];
  
          $order_billing_first_name = $order_data['billing']['first_name'];
          $order_billing_phone = $order_data['billing']['phone'];
          $order_billing_email = $order_data['billing']['email'];
          $order_billing_address_1 = $order_data['billing']['address_1'];
          $order_billing_date_in = $order->get_meta('billing_date_out');
          $order_billing_date_out = $order->get_meta('billing_date_in');
          $order_billing_note = $order->get_meta('billing_note');
          ?>
          
          <p class="found__title">THÔNG TIN NGƯỜI DÙNG</p>
          <p class="found__title">--------------------------------------</p>
       
        <p class="found__title"><span>Khách hàng: </span><?php echo $order_billing_first_name;?></p>
        <p class="found__title"><span>Số điện thoại: </span><?php echo $order_billing_phone;?></p>
        <p class="found__title"><span>Email: </span><?php  echo $order_billing_email;?></p>
        <p class="found__title"><span>Địa chỉ: </span><?php echo $order_billing_address_1;?></p>
        <p class="found__title"><span>Ngày đi: </span><?php echo $order_billing_date_in;?></p>
        <p class="found__title"><span>Đến: </span><?php echo $order_billing_date_out;?></p>
        <p class="found__title"><span>Ghi chú: </span><?php echo $order_billing_note;?></p>
    </div>
    <div style="width: 50%;height: 50vh; align-items: start;">
        <?php
          $slug_request = $wp->request;
          $requestid = explode("/",  $slug_request);
          $order = wc_get_order($requestid[2]);
          $order_data = $order->get_data();
          $order_total = $order_data['total'];
          ?>
          
          <p class="found__title">THÔNG TIN ĐƠN HÀNG</p>
          <p class="found__title">--------------------------------------</p>
        <?php
        $text_order_list='';
          // Iterating through each WC_Order_Item_Product objects
          foreach ($order->get_items() as $item_key => $item ):
          
              ## Using WC_Order_Item methods ##
          
              // Item ID is directly accessible from the $item_key in the foreach loop or
              $item_id = $item->get_id();

              ## Using WC_Order_Item_Product methods ##
          
              $product      = $item->get_product(); // Get the WC_Product object
          
              $product_id   = $item->get_product_id(); // the Product id
              $variation_id = $item->get_variation_id(); // the Variation id
          
              $item_type    = $item->get_type(); // Type of the order item ("line_item")
          
              $item_name    = $item->get_name(); // Name of the product
              $quantity     = $item->get_quantity();  
              $tax_class    = $item->get_tax_class();
              $line_subtotal     = $item->get_subtotal(); // Line subtotal (non discounted)
              $line_subtotal_tax = $item->get_subtotal_tax(); // Line subtotal tax (non discounted)
              $line_total        = $item->get_total(); // Line total (discounted)
              $line_total_tax    = $item->get_total_tax(); // Line total tax (discounted)
          
              ## Access Order Items data properties (in an array of values) ##
              $item_data    = $item->get_data();
          
              $product_name = $item_data['name'];
              $product_id   = $item_data['product_id'];
              $variation_id = $item_data['variation_id'];
              $quantity     = $item_data['quantity'];
              $tax_class    = $item_data['tax_class'];
              $line_subtotal     = $item_data['subtotal'];
              $line_subtotal_tax = $item_data['subtotal_tax'];
              $line_total        = $item_data['total'];
              $line_total_tax    = $item_data['total_tax'];
          
              // Get data from The WC_product object using methods (examples)
              $product        = $item->get_product(); // Get the WC_Product object
          
              $product_type   = $product->get_type();
              $product_sku    = $product->get_sku();
              $product_price  = $product->get_price();
              $stock_quantity = $product->get_stock_quantity();
              $text_order_item = $product_name.'x'.$quantity.'='.$line_subtotal;
              $text_order_list =$text_order_list.$text_order_item.', '  ;
            ?>
                <p class="found__title"><?php echo $product_name;?> x <?php echo $quantity;?></p>
                <p class="found__title"><?php echo $product_price;?> x <?php echo $quantity;?> = <?php echo $line_subtotal;?></p>
                <p class="found__title">----------------------</p>
            <?php
          endforeach;?>
        <p class="found__title"><span>Tổng cộng: </span><?php echo $order_total;?></p>
        <p class="found__title">--------------------------------------</p>
        <div class="submit__checkout">Xác nhận </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
                            <script type="text/javascript">
                              

                                          console.log(1);
                                            var data = "name=<?php echo $order_billing_first_name ?>&&phone=<?php echo $order_billing_phone ?>&&email=<?php echo $order_billing_email ?>&&address=<?php echo $order_billing_address_1 ?>&&order=<?php echo $text_order_list ?>&&total=<?php echo $order_total ?>";
                                            console.log(data);
                                            $.ajax({
                                                        type : 'GET', 
                                                        url : 'https://script.google.com/macros/s/AKfycbxDv3HoFM5yU_2wWGimhhNv2P4H0c07HBFhaTC_tiu6nWO30Pk9NgkoY5zy2umSxIpw/exec',
                                                        dataType:'json',
                                                        crossDomain : true,
                                                        data : data,
                                                        success : function(data)
                                                    { 
                                            if(data == 'false') 
                                                    {
                                                        alert('Thêm không thành công, bạn cũng có thể sử dụng để hiển thị Popup hoặc điều hướng');
                                                    }else{
                                                        alert('Cảm ơn bạn rất nhiều!');
                                                    }
                                        }
                                });
                            
                            </script>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script> 
<?php  ?>

