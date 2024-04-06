<div class="home__banner--mobile__top">
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
                        'hide_empty'   => $empty,
                        'posts_per_page' => 5
                    );
                    $all_categories = get_categories($args);
                    foreach ($all_categories as $cat) {
                        if ($cat->category_parent == 0 && $cat->term_id != 24) {
                            $category_id = $cat->term_id;
                            $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);

                            // get the image URL
                            $image = wp_get_attachment_url($thumbnail_id);
                    ?>

                            <a  href="tour"><img src=" <?php echo $image; ?>" alt="img">
                                <span><?php echo $cat->name ?></span>
                            </a>
                            <?php
                        }
                    
                    }
                    ?>
                </div>



