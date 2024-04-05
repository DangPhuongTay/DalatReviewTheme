<?php
/**
 * Template Name: TemplateLiveShow
 * Display Only Detail Hotel template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

    <section class="liveshow">
      <div class="liveshow__banner">
        <div class="liveshow__banner--img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/liveshow_img.jpg" alt="" />
        </div>
        <div class="liveshow__banner--content">
          <div class="liveshow__banner--content__title">Vé liveshow</div>
          <div class="liveshow__banner--content__des">
            Trải nghiệm nhiều buổi biểu diễn âm nhạc vui nhộn cùng các ca sĩ nổi
            tiếng
          </div>
        </div>
      </div>
      <div class="liveshowMoblie__fitter--wrap">
        <div class="liveshowMobile__fitter">
          <div class="liveshowMobile__fitter--input">
            <input type="text" placeholder="Đang tìm...">
          </div>
          <div class="liveshowMobile__fitter--icon">
            <ion-icon name="search-outline"></ion-icon>
          </div>
        </div>
      </div>
      <div class="liveshow__container">
        <div class="liveshow__container--link">
          <a class="liveshow__container--link__return1" href="http://localhost/wordpress/">Trang chủ> </a>
          <a class="liveshow__container--link__return2" href="http://localhost/wordpress/liveshow/">Vé LiveShow>
          </a>
          <a class="liveshow__container--link__return3" href="http://localhost/wordpress/liveshow/detail-liveshow/">Lịch diễn liveshow Đà Lạt</a>
        </div>
        <!--  -->
        <!-- Category -->
        <!--  -->
        <div class="liveshow__container--body">
          <div class="liveshow__container--body__wrap">
            <div class="liveshow__container--body__menu">
              <div class="liveshow__container--body__menu--wrap liveshow__boder">
                <div class="liveshow__container--body__menu--title">Danh mục</div>
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
            if ( $cat->name == 'liveshow' ) {
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
                        <div class="liveshow__container--body__menu--item" >
                          <a href="<?php echo $sub_category->slug ?>" class="cart__container--top__left--all__left--check"><?php echo $sub_category->name ?>
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </a>
                        </div>
                <?php }
                   
                }
            }
            }
?>

              </div>
              <div class="liveshow__container--body__menu--wrap">
                <div class="liveshow__container--body__menu--title">Điểm đến</div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub()">
                  <label class="cart__container--top__left--all__left--check">Lịch diễn liveshow Đà Lạt
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown">
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 1
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 2
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 3
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub1()">
                  <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown--1">
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 1
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 2
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 3
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub2()">
                  <label class="cart__container--top__left--all__left--check">Lululola Show
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown--2">
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 1
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 2
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 3
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
          <div class="liveshow__container--body__product">
            <div class="liveshowMobile__title">Vé liveshow</div>
            <div class="liveshow__container--body__product--filter">
              <p class="liveshow__container--body__product--filter__find">
                Tìm thấy <b>50</b> kết quả
              </p>
              <div class="liveshow__container--body__product--filter__price--wrap">
                <div class="liveshow__container--body__product--filter__price">
                  <span class="liveshow__container--body__product--filter__price--title">Có thể đặt</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__product--filter__price">
                  <span class="liveshow__container--body__product--filter__price--title">Mức giá</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__product--filter__price instant-filter">
                  <span class="liveshow__container--body__product--filter__price--title">Xác nhận tức thời
                    <ion-icon name="alert-circle-outline"></ion-icon>
                  </span>
                  <label class="cart__container--top__left--all__left--check">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="liveshow__container--body__product--filter__price--content">
                  <div class="liveshow__container--body__product--filter__price--text">Sắp xếp theo</div>
                  <div class="liveshow__container--body__product--filter__price instant-filter"
                    onclick="btnLiveshowPoptip()">
                    <span class="liveshow__container--body__product--filter__price--title">Đề xuất</span>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                    <div class="liveshow__container--body__product--filter__price--poptip">
                      <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đề xuất</span>
                        
                      </div>
                      <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đặt nhiều nhất</span>
                      </div>
                      <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đánh giá cao nhất</span>
                      </div>
                      <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Giá (thấp đến cao)</span>
                      </div>
                      <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Giá (cao đến thấp)</span>
                      </div>
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
            <!--  -->
            <!-- Produclist -->
            <!--  -->
            <div class="liveshow__container--body__product--list">
            <?php 
            get_template_part('templates/template-liveshow/archive', 'liveshow');  
            ?>
            </div>
  
           
            </a>
             <!-- <div class="liveshow__container--body__product--list__page">
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>
              </a>
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">1</div>
              </a>
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">2</div>
              </a>
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">3</div>
              </a>
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">4</div>
              </a>
              <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
                </a>
            </div> -->
          </div>
  
        </div>
    </section>
  

<?php get_footer();?>