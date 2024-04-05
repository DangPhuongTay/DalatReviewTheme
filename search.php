<?php get_header(); ?>
<div class="tour">
    <br/>
    <br/>
    <br/>
        <div class="firstProduct ">
      <?php
          $s=get_search_query();
          $args = array(
              's' =>$s,
              'post_type' => 'product',
              'posts_per_page' => 8,
              'paged' => $paged,
                      );
            // The Query
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) { 
            ?>
                  <div class="detail__tour--content__left--header">Kết quả tìm kiếm:  <?php echo get_query_var('s') ?></div>
                  <div class="firstProduct__content">
                  <div class="firstProduct__content--list">
                  <?php
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                          ?>
                    <div class="firstProduct__content--list__item">
                        <div class="firstProduct__content--list__item--wrap">
                            <a href="<?php the_permalink(); ?>" class="">
                                <div class="firstProduct__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                                </div>
                                <div class="firstProduct__info">
                                    <div class="firstProduct__info--top">
                                        <div class="firstProduct__info--top__title text__overflow--main">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="firstProduct__info--top__score">
                                            <div class="firstProduct__info--top__score--star">
                                                <div class="firstProduct__info--top__score--star__icon">
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                <div class="firstProduct__info--top__score--star__number">
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                            <span class="firstProduct__info--top__score--review">(120)</span>
                                            <!-- sep -->
                                            <div class="sep">
                                                <ion-icon name="ellipse"></ion-icon>
                                            </div>
                                            <!-- <div class="firstProduct__info--top__score--booked"> -->
                                                <span firstProduct__info--top__score--booked__number>1K+
                                                    Đã được đặt </span>
                                            <!-- </div> -->
                                        </div>
                                        <!-- tag -->
                                        <div class="tagging__wrap">
                                            <div class="tagging__box">
                                                <div class="tagging__tag">
                                                    <span class="tagging__tag--text">Hướng
                                                        dẫn tiếng Việt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bottom -->
                                    <div class="firstProduct__info--bottom">
                                        <div class="firstProduct__info--bottom__content">
                                            <div class="firstProduct__info--bottom__content--box">
                                                <div class="firstProduct__info--bottom__content--box__price">
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <!-- button policy -->
                                        <div class="firstProduct__info--bottom__tagging tagging__wrap">
                                            <div class="tagging__box firstProduct__info--bottom__tagging--box">
                                                <div class="tagging__tag">
                                                    <span
                                                        class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                                                        sách đảm bảo về
                                                        giá</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                          <?php
                  }
              }else{
          ?>
                  <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                  <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                  </div>
          <?php } ?>
          </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>