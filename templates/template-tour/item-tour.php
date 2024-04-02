<?php global $product; ?>
<div class="firstProduct__content--list__item">
    <div class="firstProduct__content--list__item--wrap">
        <a href="<?php the_permalink() ?>" class="">
            <div class="firstProduct__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct8.webp"
                    alt="tourProduct">
            </div>
            <div class="firstProduct__info">
                <div class="firstProduct__info--top">
                    <div class="firstProduct__info--top__title text__overflow--main">
                        <p>
                            <?php

                            the_title();

                            ?>
                        </p>
                    </div>
                    <div class="firstProduct__info--top__score" style="gap:7px;font-size: 11px;">
                        <?php 
                                foreach ($product->attributes as $taxonomy => $attribute) {
                                    foreach ($attribute->get_terms() as $term) {
                                        ?>
                                         <span style="background: #eee;border-radius: 10px;padding: 6px 10px;">
                                        <?php
                                        echo  $term->name; 

                                        ?>
                                         </span>
                                        <?php
                                    }
                                 }
                                ?>
                       
                    </div>
                    <!-- tag -->
                    <div class="tagging__wrap">
                        <div class="tagging__box">
                            <div class="tagging__tag">
                                <span class="tagging__tag--text">
                                    <?php the_author_posts_link(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom -->
                <div class="firstProduct__info--bottom">
                    <div class="firstProduct__info--bottom__content">
                        <div class="firstProduct__info--bottom__content--box">
                            <div class="firstProduct__info--bottom__content--box__price">
                                <span>
                                    <?php 
                                   
                                ?>
                                </span>
                            </div>
                            <div class="firstProduct__info--bottom__content--box__underline">
                                <span>đ 540,000</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>