<?php
/**
 * Template Name: TemplatePlace
 * Display Only Place template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
        <div class="secondDropDown">
            <?php get_template_part('templates/template-search/searchhotel'); ?>
        </div>
    
        <div class="hotelMobile__fitter">
        <?php get_template_part('templates/template-search/searchhotelmobile'); ?>
        </div>
        <div class="hotel__fitter--blur"></div>
        <div class="hotel__fitter--blur__2"></div>
    
    <div class="hotelMobile__fitter--iner">
        <div class="hotelMobile__header--filter">
            <div class="hotelMobile__header--filter__item location">
                <span>Khu vực</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item fitter">
                <span>Bộ lọc</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item range">
                <span>Sắp xếp</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item">
                <span>Bản đồ</span>
                <ion-icon name="map-outline"></ion-icon>
            </div>
        </div>
    </div>
    <div class="hotel__backgroup--blur"></div>
    </div>
    <div class="hotelMobile__fitter--box">
        <div class="hotelMobile__fitter--box__header">
            <ion-icon name="close-outline"></ion-icon>
            <span>Bộ lọc</span>
        </div>
        <div class="hotelMobile__fitter--box__body">
            <div class="hotelMobile__fitter--box__body--left">
                <a href="#hotelMobile__fitter--box__body--left__target" id="hotelMobile__fitter--box__body--left__target" class="hotelMobile__fitter--box__body--left__target">Địa danh</a>
                <a href="#hotelMobile__fitter--box__body--left__target--1" id="hotelMobile__fitter--box__body--left__target--1" class="hotelMobile__fitter--box__body--left__target">Khu vực</a>
            </div>
            <div class="hotelMobile__fitter--box__body--right">
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p class="hotelMobile__fitter--box__body--right__title">
                        Địa danh
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Biệt thự hằng nga</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Hồ Xuân Hương</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 1</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 2</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Biệt thự hằng nga</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 3</span>
                        </div>
                    </div>
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p class="hotelMobile__fitter--box__body--right__title">
                        Khu vực
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tho chau</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hotelMobile__fitter--box__footer">
            <button>Xoá</button>
            <button class="firstBtn">Xem kết quả</button>
        </div>
    </div>
    <div class="hotelMobile__fitter--box__1">
        <div class="hotelMobile__fitter--box__header fitter">
            <ion-icon name="close-outline"></ion-icon>
            <span>Bộ lọc</span>
        </div>
        <div class="hotelMobile__fitter--box__body">
            <div class="hotelMobile__fitter--box__body--left">
                <a href="#hotelMobile__fitter--box__body--right__title--rate" class="hotelMobile__fitter--box__body--left__target">Đánh giá sao</a>
                <a href="#hotelMobile__fitter--box__body--right__title--point" class="hotelMobile__fitter--box__body--left__target">Điểm đánh giá</a>
                <a href="#hotelMobile__fitter--box__body--right__title--endow" class="hotelMobile__fitter--box__body--left__target">Ưu đãi & nổi bật</a>
                <a href="#hotelMobile__fitter--box__body--right__title--hotel" class="hotelMobile__fitter--box__body--left__target">Loại chỗ nghỉ</a>
                <a href="#hotelMobile__fitter--box__body--right__title--local" class="hotelMobile__fitter--box__body--left__target">Chuỗi/Thương hiệu</a>
                <a href="#hotelMobile__fitter--box__body--right__title--stay" class="hotelMobile__fitter--box__body--left__target">Chính sách chỗ lưu trú</a>
            </div>
            <div class="hotelMobile__fitter--box__body--right">
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--rate" class="hotelMobile__fitter--box__body--right__title">
                        Đánh giá sao
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>5</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>4</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>3</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p><2</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--point" class="hotelMobile__fitter--box__body--right__title">
                        Điểm đánh giá
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tuyệt vời(4.5+)</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Rất tốt(4+)</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tốt(3.5+)</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--endow" class="hotelMobile__fitter--box__body--right__title">
                        Ưu đãi & nổi bật
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Trung tâm thành phố</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--hotel" class="hotelMobile__fitter--box__body--right__title">
                        Loại chỗ nghỉ
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Khách sạn</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Resort</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Homestay</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Nhà khách</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--local" class="hotelMobile__fitter--box__body--right__title">
                        Chuỗi/Thương hiệu
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Swiss-BelResort</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Mercure</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>OYO Rooms </span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <div id="hotelMobile__fitter--box__body--right__title--stay" class="hotelMobile__fitter--box__body--right__title">
                        Chính sách chỗ lưu trú
                        <p class="hotelMobile__fitter--box__body--right__title--text">Chính sách chỗ lưu trú</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Hồ bơi</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Đón và trả khách trạm tàu hoả/xe buýt, sân bay miễn phí</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Restaurant</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>CLB Nightclub</span>
                            </div>
                        </div>
                        <p class="hotelMobile__fitter--box__body--right__title--text">Tiện ích Phòng</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bồn tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Phòng tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Máy sấy</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bàn ủi & cầu là</span>
                            </div>
                        </div>
                        <p class="hotelMobile__fitter--box__body--right__title--text">Tiện nghi phòng</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Có thể sử dụng xe lăn</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Phòng tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Tiện nghi phòng trong nhà</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bồn cầu có tay vịn</span>
                            </div>
                        </div>
                    </div>

                    
                    
                </div>
                
            </div>
        </div>
        <div class="hotelMobile__fitter--box__footer">
            <button>Xoá</button>
            <button class="firstBtn">Xem kết quả</button>
        </div>
    </div>
    <div class="section">
        <div class="hotel__body">
            <div class="hotel__body--left">
                <div class="hotel__left--map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d243.94747235251486!2d108.44151669696855!3d11.963452602828777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1706154505980!5m2!1svi!2s" width="300" height="117" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="hotel__left--section">
                    <div class="hotel__left--item">
                        <p class="hotel__left--item__title">Đánh giá sao</p>
                        <div class="hotel__left--star">
                            <p>5</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p>4</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p>3</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p><2</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                    </div>
                    <div class="hotel__left--item">
                        <p class="hotel__left--item__title">Điểm đánh giá</p>
                        <div class="hotel__left--star">
                            <p>4.5+</p>
                        </div>
                        <div class="hotel__left--star">
                            <p>4+</p>
                        </div>
                        <div class="hotel__left--star">
                            <p>3.5+</p>
                        </div>
                    </div>
                    <div class="hotel__left--content location">
                        <div class="hotel__left--content__title">
                            <p class="hotel__left--item__title">Khu Vực</p>
                        </div>
                        <div class="hotel__left--content__logo">
                            <ion-icon name="chevron-forward-sharp"></ion-icon>
                        </div>
                    </div>
                    <div class="hotel__left--content fitter">
                        <div class="hotel__left--content__title">
                            <p class="hotel__left--item__title">Chính sách chỗ lưu trú</p>
                        </div>
                        <div class="hotel__left--content__logo">
                            <ion-icon name="chevron-forward-sharp"></ion-icon>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="hotel__body--right">
                <div class="hotel__right--fitter">

                <?php
                $taxonomy     = 'product_cat';
                $orderby      = 'name';
                $show_count   = 0;      // 1 for yes, 0 for no
                $pad_counts   = 0;      // 1 for yes, 0 for no
                $hierarchical = 1;      // 1 for yes, 0 for no
                $title        = '';
                $empty        = 0;
            $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty);
            $all_categories = get_categories( $args );

            foreach ( $all_categories as $cat ) {
            if ( $cat->name == 'Place' ) {
            $category_id = $cat->term_id;
                $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty,
                );
            $sub_cats = get_categories( $args2 );
            if ( $sub_cats ) {
                    
                foreach( $sub_cats as $sub_category ) { ?>
                        <div class="hotel__right--fitter__tag">
                        <a href="<?php echo $sub_category->slug ?>" id="hotel__right--fitter__title"  class="hotel__right--fitter__title"><?php echo $sub_category->name ?></a>
                    </div>
                <?php }
                   
                }
            }
            }
?>
                </div>
                        <?php get_template_part('templates/template-place/archive', 'place'); ?>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hotel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/secondDropdown.js"></script>
</body>
</html>