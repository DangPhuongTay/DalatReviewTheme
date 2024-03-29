<?php
/**
 * Template Name: TemplateCheckOut
 * Display Only CheckOut template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
    <section class="checkouttour">
        <div class="checkouttour__header">
            <span><ion-icon name="checkmark-circle"></ion-icon></span>
            <span></span>
            <span><ion-icon name="ellipsis-horizontal-circle-sharp"></ion-icon></span>
            <span></span>
            <span><ion-icon name="ellipse-sharp"></ion-icon></span>
        </div>
        <div class="checkouttour__container">
            <div class="checkouttour__container--left">
                <div class="checkouttour__container--left__header">
                    <p>Điền thông tin</p>
                </div>
                <div class="checkouttour__container--left__info">
                    <p class="checkouttour__header--info">Thông tin đơn hàng</p>
                    <div class="checkouttour__container--left__info--box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="">
                        <div class="checkouttour__container--left__info--box__text">
                            <p>Thuê Xe Riêng Đi Nha Trang, Mũi Né, Phan Rang, TP Hồ Chí Minh từ Đà Lạt</p>
                            <span>Đà Lạt - Nha Trang hoặc ngược lại ( Một Chiều)</span>
                        </div>
                    </div>
                    <div class="checkouttour__container--left__info--add">
                        <p>Thông tin người tham gia</p>
                        <button id="open__checkouttour--btn1">+ Thêm</button>
                    </div>
                    <div class="checkouttour__container--left__info--box contact__checkout">
                        <div class="checkouttour__container--left__info--box__contact">
                            <p><span>Số điện thoại</span><input type="text" placeholder="Vui lòng nhập"></p>
                            <p><span>Email</span><input type="text" placeholder="Vui lòng nhập"></p>
                        </div>
                        <a href="#">Chỉnh sửa</a>
                    </div>
                    <div class="checkouttour__container--left__info--note">
                        <div class="checkouttour__container--left__info--note__title">
                            <p>Thông tin khác</p>
                            <span>Yêu cầu đặc biệt</span>
                        </div>
                        <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                    </div>
                    <div class="checkouttour__container--left__info--form">
                        <div class="checkouttour__container--left__info--form__left">
                            <div class="checkouttour__container--left__info--form__item">
                                <p>Lịch trình *</p>
                                <select Chọn lịch trình mong muốn>
                                    <option value="">Chọn lịch trình mong muốn</option>
                                    <option value=""></option>
                                  </select>
                            </div>
                            <div class="checkouttour__container--left__info--form__item">
                                <p>Địa điểm đón *</p>
                                <input type="text" placeholder="Nhập địa chỉ đón">
                            </div>
                            <div class="checkouttour__container--left__info--form__item">
                                <p>Thông tin liên hệ (WeChat, Whatsapp, LINE, Telegram, KakaoTalk, Viber) và số điện thoại liên lạc</p>
                                <input type="text" placeholder="Vui lòng nhập">
                            </div>
                        </div>
                        <div class="checkouttour__container--left__info--form__right">
                            <div class="checkouttour__container--left__info--form__item">
                                <p>Giờ đón * </p>
                                <input type="text" placeholder="Chúng tôi sẽ xác nhận qua email">
                            </div>
                            <div class="checkouttour__container--left__info--form__item">
                                <p>Địa điểm trả khách *</p>
                                <input type="text" placeholder="Vui lòng nhập">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkouttour__container--left__contact">
                    <p class="checkouttour__header--info">Thông tin liên lạc</p>
                    <span>Chúng tôi sẽ thông báo mọi thay đổi về đơn hàng cho bạn</span>
                    <div class="checkouttour__container--left__contact--form">
                        <div class="checkouttour__container--left__contact--item">
                            <p>Họ và tên lót</p>
                            <input type="text" placeholder="Nhập họ và tên lót">
                        </div>
                        <div class="checkouttour__container--left__contact--item">
                            <p>Tên</p>
                            <input type="text" placeholder="Nhập Tên">
                        </div>
                        <div class="checkouttour__container--left__contact--item">
                            <p>Quốc gia/Khu vực</p>
                            <input type="text" placeholder="Nhập quốc gia/Khu vực">
                        </div>
                        <div class="checkouttour__container--left__contact--item">
                            <p>Số điện thoại</p>
                            <input type="text" placeholder="Nhập Số điện thoại">
                        </div>
                        <div class="checkouttour__container--left__contact--item">
                            <p>Email (để cập nhật thông tin đơn hàng của bạn)</p>
                            <input type="text" placeholder="Nhập email">
                        </div>
                    </div>
                </div>
                <div class="checkouttour__container--left__voucher">
                    <p class="checkouttour__header--info">Loại ưu đãi</p>
                    <div class="checkouttour__container--left__voucher--box">
                        <div class="checkouttour__container--left__voucher--box--item">
                            <span>Mã ưu đãi nền tảng</span><span>Không khả dụng</span>
                        </div>
                        <div class="checkouttour__container--left__voucher--box--item">
                            <span>Mã ưu đãi phương thức thanh toán</span><span>Không khả dụng</span>
                        </div>
                        <div class="checkouttour__container--left__voucher--box--item">
                            <span>Hiện không có mã ưu đãi nào khả dụng cho đơn hàng này</span><span></span>
                        </div>
                
                        <div class="checkouttour__container--left__voucher--box--item">
                            <p>Tôi đã hiểu và đồng ý với Điều khoản Sử dụng Chung và Chính sách quyền riêng tư của Klook </p>
                        </div>
                    </div>
                </div>
                <div class="checkouttour__container--left__last">
                    <p>Đơn hàng của bạn sẽ được gửi đi sau khi bạn đến bước tiếp theo (Bạn có thể chọn phương thức thanh toán ở trang kế tiếp)</p>
                    <div class="checkouttour__container--left__last--btn firstBtn">
                        <a href="checkout-tour-final.html">
                            Thanh toán
                        </a>
                    </div>
                </div>
            </div>
            <div class="checkouttour__container--right">
                <div class="checkouttour__container--right__top">
                    <p>Thuê Xe Riêng Đi Nha Trang, Mũi Né, Phan Rang, TP Hồ Chí Minh từ Đà Lạt</p>
                    <p>Thuê Xe Riêng Đi Nha Trang, Mũi Né, Phan Rang, TP Hồ Chí Minh từ Đà Lạt</p>
                    <p><span>Ngày</span><span>20/1/2024</span></p>
                    <p><span>Đơn vị</span><span>Người lớn x 1</span></p>
                    <p><span>Tổng cộng</span><span><span>đ</span> 1,750,000</span></p>
                </div>
                <div class="checkouttour__container--right__bottom">
                    <p><span>Tổng cộng</span><span><span>đ </span>1,750,000</span></p>
                    <p><span>Số tiền thanh toán</span><span><span>đ </span>1,750,000</span></p>
                </div>
            </div>
        </div>
        
    </section>
    <!-- phần footer -->
    <div class="checkouttour__container--add shadow">
        <div class="checkouttour__container--add--header">
            <span>Thêm thông tin liên lạc</span>
            <ion-icon id="close__checkouttour--btn1" name="close-outline"></ion-icon>
        </div>
        <div class="checkouttour__container--add__form">
            <div class="checkouttour__container--add__form-left">
                <div class="checkouttour__container--add__form--item">
                    <span>Họ và Tên lót</span>
                    <input type="text" placeholder="Nhập họ và tên lót">
                </div>
                <div class="checkouttour__container--add__form--item">
                    <span>Tên</span>
                    <input type="text" placeholder="Nhập tên của bạn">
                </div>
            </div>
            <div class="checkouttour__container--add__form-right">
                <div class="checkouttour__container--add__form--item">
                    <span>Email</span>
                    <input type="text" placeholder="Nhập email của bạn">
                </div>
                <div class="checkouttour__container--add__form--item">
                    <span>Số điện thoại</span>
                    <input type="text" placeholder="Nhập số điện thoại">
                </div>
            </div>
        </div>
        <div class="checkouttour__container--add__last">
            <button id="close__checkouttour--btn2" class="secondBtn">Hủy bỏ</button><button id="close__checkouttour--btn3" class="firstBtn">Lưu</button>
        </div>
    </div>
  
<?php get_footer();?>