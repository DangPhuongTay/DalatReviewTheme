<div class="motorbike__container--banner">
    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
    <div class="motorbike__container--banner__btn">
        <div class="motorbike__container--banner__box">
            <div class="motorbike__container--banner__box">
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
                'hierarchical' => $hierarchical,
                'title_li' => $title,
                'hide_empty' => $empty
            );
            $all_categories = get_categories($args);

            foreach ($all_categories as $cat) {
                if ($cat->slug == 'vehicle') {
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

                        foreach ($sub_cats as $sub_category) { ?>
                            <div style="text-transform:uppercase;" class="motorbike__container--banner__box--item">
                                <a href="<?php echo home_url() ?>/<?php echo $sub_category->slug ?>"
                                    class="cart__container--top__left--all__left--check"><?php echo $sub_category->name ?>
                                </a>
                            </div>
                        <?php }
                    }
                }
            }
            ?>

            </div>

            <?php function request()
            {
                global $wp;
                $url = $wp->request;
                $requesturl = explode("/", $url);
                return $requesturl[0];
            } ?>
            <div class="motorbike__fitter--price">
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
                    <div class="total__filter--list shadow">
                        <form method="get" name="form" action="<?php echo home_url(); ?>/<?php echo request(); ?>">
                            <div>
                                <button class="hotel__left--star" value="ASC" name="price"
                                    onChange="this.form.submit();">Thấp tới cao</button>
                                <button class="hotel__left--star" value="DESC" name="price"
                                    onChange="this.form.submit();">Cao đến thấp</button>


                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url(); ?>/<?php echo request(); ?>">
                            <div>
                                <button class="hotel__left--star" value="1000000" name="pricehight"
                                    onChange="this.form.submit();">Trên 1.000.000</button>


                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url(); ?>/<?php echo request(); ?>">
                            <div>
                                <section class="range-slider">
                                    <span class="rangeValues"></span>
                                    <input class="range__input" value="50000" min="50000" name="minprice"
                                        max="1000000" step="50000" type="range">
                                    <input class="range__input" value="5000000" min="50000" name="maxprice"
                                        max="1000000" step="50000" type="range">
                                </section>
                                <input class="range__submit" type="submit" onChange="this.form.submit();" value="Tìm">
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>