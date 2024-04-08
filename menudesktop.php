<div class="header__bottom">
            <div class="header__bottom--listlink">
                <ul class="header__bottom--listlink__all">
                    <li>
                        <a href="#" class="header__bottom--listlink__fi">
                            <ion-icon name="location-outline"></ion-icon>
                            Bạn muốn đi đâu?
                        </a>
                    </li>
                    <li class="header__bottom--listlink__allcategory">
                        <a href="#">
                            Tất cả
                        </a>
                        <div class="header__bottom--listlink__allcategory--list shadow">

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
                            ?>

                            <?php
                            foreach ($all_categories as $cat) {
                                if ($cat->category_parent == 0) {
                                    $category_id = $cat->term_id;
                                    ?>
                                    <ul class="header__bottom--listlink__allcategory--list__item">
                                        <div class="header__bottom--listlink__allcategory--list__item--title">
                                            <a href=" <?php echo home_url() ?>/<?php echo $cat->name ?>">
                                                <?php echo $cat->name ?>
                                            </a>
                                        </div>
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
                                            'hide_empty' => $empty
                                        );
                                        $sub_cats = get_categories($args2);
                                        if ($sub_cats) {
                                            ?>
                                            <div class="header__bottom--listlink__allcategory--list__item--content ">
                                                <?php
                                                foreach ($sub_cats as $sub_category) {
                                                    ?>

                                                    <p> <a href=" <?php echo home_url() ?>/<?php echo $sub_category->name ?>">
                                                            <?php echo $sub_category->name ?><ion-icon
                                                                name="chevron-forward"></ion-icon>
                                                        </a> </p>
                                                    <?php
                                                }
                                                ?>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </ul>

                                    <?php
                                }

                            }
                            ?>
                        </div>
                    </li>
                    <li class="header__bottom--listlink__category1 ">
                        <a href="<?php echo home_url() ?>/tour">
                            Tour & Trải nghiệm
                        </a>
                        <div class="header__bottom--listlink__category1--list shadow">
                            <ul class="header__bottom--listlink__category1--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--content">
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
                                                    <p>
                                                        <a href="<?php echo $sub_category->slug ?>">
                                                            <?php echo $sub_category->name ?>
                                                        </a>
                                                    </p>
                                                <?php }
                                                echo '</div>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="header__bottom--listlink__category2">
                        <a href="<?php echo home_url() ?>/liveshow">
                            Vé tham quan
                        </a>
                        <div class="header__bottom--listlink__category2--list shadow">
                            <ul class="header__bottom--listlink__category2--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--content">
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
                                        if ($cat->name == 'liveshow') {
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
                                                echo '<div class="tourMobile__category--list">';
                                                foreach ($sub_cats as $sub_category) { ?>
                                                    <p>
                                                        <a href="<?php echo $sub_category->slug ?>">
                                                            <?php echo $sub_category->name ?>
                                                        </a>
                                                    </p>
                                                <?php }
                                                echo '</div>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="header__bottom--listlink__category3">
                        <a href="<?php echo home_url() ?>/place">
                            Khách sạn
                        </a>
                        <div class="header__bottom--listlink__category3--list shadow">
                            <ul class="header__bottom--listlink__category3--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--content">
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
                                        if ($cat->name == 'Place') {
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
                                                echo '<div class="tourMobile__category--list">';
                                                foreach ($sub_cats as $sub_category) { ?>
                                                    <p>
                                                        <a href="<?php echo $sub_category->slug ?>">
                                                            <?php echo $sub_category->name ?>
                                                        </a>
                                                    </p>
                                                <?php }
                                                echo '</div>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="header__bottom--listlink__category5">
                        <a href="<?php echo home_url() ?>/vehicle">
                            Thuê xe
                        </a>
                        <div class="header__bottom--listlink__category5--list shadow">
                            <ul class="header__bottom--listlink__category5--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--content">
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
                                        if ($cat->name == 'vehicle') {
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
                                                echo '<div class="tourMobile__category--list">';
                                                foreach ($sub_cats as $sub_category) { ?>
                                                    <p>
                                                        <a href="<?php echo $sub_category->slug ?>">
                                                            <?php echo $sub_category->name ?>
                                                        </a>
                                                    </p>
                                                <?php }
                                                echo '</div>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="header__bottom--listlink__category4">
                        <a href="<?php echo home_url() ?>/blog">
                            Tin tức
                        </a>
                    </li>
                    <!-- <li class="header__bottom--listlink__category6">
                        <a href="#" class="header__bottom--listlink__la">
                            <ion-icon name="ellipse"></ion-icon>
                            <ion-icon name="ellipse"></ion-icon>
                            <ion-icon name="ellipse"></ion-icon>
                        </a>
                        <div class="header__bottom--listlink__category6--list shadow">
                            <ul class="header__bottom--listlink__category6--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--title">
                                    Thêm nhiều khám phá
                                </div>
                                <div class="header__bottom--listlink__allcategory--list__item--content">
                                    <p><a href="category/blog/">Wifi & thẻ SIM</a></p>
                                    <p><a href="category/blog/">Ẩm thực</a></p>
                                    <p><a href="category/blog/">Du lịch</a></p>
                                </div>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>

            <div class="header__bottom--voucher">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-icon-voucher.png" alt="">
                <a href="header__bottom--voucher__link">
                    Phiếu quà tặng Đà Lạt Review
                </a>
            </div>
        </div>