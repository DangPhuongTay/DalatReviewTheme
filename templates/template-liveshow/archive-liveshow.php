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
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 10,
                        'product_cat'    => 'liveshow'
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php 

                    get_template_part('templates/template-liveshow/item', 'liveshow');  
                    ?>
                <?php endwhile; wp_reset_postdata(); ?>
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
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/liveshow.js"></script>
    <?php
    }
    get_footer();?>