<?php
    /**
     * Template Name: TemplateCheckOutFinal
     * Display Only CheckOut Final template
     * 
     * @package WordPress
     * @subpackage eminent
     * @since eminent 1.0
     * 
     */
    get_header();?>
        <section class="checkouttour final">
        <div class="checkouttour__header">
            <span><ion-icon name="checkmark-circle"></ion-icon></span>
            <span></span>
            <span><ion-icon name="checkmark-circle"></ion-icon></span>
            <span></span>
            <span><ion-icon name="ellipsis-horizontal-circle-sharp"></ion-icon></span>
        </div>
        <div class="checkouttour__container">
            <div class="checkouttour__container--left">
                <div class="checkouttour__container--left__header">
                    <p>Xác nhận thanh toán</p>
                </div>
                <div class="checkouttour__container--final">
                    <ul>
                        <li>
                            <label class="cart__container--top__left--all__left--check">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <div class="checkouttour__container--final__context">
                                <div class="checkouttour__container--final__context--text">
                                    <p>Thẻ Credit/Debit</p>
                                    <div class="checkouttour__container--final__creadit">
                                        <label for="">
                                            Số thẻ
                                            <input type="text">
                                        </label>
                                        <label for="">
                                            Ngày hết hạn
                                            <input type="text" placeholder="MM/YYYY">
                                        </label>
                                        <label for="">
                                            Mã bảo mật
                                            <input type="text">
                                        </label>
                                    </div> 
                                </div>
                            </div>
                        </li>
                        <li>
                            <label class="cart__container--top__left--all__left--check">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <div class="checkouttour__container--final__context">
                              <div class="checkouttour__container--final__context--text">
                                <p>MoMo E-Wallet</p>
                                <span>Thanh toán qua MoMo, nhập KLMOMO24 để được giảm 10K cho đơn từ 1 triệu</span>
                              </div>
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/checkour-tour-final-momo-logo.png" alt="">
                            </div>
                        </li>
                        <li>
                            <label class="cart__container--top__left--all__left--check">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <div class="checkouttour__container--final__context">
                                <div class="checkouttour__container--final__context--text">
                                    <p>ATM by MoMo</p>
                                    <span>Hoàn tiền không áp dụng cho lựa chọn thanh toán của bạn</span>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/checkour-tour-final-atm-logo.png" alt="">
                            </div>
                        </li>
                        <li>
                            <label class="cart__container--top__left--all__left--check">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <div class="checkouttour__container--final__context">
                                <div class="checkouttour__container--final__context--text">
                                    PayPal
                                    <span>There might be extra fees when using PayPal. Contact your bank for more details.</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="checkouttour__container--left__last">
                    <p>Đơn hàng của bạn sẽ được gửi đi sau khi bạn đến bước tiếp theo (Bạn có thể chọn phương thức thanh toán ở trang kế tiếp)</p>
                    <a href="http://localhost/wordpress/checkout/checkout-success/">
                        <div class="checkouttour__container--left__last--btn firstBtn">
                                Thanh toán
                        </div>
                    </a>
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