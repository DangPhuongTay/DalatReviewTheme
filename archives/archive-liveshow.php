<?php
    if(have_posts()){
        ?>
    <section class="liveshow">
        <div class="liveshow__banner">
        <div class="liveshow__banner--img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/liveshow_img.jpg" alt="" />
        </div>
        <div class="liveshow__banner--content">
            <div class="liveshow__banner--content__title">Vé liveshow</div>
            <div class="liveshow__banner--content__des">
            Trải nghiệm nhiều buổi biểu diễn âm nhạc vui nhộn cùng các ca sĩ nổi
            tiếng
            </div>
        </div>
        </div>
        <div class="liveshowMoblie__fitter--wrap">
        <div class="liveshowMobile__fitter">
            <div class="liveshowMobile__fitter--input">
            <input type="text" placeholder="Đang tìm...">
            </div>
            <div class="liveshowMobile__fitter--icon">
            <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        </div>
        <div class="liveshow__container">
        <div class="liveshow__container--link">
            <a class="liveshow__container--link__return1" href="http://localhost/wordpress">Trang chủ> </a>
            <a class="liveshow__container--link__return2" href="liveshow">Vé LiveShow>
            </a>
            <a class="liveshow__container--link__return3" href="">Lịch diễn liveshow Đà Lạt</a>
        </div>
        <!--  -->
        <!-- Category -->
        <!--  -->
        <div class="liveshow__container--body">
            <div class="liveshow__container--body__wrap">
            <div class="liveshow__container--body__menu">
                <div class="liveshow__container--body__menu--wrap liveshow__boder">
                <div class="liveshow__container--body__menu--title">Danh mục</div>
                <div class="liveshow__container--body__menu--item">
                    <label class="cart__container--top__left--all__left--check">SPRING music FESTIVAL IN DALAT
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                </div>
                </div>
                <div class="liveshow__container--body__menu--wrap">
                <div class="liveshow__container--body__menu--title">Điểm đến</div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub()">
                    <label class="cart__container--top__left--all__left--check">Lịch diễn liveshow Đà Lạt
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown">
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 1
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 2
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lịch LiveShow Tháng 3
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub1()">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown--1">
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 1
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 2
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Mây Lang Thang Show Tháng 3
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class="liveshow__container--body__menu--item" onclick="btnLiveshowSub2()">
                    <label class="cart__container--top__left--all__left--check">Lululola Show
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__menu--item__dropdown--2">
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 1
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 2
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="liveshow__container--body__menu--item__content">
                    <label class="cart__container--top__left--all__left--check">Lululola Show Tháng 3
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                </div>

            </div>
            </div>
            <div class="liveshow__container--body__product">
            <div class="liveshowMobile__title">Vé liveshow</div>
            <div class="liveshow__container--body__product--filter">
                <p class="liveshow__container--body__product--filter__find">
                Tìm thấy <b>50</b> kết quả
                </p>
                <div class="liveshow__container--body__product--filter__price--wrap">
                <div class="liveshow__container--body__product--filter__price">
                    <span class="liveshow__container--body__product--filter__price--title">Có thể đặt</span>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__product--filter__price">
                    <span class="liveshow__container--body__product--filter__price--title">Mức giá</span>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="liveshow__container--body__product--filter__price instant-filter">
                    <span class="liveshow__container--body__product--filter__price--title">Xác nhận tức thời
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    </span>
                    <label class="cart__container--top__left--all__left--check">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                </div>
                <div class="liveshow__container--body__product--filter__price--content">
                    <div class="liveshow__container--body__product--filter__price--text">Sắp xếp theo</div>
                    <div class="liveshow__container--body__product--filter__price instant-filter"
                    onclick="btnLiveshowPoptip()">
                    <span class="liveshow__container--body__product--filter__price--title">Đề xuất</span>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                    <div class="liveshow__container--body__product--filter__price--poptip">
                        <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đề xuất</span>
                        </div>
                        <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đặt nhiều nhất</span>
                        </div>
                        <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Đánh giá cao nhất</span>
                        </div>
                        <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Giá (thấp đến cao)</span>
                        </div>
                        <div class="liveshow__container--body__product--filter__price--poptip__option">
                        <span>Giá (cao đến thấp)</span>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
            </div>
            <!--  -->
            <!-- Produclist -->
            <!--  -->
            <div class="liveshow__container--body__product--list">
        
        <?php
        while(have_posts()){
            ?>
            <div class="firstProduct__content--list__item col-sm-3">
              <a href="detail-liveshow">
                <div class="firstProduct__content--list__item--wrap">
                  <div class="firstProduct__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/liveshow_ticker.jpg" alt="tourProduct">
                  </div>
                  <div class="firstProduct__info">
                    <div class="firstProduct__info--top">
                      <div class="firstProduct__info--top__title text__overflow--main">
                        <a href="#">
                            <?php the_title(); ?> </a>
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
                        <span class="firstProduct__info--top__score--review">(
                          <span class="firstProduct__info--top__score--review__number">120
                          </span>)</span>
                        <!-- sep -->
                        <div class="sep">
                          <ion-icon name="ellipse"></ion-icon>
                        </div>
                        <div class="firstProduct__info--top__score--booked">
                          <span firstProduct__info--top__score--booked__number>10+
                            Bình luận </span>
                        </div>
                      </div>
                      <!-- tag -->
                      <div class="tagging__wrap">
                        <div class="tagging__box">
                          <div class="tagging__tag">
                            <span class="tagging__tag--text">Bán chạy</span>
                          </div>
                        </div>
                        <div class="tagging__box">
                          <div class="tagging__tag">
                            <span class="tagging__tag--text">Xác nhận tức thời</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- bottom -->
                    <div class="firstProduct__info--bottom">
                      <div class="firstProduct__info--bottom__content">
                        <div class="firstProduct__info--bottom__content--box">
                          <div class="firstProduct__info--bottom__content--box__price">
                            <span>đ 1,890,000</span>
                          </div>
                          <div class="firstProduct__info--bottom__content--box__underline">
                            <span>đ 2,050,000</span>
                          </div>
                        </div>
                      </div>
                      <!-- button policy -->
                      <div class="firstProduct__info--bottom__tagging tagging__wrap">
                        <div class="tagging__box firstProduct__info--bottom__tagging--box">
                          <div class="tagging__tag">
                            <span class="tagging__tag--text firstProduct__info--bottom__tagging--box__text">Chính
                              sách đảm bảo về
                              giá</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
          the_post(  );
        }
        ?>
        </div>

            <div class="liveshow__container--body__product--list__page">
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                <ion-icon name="chevron-back"></ion-icon>
                </div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">1</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">2</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">3</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">4</div>
            </a>
            <a href="">
                <div class="liveshow__container--body__product--list__page--item">
                <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </div>
            </a>
            </div>

            </div>
            </section>

    <?php
    }
?>