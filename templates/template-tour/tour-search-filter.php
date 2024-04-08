<div class="search__filter">
    <div class="search__filter--wrap ">
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
                                        $taxonomy = 'product_cat';
                                        $orderby = 'name';
                                        $show_count = 0;      // 1 for yes, 0 for no
                                        $pad_counts = 0;      // 1 for yes, 0 for no
                                        $hierarchical = 1;      // 1 for yes, 0 for no
                                        $title = '';
                                        $empty = 0;

                                        //  echo request();
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

                                            if ($cat->name == 'tour') {

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
                                                    'hide_empty' => $empty
                                                );

                                                $sub_cats = get_categories($args2);
                                                if ($sub_cats) {
                                                    echo ' <div class="primary__dropdown--content" id="primaryDropdownHidden">
                                                            <ul class="primary__dropdown--content__list"
                                                                aria-labelledby="dropdownMenuButton1">';
                                                    foreach ($sub_cats as $sub_category) {
                                                        echo '<li><a class="primary__dropdown--content__list--item" href="' . home_url() . '/' . $sub_category->slug . '">' . $sub_category->name . '</a></li>';
                                                    }
                                                    echo '</ul>
                                                            </div>';

                                                }

                                            }

                                        }

                                        ?>

                                    </div>
                                    <?php
                                    $taxonomy = 'product_cat';
                                    $orderby = 'name';
                                    $show_count = 0;      // 1 for yes, 0 for no
                                    $pad_counts = 0;      // 1 for yes, 0 for no
                                    $hierarchical = 1;      // 1 for yes, 0 for no
                                    $title = '';
                                    $empty = 0;

                                    //  echo request();
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

                                        if ($cat->name == 'tour') {

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
                                                echo ' <div class="fliter__category--content__box">';
                                                foreach ($sub_cats as $sub_category) {
                                                    echo '<div class="fliter__category--content__box--item">
                                                                <a href="' . home_url() . '/' . $sub_category->slug . '">' . $sub_category->name . '</a>
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
            if ($cat->name == 'tour') {
                $category_id = $cat->term_id;
                ?>
                <img src="<?php echo get_the_post_thumbnail_url($cat->term_id, 'thumnail'); ?>">;
                <?php
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
                    echo '<div class="tourMobile__category--list">';
                    foreach ($sub_cats as $sub_category) { ?>
                        <a href="<?php echo $sub_category->slug ?>" class="tourMobile__categoryTop--list__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour_category_day_trips.png"
                                alt="tour_category_zipline">
                            <span>
                                <?php echo $sub_category->name ?>
                            </span>
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tour.js"></script>