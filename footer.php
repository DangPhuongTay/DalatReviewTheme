<footer class="footer__layout--desktop">
    <div class="layout__footer--devider "></div>
    <div class="layout__footer--wrapper row-max-width">
        <div class="layout__footerBanner--wrapper">
            <div class="footer__banner--left">
                <!-- cột 1 -->
                    <?php 
                        $args = array(
                            'post_type' => 'footer', 
                            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                   

                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="footer__banner">
                    <div class="footer__banner--title">
                        <?php
                             the_title();
                             ?>
                                <div class="footer__banner--content">
                        <ul class="footer__listUnit">
                            <li>
                             <?php
                             the_content();
                             ?>
                             </li>
                              </ul>
                            </div> 
                        </div>
                             </div>
                    <?php endwhile; wp_reset_postdata(); ?>
            </div>          
        </div>
    </div>
</footer>

<!-- <footer class="footer__layout--mobile">
    <div class="layout__footer--devider "></div>
    <div class="layout__footer--wrapper">
        <div class="footer__internal--wrap">
            
            <div class="footer__internal--content">
                <h3 class="footer__internal--header">
                    Về Đà Lạt Review
                </h3>
                <ul class="footer__internal--wrapper">
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">Về Chúng Tôi</a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">Đà Lạt Review Blog</a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">Cơ hội nghề nghiệp</a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Phiếu quà tặng Đà Lạt Review
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__internal--content">
                <h3 class="footer__internal--header">
                    ĐỐI TÁC
                </h3>
                <ul class="footer__internal--wrapper">
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chương trình cho người nổi tiếng
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__internal--content">
                <h3 class="footer__internal--header">
                    Điều khoản sử dụng
                </h3>
                <ul class="footer__internal--wrapper">
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">Điều khoản sử dụng</a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chính sách bảo mật của Đà Lạt Review
                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chính sách Cookie
                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chương trình thưởng phát hiện lỗi phần mềm
                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chính sách và quy định
                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="footer__unit--suggestion">
                            Chính sách Phúc lợi động vật
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__internal--content">
                <h3 class="footer__internal--header">
                    KÊNH THANH TOÁN
                </h3>
                <ul class="footer__internal--wrapper">
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                    <li class="footer__internal--unit">
                        <a href="" class="  ">

                        </a>
                    </li>
                </ul>
            </div>

        </div>
</footer> -->

</body>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>

</html>