<div class="section">
        <div class="hotel__body">
            <div class="hotel__body--left">
                <div class="hotel__left--map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.1587690292367!2d108.43898547627491!3d11.963507236175037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317113f4c18632c7%3A0xb5d7f587fc6eac6c!2zxJDDoCBM4bqhdCBSZXZpZXcgVOG6pXQgVOG6p24gVOG6rXQ!5e0!3m2!1svi!2s!4v1714366661776!5m2!1svi!2s" style="border-radius:20px"; style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="hotel__left--section">
                    <!-- <div class="hotel__left--item">
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
                    </div> -->
                    <div class="hotel__left--item">
                        <p class="hotel__left--item__title">Lọc theo giá</p>

                        
                        <?php 
                        function request() {
                            global $wp;
                            $url = $wp->request;
                            $requesturl = explode("/",  $url);
                            return $requesturl[0];
                        } ?>
                        <!-- fitter price -->
                        <?php get_template_part('templates/template-place/fitter', 'priceplace'); ?>
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
                if ( $cat->slug == 'place' ) {
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
                        <a href="<?php echo home_url() ?>/<?php echo $sub_category->slug ?>" id="hotel__right--fitter__title"  class="hotel__right--fitter__title"><?php echo $sub_category->name ?></a>
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