<?php
    /**
     * Template Name: TemplateTour
     * Display Only Tour template
     * 
     * @package WordPress
     * @subpackage eminent
     * @since eminent 1.0
     * 
     */
    get_header();?>

    <div class="tour">
        <!--! banner -->
        <div class="tour__banner"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/blog-banner.png');">
            <div class="tour__banner--wrap ">
                <div class="tour__banner--heading">
                    <h1>Tour & Trải nghiệm</h1>
                    <h2>Tour du lịch, trải nghiệm khám phá và hơn thế
                        nữa</p>
                </div>
                <div class="tour__banner--search">
                    <div class="tour__banner--search__icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <div class="tour__banner--search__input">
                        <input placeholder="Tìm kiếm" type="text">
                    </div>
                </div>
            </div>
        </div>
        <!--! filter -->
        <div class="search__filter">
            <div class="search__filter--wrap ">
            <?php
            $taxonomy     = 'product_cat';
            $orderby      = 'name';
            $show_count   = 0;      // 1 for yes, 0 for no
            $pad_counts   = 0;      // 1 for yes, 0 for no
            $hierarchical = 1;      // 1 for yes, 0 for no
            $title        = '';
            $empty        = 0;

            //  echo request();
            $args = array(
                   'taxonomy'     => $taxonomy,
                   'orderby'      => $orderby,
                   'show_count'   => $show_count,
                   'pad_counts'   => $pad_counts,
                   'hierarchical' => $hierarchical,
                   'title_li'     => $title,
                   'hide_empty'   => $empty
            );
          
           $all_categories = get_categories( $args );
           foreach ( $all_categories as $cat ) {
          
              if ( $cat->name == 'tour' ) {
          
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
                          'hide_empty'   => $empty
                  );
          
                  $sub_cats = get_categories( $args2 );
                  if ( $sub_cats ) {
                      echo ' ';
                      foreach( $sub_cats as $sub_category ) {
                        //   echo  '<li>><a href="'.$sub_category->slug.'">'. $sub_category->name .'</a></li>';
                        // echo '<li><a class="primary__dropdown--content__list--item" href="#">Tour Camping Đà Lạt</a></li>';
                      }
                      echo '';
          
                  }
          
              }
          
          }
    
                ?>

                <!-- filter left-->
                <div class="search__filter--left">
                    <div class="quick__filter--entry">
                        <div class="quick__filter--entry__wrapper">
                            <div class="quick__filter--entry__content">
                                <div class="quick__filter--entry__content--left">
                                    <div class="fliter__category">
                                        <div class="fliter__category--content ">
                                            <div class="primary__dropdown">
                                                <div id="primary__dropdown--button__all" class="primary__dropdown--button"
                                                    onclick="primaryDropdown()">
                                                    <span>Tất cả danh
                                                        mục</span>
                                                    <div class="primary__dropdown--icon">
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </div>
                                                </div>
                                                <?php
                                                    $taxonomy     = 'product_cat';
                                                    $orderby      = 'name';
                                                    $show_count   = 0;      // 1 for yes, 0 for no
                                                    $pad_counts   = 0;      // 1 for yes, 0 for no
                                                    $hierarchical = 1;      // 1 for yes, 0 for no
                                                    $title        = '';
                                                    $empty        = 0;

                                                    //  echo request();
                                                    $args = array(
                                                        'taxonomy'     => $taxonomy,
                                                        'orderby'      => $orderby,
                                                        'show_count'   => $show_count,
                                                        'pad_counts'   => $pad_counts,
                                                        'hierarchical' => $hierarchical,
                                                        'title_li'     => $title,
                                                        'hide_empty'   => $empty
                                                    );
                                                
                                                $all_categories = get_categories( $args );
                                                foreach ( $all_categories as $cat ) {
                                                
                                                    if ( $cat->name == 'tour' ) {
                                                
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
                                                                'hide_empty'   => $empty
                                                        );
                                                
                                                        $sub_cats = get_categories( $args2 );
                                                        if ( $sub_cats ) {
                                                            echo ' <div class="primary__dropdown--content" id="primaryDropdownHidden">
                                                            <ul class="primary__dropdown--content__list"
                                                                aria-labelledby="dropdownMenuButton1">';
                                                            foreach( $sub_cats as $sub_category ) {
                                                                echo '<li><a class="primary__dropdown--content__list--item" href="'.$sub_category->slug.'">'. $sub_category->name .'</a></li>';
                                                            }
                                                            echo '</ul>
                                                            </div>';
                                                
                                                        }
                                                
                                                    }
                                                
                                                }
                                            
                                                        ?>

                                            </div>
                                            <?php
                                                    $taxonomy     = 'product_cat';
                                                    $orderby      = 'name';
                                                    $show_count   = 0;      // 1 for yes, 0 for no
                                                    $pad_counts   = 0;      // 1 for yes, 0 for no
                                                    $hierarchical = 1;      // 1 for yes, 0 for no
                                                    $title        = '';
                                                    $empty        = 0;

                                                    //  echo request();
                                                    $args = array(
                                                        'taxonomy'     => $taxonomy,
                                                        'orderby'      => $orderby,
                                                        'show_count'   => $show_count,
                                                        'pad_counts'   => $pad_counts,
                                                        'hierarchical' => $hierarchical,
                                                        'title_li'     => $title,
                                                        'hide_empty'   => $empty
                                                    );
                                                
                                                $all_categories = get_categories( $args );
                                                foreach ( $all_categories as $cat ) {
                                                
                                                    if ( $cat->name == 'tour' ) {
                                                
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
                                                            echo ' <div class="fliter__category--content__box">';
                                                            foreach( $sub_cats as $sub_category ) {
                                                                echo '<div class="fliter__category--content__box--item">
                                                                <a href="'.$sub_category->slug.'">'. $sub_category->name .'</a>
                                                            </div>';
                                                            }
                                                            echo '</div>';
                                                
                                                        }
                                                
                                                    }
                                                
                                                }
                                            
                                                        ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="gap"></div>
                                <div class="quick__filter--entry__content--right">
                                    <div class="filter__date primary__dropdown--button">
                                        <span>Ngày tham gia</span>
                                        <div class="primary__dropdown--icon">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="filter__price primary__dropdown--button">
                                        <span>Lọc theo giá</span>
                                        <div class="primary__dropdown--icon">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
                <div class="search__filter--right">
                    <div class="total__filter">
                        <div class="total__filter--btn">
                            <div class="total__filter--btn__icon">
                                <ion-icon name="filter-outline"></ion-icon>
                            </div>
                            <div class="total__filter--btn__text">
                                <span>Lọc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- filter mobile -->
        <div class="tourMobile__category">
            <div class="tourMobile__categoryTop">
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
                if ( $cat->name == 'tour' ) {
                $category_id = $cat->term_id;
                ?>
                    <img src="<?php echo get_the_post_thumbnail_url( $cat->term_id, 'thumnail'); ?>" >;
                <?php
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
                echo '<div class="tourMobile__category--list">';
                foreach( $sub_cats as $sub_category ) { ?>
                    <a href="<?php echo$sub_category->slug ?>" class="tourMobile__categoryTop--list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_day_trips.png" alt="tour_category_zipline">
                        <span ><?php echo $sub_category->name ?></span>
                    </a>
                <?php }
                echo '</div>';
                }
                }
                }
?>
        

            </div>
            <div class="tourMobile__categoryBot">
                <div class="tourMobile__category--list">
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Hướng dẫn tiếng Việt</span>
                    </div>
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Tour riêng</span>
                    </div>
                    <div class="tourMobile__categoryBot--list__item">
                        <span>Hoàn tiền dễ dàng</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="firstProduct ">
            <div class="firstProduct__content">
                <?php  get_template_part('templates/template-tour/archive', 'tour');   ?>
            </div>
        </div>
            <div class="breakCrumb ">
                <div class="breakCrumb__list">
                    <a href="#" class="breakCrumb__list--item">Trang chủ</a>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="breakCrumb__list--item">Đà Lạt</a>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="breakCrumb__list--item">Tour & Trải
                        nghiệm</a>
                </div>
            </div>
            <!--! firstReview -->
            <!-- ==============================================
                Name: First Product, fix Filter Tour
                Creact by: Ngọc Ánh
                Creact at: 1:45PM 30/1/2024
                Update: 
            ============================================== -->
            <div class="firstReview">
                <h2 class="tour__Title">
                    Mọi người nói gì về Tour & Trải nghiệm ở Đà Lạt
                </h2>
                <div class="firstReview__card container-fluid">
                    <div class="firstReview__card">
                        <div class="firstReview__card--item ">
                            <div class="scoreStar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="firstReview__for">
                                <span>Đánh giá cho: </span>
                                <a href="/detail_tour">Đi Xe Trượt Thác Datanla New Alpine
                                    Tại
                                    Đà Lạt</a>
                            </div>
                            <div class="firstReview__time">
                                <span>Người dùng</span>
                                Đăng 229 ngày trước
                            </div>
                            <div class="firstReview__content">
                                Đặt hàng qua Đà Lạt Review tiết kiệm được chi
                                phí vì có chương trình giảm giá. mọi người nhớ
                                đổi ra vé giấy rồi hãy vào xếp hàng để lên xe
                                trượt nhé.
                            </div>
                        </div>
                        <div class="firstReview__card--item ">
                            <div class="scoreStar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="firstReview__for">
                                <span>Đánh giá cho: </span>
                                <a href="../page/detail_tour.html">Trải Nghiệm Đu Dây High Rope Course
                                    Đà Lạt</a>
                            </div>
                            <div class="firstReview__time">
                                <span>Người dùng</span>
                                Đăng 20 ngày trước
                            </div>
                            <div class="firstReview__content">
                                Đường trượt mới rất đã, cảm giác an toàn hơn.
                                Trải nghiệm high rope cũng rất tuyệt.
                            </div>
                        </div>
                    </div>
                    <!-- nextBtn -->
                    <!-- <div class="nextBtn">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div> -->
                </div>
    
            </div>
            <!--! hightlightProduct -->
    
            <div class="hightlightProduct ">
                <div class="hightlightProduct__wrap">
                    <h2 class="tour__Title">
                        Xu Hướng
                    </h2>
                    <div class="hightlightProduct__content">
                        <div class="hightlightProduct__content--wrap">
                            
                            <?php
                            get_template_part('templates/template-tour/item', 'tourhightlight');
                            ?>
                          
                            <!-- nextBtn -->
                            <!-- <div class="nextBtn">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/tour.js"></script>
    <?php


get_footer(); ?>
