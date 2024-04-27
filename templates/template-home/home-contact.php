<div class="home__contact--banner">
    <div class="home__contact--banner__container">
        <div class="home__contact--banner__container--header">
            <p>Liên hệ với chúng tôi</p>
        </div>
        <div class="home__contact--banner__container--list">
            <div class="home__contact--banner__container--content">
                <div class="home__contact--banner__container--content__info">
                    <p>Để lại thông tin liên hệ của bạn để được tư vấn thêm</p>
                    <span>Hệ thống tư vấn trực tuyến của Đà Lạt Review tất tần tật giúp bạn tìm ra các trải nghiệm
                        du lịch Đà Lạt phù hợp với bản thân.</span>
                </div>
                <!-- <form action="#">
                        <input type="text" placeholder="Nhập tên của bạn">
                        <input type="text" placeholder="Nhập sđt hoặc email">
                    </form> -->
                <form id="test-form" method="GET" action="<?php echo home_url(); ?>/">
                    <input type="text" name="name" placeholder="Họ và Tên" />
                    <input id="mobile" type="number" name="sdt" placeholder="Số Điện Thoại" />
                    <button class="checkmobile" type="submit" id="submit-form"><span>Gửi ngay</span> <ion-icon
                            name="paper-plane"></ion-icon></button>
                </form>
                <script src="https://code.jquery.com/jquery-2.2.4.js"
                    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('body').on('click', '.checkmobile', function () {
                            var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                            var mobile = $('#mobile').val();
                            if (mobile !== '') {
                                if (vnf_regex.test(mobile) == false) {
                                    alert('Số điện thoại của bạn không đúng định dạng!');
                                    return false;
                                } else {
                                    var submit = $("button[type='submit']");
                                    submit.click(function () {

                                        var data = $('form#test-form').serialize();
                                       
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
                                    return false;
                                }
                            } else {
                                alert('Bạn chưa điền số điện thoại!');
                                return false;
                            }
                        });
                    });

                </script>
                <!-- <button><span>Gửi ngay</span> <ion-icon name="paper-plane"></ion-icon></button> -->
            </div>
            <div class="home__contact--banner__container--list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner-img-1.png" alt="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner.png" alt="">
            </div>

        </div>
    </div>
</div>