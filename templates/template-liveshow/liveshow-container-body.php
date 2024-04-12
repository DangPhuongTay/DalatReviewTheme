<div class="liveshow__container--body">
    <div class="liveshow__container--body__wrap">
        <div class="liveshow__container--body__menu">
        <div class="liveshow__container--body__menu--wrap">
                <div class="liveshow__container--body__menu--title">Loc</div>


                <form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <button class="hotel__left--star" value="ASC"  name="price"  onChange="this.form.submit();">Thấp tới cao</button>       
                                <button class="hotel__left--star" value="DESC"  name="price"  onChange="this.form.submit();">Cao đến thấp</button>
                              
                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <button class="hotel__left--star" value="5000000"  name="pricehight"  onChange="this.form.submit();">Trên 5.000.000</button>
                        
                                
                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input class="range__input" value="200000" min="200000" name="minprice" max="5000000" step="100000" type="range" >
                                <input class="range__input"  value="5000000" min="200000" name="maxprice" max="5000000" step="100000" type="range">
                            </section>
                            <input class="range__submit" type="submit" onChange="this.form.submit();">
                            </div>

                        </form>

            </div>
        </div>
        <div class="liveshow__container--body__menu">
        <div class="liveshow__container--body__menu--wrap">
                <div class="liveshow__container--body__menu--title">Loc</div>


                <?php
                $taxonomy = 'product_cat';
                $orderby = 'name';
                $show_count = 0;      // 1 for yes, 0 for no
                $pad_counts = 0;      // 1 for yes, 0 for no
                $hierarchical = 1;      // 1 for yes, 0 for no
                $title = '';
                $empty = 0;
                $args = array(
                    'taxonomy' => $taxonomy,
                    'orderby' => $orderby,
                    'show_count' => $show_count,
                    'pad_counts' => $pad_counts,
                    'parent' => 31,
                    'hierarchical' => $hierarchical,
                    'title_li' => $title,
                    'hide_empty' => $empty
                );
                $all_categories = get_categories($args);

                foreach ($all_categories as $cat) {
                    if ( $cat->term_id != 24) { ?>
           
                        
                        <?php
                        $category_id = $cat->term_id;
                        $args2 = array(
                            'taxonomy' => $taxonomy,
                            'child_of' => 0,
                            'parent' => $category_id,
                            'orderby' => $orderby,
                            'show_count' => $show_count,
                            'pad_counts' => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li' => $title,
                            'hide_empty' => $empty,
                        );
                        $sub_cats = get_categories($args2);
                        if ($sub_cats) {
                            ?>
                            <div class="liveshow__container--body__menu--item__dropdown">
                        <div class="liveshow__container--body__menu--item__content">
                            <?php
                            foreach ($sub_cats as $sub_category) { ?>

                            <div class="liveshow__container--body__menu--item">
                            <a href="<?php echo home_url(); ?>/<?php echo $sub_category->slug ?>" class="cart__container--top__left--all__left--check">
                                        <?php echo $sub_category->name ?>

                                    </a>
                            </div>
                        
                            <?php }
                            ?> </div></div><?php
                        }
                        
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <div class="liveshow__container--body__product">
        <div class="liveshow__container--body__product--filter">
            <div class="liveshow__container--body__product--filter__price--wrap">
            <?php
                $taxonomy = 'product_cat';
                $orderby = 'name';
                $show_count = 0;      // 1 for yes, 0 for no
                $pad_counts = 0;      // 1 for yes, 0 for no
                $hierarchical = 1;      // 1 for yes, 0 for no
                $title = '';
                $empty = 0;
                $args = array(
                    'taxonomy' => $taxonomy,
                    'orderby' => $orderby,
                    'show_count' => $show_count,
                    'pad_counts' => $pad_counts,
                    'parent' => 31,
                    'hierarchical' => $hierarchical,
                    'title_li' => $title,
                    'hide_empty' => $empty
                );
                $all_categories = get_categories($args);

                foreach ($all_categories as $cat) {
                    if ( $cat->term_id != 24) { ?>
                        <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub()"> 
                            <div class="cart__container--top__left--all__left--check"><a href="<?php echo home_url(); ?>/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a></div>
                        </div>
                        
                        <?php
                        $category_id = $cat->term_id;
                        $args2 = array(
                            'taxonomy' => $taxonomy,
                            'child_of' => 0,
                            'parent' => $category_id,
                            'orderby' => $orderby,
                            'show_count' => $show_count,
                            'pad_counts' => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li' => $title,
                            'hide_empty' => $empty,
                        );
                        $sub_cats = get_categories($args2);
                        if ($sub_cats) {
                            ?>
                            <div class="liveshow__container--body__menu--item__dropdown">
                        <div class="liveshow__container--body__menu--item__content">
                            <?php
                            foreach ($sub_cats as $sub_category) { ?>

                            <!-- <div class="liveshow__container--body__menu--item">
                            <a href="<?php echo $sub_category->slug ?>" class="cart__container--top__left--all__left--check">
                                        <?php echo $sub_category->name ?>

                                    </a>
                            </div> -->
                        
                            <?php }
                            ?> </div></div><?php
                        }
                        
                    }
                }

                ?>
                <?php             
                function request() {
                    global $wp;
                    $url = $wp->request;
                    $requesturl = explode("/",  $url);
                    return $requesturl[0];
                } ?>
                <div class="liveshow__container--body__product--filter__price--content">
          
                
                    
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

    </div>
    </div>