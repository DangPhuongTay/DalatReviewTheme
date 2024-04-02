<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $product; ?>
        <div class="detail__car">
            <div class="detail__car--container">
                <div class="detail__car--container__option">
                    <div class="detail__car--container__header">
                        <?php the_title();?>
                    </div>
                    <div class="detail__car--container__top">
                        <div class="detail__car--container__top--contact">
                            <span>Điện Thoại liên hệ:</span>
                            <span>02633. 986 987 – 02633. 986 988</span>
                        </div>
                        <div class="detail__car--container__top--address">
                                <span>Địa chỉ :</span>
                                <span>Số 11, Lý Tự Trọng, Phường 2 Thành phố Đà Lạt Lâm Đồng</span>
                        </div>
                        <div class="detail__car--container__top--des">
                            <p><?php echo $product->get_short_description (); ?> </p>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail_car_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="detail__car--container__header">
                        Danh sách dịch vụ
                    </div>
                </div>
    
            </div>
            <div class="detail__car--info">
                <div class="detail__car--info__body">
                    <div class="detail__car--info__title">
                        Air Blade  <?php echo $product->get_price_html(); ?>
                    </div>
                    <div class="detail__car--info__body--img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/car-air-blade-125.jpg" class="shadow" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/car-air-blade-125.jpg"  class="shadow" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/car-air-blade-125.jpg" class="shadow" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/car-air-blade-125.jpg" class="shadow" alt="">
                    </div>
                  <div class="detail__car--info__body--form">
                    <div class="detail__car--info__body--form__item">
                        <label for="">Chọn nơi nhận xe</label>
                        <input type="submit" value="Chọn địa điểm" class="detail__car--info__map">
                    </div>
                    <div class="detail__car--info__body--form__item">
                        <label for="">Chọn ngày thuê</label>
                       <input type="date" value="2017-06-01" >
                    </div>
                  <div class="detail__car--info__body--form__item">
                        <label for="">Chọn ngày trả</label>
                        <input type="date" value="2017-06-01" >
                  </div>
                  </div>
                  <div class="detail__car--info__body--desc">
                    <div class="detail__car--info__body--desc__text">
                        <p>Thông tin xe</p>
                        <p>
                            <span>&#x2022; Bộ tem ở phần ốp hông Air Blade 2021 cũng có đôi chút khác biệt có thêm dòng chữ Special Edition. Ở phiên bản cũ, dòng chữ Special Edition được đặt ở vị trí khu vực tiếp nhiên liệu.</span>
                        </p>
                    </div>
                    <div class="detail__car--info__body--desc__text">
                        <p>Điều khoản thuê xe</p>
                        <p>
                        <span>&#x2022; Mục đích thuê xe: đa dạng và phong phú tùy vào nhu cầu của các bên. Trong đó, có một số mục đích cơ bản như: thuê xe tự lái, thuê xe để kinh doanh, thuê xe du lịch, thuê xe phục vụ mục đích đi lại….</span>
                           <span>&#x2022; Giá cả: Giá cả bao gồm cả số và chữ, có thể bao gồm cả tiền xăng xe di chuyển, cầu đường, tiền thuê lái xe …. tùy vào thỏa thuận của các bên và tùy vào loại hợp đồng thuê.</span>
                           <span>&#x2022; Phương thức thanh toán: Có thể bằng tiền mặt hoặc chuyển khoản, có thể thanh toán ngay sau khi ký hợp đồng hoặc trả theo từng đợt…. tùy vào thỏa thuận của các bên. Tuy nhiên, trong Hợp đồng nên nêu rõ, cụ thể và chi tiết vấn đề này.</span> 
                        </p>
                    </div>
                  </div>
                </div>
                <div class="detail__car--info__btn">
                    <?php wc_get_template('loop/add-to-cart.php'); ?> 
                </div>
            </div>
            <div class="detail__car--map">
                <div class="detail__car--map__header">
                    <ion-icon class="detail__car--map__header--icon" name="close-outline" onclick="closeMapCarFormBtn()">
                    </ion-icon> <span>CHỌN ĐỊA ĐIỂM TRÊN BẢN ĐỒ</span>
                </div>
                <div class="detail__car--map__body">
                    <iframe class="detail__car--map__body--iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1160.4162387727945!2d108.4411451931558!3d11.963462031245864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112c5ba5970a1%3A0x900519971f498118!2zMTA4IEzDvSBOYW0gxJDhur8sIFBoxrDhu51uZyA4LCBUaMOgbmggcGjhu5EgxJDDoCBM4bqhdCwgTMOibSDEkOG7k25nIDY2MTA2!5e0!3m2!1svi!2s!4v1706237902739!5m2!1svi!2s"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="detail__car--map__body--input">
                        <input type="text" placeholder="Nhập địa chỉ nhận xe">
                        <input type="submit" value="XÁC NHẬN" onclick="closeMapCarFormBtn()">
                    </div>
                </div>
            </div>
        </div>
            
        <?php

    }
}
get_footer();?>