<div class="home__contact--banner">
    <div class="home__contact--banner__container">
        <div class="home__contact--banner__container--header">
            <p>Liên hệ với chúng tôi</p>
        </div>
        <?php

    $args = array(
        'post_type' => 'bannercontact', 
        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
    );
?>

<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<div class="home__slider--item__image">
    <img class="home__slider--item__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
   <div class="home__contact--banner__container--list">
            <div class="home__contact--banner__container--content">
                <div class="home__contact--banner__container--content__info">
                    <p><?php the_title(); ?></p>
                    <span><?php  the_content(); ?></span>
                </div>
                <!-- <form action="#">
                        <input type="text" placeholder="Nhập tên của bạn">
                        <input type="text" placeholder="Nhập sđt hoặc email">
                    </form> -->
                <form id="test-form" method="GET" action="<?php echo home_url(); ?>/">
                    <input type="text" name="name" placeholder="Họ và Tên" />
                    <input id="mobile" type="number" name="sdt" placeholder="Số Điện Thoại" />
                    <button style="display: flex; gap: 10px;" class="checkmobile" type="submit" id="submit-form">
                        <style>
                            .loadding{
                                display: none;
                            }
                        </style>
                     <span class="spinner-border spinner-border-sm loadding" role="status" aria-hidden="true"></span>
                        <span class="btn__contact--text" >Gửi ngay</span>
                        <ion-icon name="paper-plane"></ion-icon>
                    </button>
                </form>
                <script src="https://code.jquery.com/jquery-2.2.4.js"
                    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('body').on('click', '.checkmobile', function () {
                            var data = $('form#test-form').serialize();
                            var load =  document.querySelector(".spinner-border-sm");
                            var icon =  document.querySelector(".checkmobile ion-icon");
                            var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                            var mobile = $('#mobile').val();
                            if (mobile !== '') {
                                if (vnf_regex.test(mobile) == false) {
                                    alert('Số điện thoại của bạn không đúng định dạng!');
                                    return false;
                                } else {
                                    load.style.display = 'block';
                                    document.querySelector(".btn__contact--text").innerHTML = "Đang Gửi...";
                                    var submit = $("button[type='submit']");
                                    submit.click(function () {
                                        $.ajax({
                                            type: 'GET',
                                            url: 'https://script.google.com/macros/s/AKfycbx7XgM7pRC7lGsUSTXsJ6DTHmdvVpe8C_pfcio83D8N-mUmRx-uz0io99szR-44CCwe/exec',
                                            dataType: 'json',
                                            crossDomain: true,
                                            data: data,
                                            success: function (data) {
                                               
                                            }
                                        });
                                        
                                    });
                                    setTimeout(loadding, 1500);
                                    function loadding() {
                                        load.style.display = 'none';
                                        document.querySelector(".btn__contact--text").innerHTML = "Gửi Thành Công";
                                        icon.style.display ='none';
                                    }
                                    return false;
                                    
                                }
                            } else {
                                alert('Bạn chưa điền số điện thoại!');
                                return false;
                            }
                            
                        }
                        
                    
                    );

                    });

                </script>
               
            </div>
        </div>
    </div>
</div>
<?php endwhile; wp_reset_postdata(); ?>