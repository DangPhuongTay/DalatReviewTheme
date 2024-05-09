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
                        if ($cat->category_parent == 0 && $cat->term_id != 24) {
                            $category_id = $cat->term_id;
                            ?>
                            <ul class="header__bottom--listlink__allcategory--list__item">
                                <div class="header__bottom--listlink__allcategory--list__item--title">
                                    <a href=" <?php echo home_url() ?>/<?php echo $cat->slug ?>">
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

                                            <p> <a href=" <?php echo home_url() ?>/<?php echo $sub_category->slug ?>">
                                                    <?php echo $sub_category->name ?><ion-icon name="chevron-forward"></ion-icon>
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
                    if ($cat->category_parent == 0 && $cat->term_id != 24) {
                        $category_id = $cat->term_id;
                        ?>
                        <li class="header__bottom--listlink__category1 ">
                        <?php
                        ?>
                        <a href=" <?php echo home_url() ?>/<?php echo $cat->slug ?>/">
                            <?php echo $cat->name ?>
                        </a>


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
                            <div class="header__bottom--listlink__category1--list shadow">
                                <ul class="header__bottom--listlink__category1--list__item">
                                    <div class="header__bottom--listlink__allcategory--list__item--content">
                                        <?php
                                        foreach ($sub_cats as $sub_category) {
                                            ?>
                                            <p>
                                                <a href="<?php echo home_url() ?>/<?php echo $sub_category->slug ?>/">
                                                    <?php echo $sub_category->name ?>
                                                </a>
                                            </p>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </li>

                    <?php
                    }

                }
                ?>

        </ul>
    </div>

    <div class="header__bottom--voucher">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-icon-voucher.png" alt="">
        <a href="header__bottom--voucher__link">
            Phiếu quà tặng Đà Lạt Review
        </a>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
