<div class="motorbike__container--banner">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/motorbike-banner.jpg" alt="">
               <div class="motorbike__container--banner__btn">
                <div class="motorbike__container--banner__box">
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
            if ( $cat->name == 'vehicle' ) {
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
                        <div style="text-transform:uppercase;" class="motorbike__container--banner__box--item" >
                          <a href="<?php echo $sub_category->slug ?>" class="cart__container--top__left--all__left--check"><?php echo $sub_category->name ?>
                            
                          </a>
                        </div>
                <?php }
                   
                }
            }
            }
?>
       

                  
                </div>
               </div>
            </div>