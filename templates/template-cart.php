<?php
/**
 * Template Name: TemplateCart
 * Display Only cart template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
  <!-- <section class="cart">
        <div class="cart__container">
            <div class="cart__container--top">
                <div class="cart__container--top__left">
                    <div class="cart__container--top__left--all">
                        <div class="cart__container--top__left--all__left">
                            <label class="cart__container--top__left--all__left--check">Tất cả
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                        </div>
                        <div class="cart__container--top__left--all__right">
                            <button>Xóa tất cả dịch vụ</button>
                        </div>
                    </div>
                    <div class="cart__container--top__left--list">
                        <div class="cart__container--top__left--list__item">
                            <div class="cart__container--top__left--list__item--top">
                                <div class="cart__container--top__left--list__item--top__info">
                                    <label class="cart__container--top__left--all__left--check">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                      </label>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="img">
                                    <div class="cart__container--top__left--list__item--top__info--text">
                                        <p>Vé Sun World Ha Long Quảng Ninh</p>
                                        <span>[Vé QR Code - Vào Cửa Trực Tiếp] Vé Cáp Treo Nữ Hoàng</span>
                                    </div>
                                </div>
                                <div class="cart__container--top__left--list__item--top__quality">
                                    <span>Người lớn</span>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                      </div>
                                    
                                </div>
                            </div>
                            <div class="cart__container--top__left--list__item--bottom">
                                <div class="cart__container--top__left--list__item--bottom__option">
                                    <button>Sửa</button>
                                    <button>Xóa</button>
                                </div>
                                <div class="cart__container--top__left--list__item--bottom__price">
                                    <span>đ </span><span>350,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="cart__container--top__left--list__item">
                            <div class="cart__container--top__left--list__item--top">
                                <div class="cart__container--top__left--list__item--top__info">
                                    <label class="cart__container--top__left--all__left--check">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                      </label>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="img">
                                    <div class="cart__container--top__left--list__item--top__info--text">
                                        <p>Vé Sun World Ha Long Quảng Ninh</p>
                                        <span>[Vé QR Code - Vào Cửa Trực Tiếp] Vé Cáp Treo Nữ Hoàng</span>
                                    </div>
                                </div>
                                <div class="cart__container--top__left--list__item--top__quality">
                                    <span>người lớn</span>
                                       <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                      </div>
                                    
                                </div>
                            </div>
                            <div class="cart__container--top__left--list__item--bottom">
                                <div class="cart__container--top__left--list__item--bottom__option">
                                    <button>Sửa</button>
                                    <button>Xóa</button>
                                </div>
                                <div class="cart__container--top__left--list__item--bottom__price">
                                    <span>đ </span><span>350,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart__container--top__right">
                    <div class="cart__container--top__right--title">
                        <span>Tổng cộng(</span><span>2</span><span> đơn vị)</span>
                    </div>
                    <div class="cart__container--top__right--sum">
                        <span>đ</span><span>1,723,500</span>
                    </div>
                    <div class="art__container--top__right--btn firstBtn">
                        <a href="checkout-tour.html">
                            Thanh toán
                        </a>
                    </div>
                </div>
            </div>
            <div class="cart__container--bottom">
                <div class="cart__container--bottom__header">
                    <span>Thường được đặt với</span>
                </div>
                <div class="firstProduct row-max-width">
                    <div class="firstProduct__content container-fluid">
                        <div class="firstProduct__content--list row">
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct2.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải Nghiệm Canyoning
                                                    Vượt Thác Datanla</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.9</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">(
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">120
                                                    </span>)</span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 1,890,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 2,050,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
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
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Đi Xe Trượt Thác Datanla
                                                    New Alpine Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">1,485</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>50K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hoàn
                                                            tiền dễ dàng</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 245,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct3.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Da Lat Conquer Langbiang
                                                    Mountain, Datanla Waterfall Day
                                                    Tour with Optional Lumiere
                                                    Visit</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.6</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">265
                                                    </span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>3K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 450,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
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
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct4.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour Săn Mây và Ngắm
                                                    Bình Minh Tại Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.5</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">142</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>2K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 400,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="firstProduct__content--list row">
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct5.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải Nghiệm Đu Dây High
                                                    Rope Course Đà Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">407</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>10K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Bán
                                                            chạy</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 460,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
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
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct6.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Trải nghiệm trượt
                                                    Zipline xuyên rừng tại Datanla
                                                    Đà Lạt </a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">57</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>1K+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 1,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct7.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour ngày tham quan
                                                    ngoại ô Đà Lạt với tuỳ chọn tham
                                                    quan Vườn ánh sáng Lumiere Đà
                                                    Lạt</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.7</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">93</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--price">
                                                    <span>đ 550,000</span>
                                                </div>
                                            </div>
                                            <div
                                                class="firstProduct__info--bottom__tagging tagging__wrap">
                                                <div
                                                    class="tagging__box firstProduct__info--bottom__tagging--box">
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
                                </div>
                            </div>
                            <div
                                class="firstProduct__content--list__item col-sm-3 ">
                                <div
                                    class="firstProduct__content--list__item--wrap">
                                    <div class="firstProduct__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct8.webp"
                                            alt="tourProduct">
                                    </div>
                                    <div class="firstProduct__info">
                                        <div class="firstProduct__info--top">
                                            <div
                                                class="firstProduct__info--top__title">
                                                <a href="#">Tour Nửa Ngày Chèo SUP
                                                    Trên Hồ Tuyền Lâm</a>
                                            </div>
                                            <div
                                                class="firstProduct__info--top__score">
                                                <div
                                                    class="firstProduct__info--top__score--star">
                                                    <div
                                                        class="firstProduct__info--top__score--star__icon">
                                                        <ion-icon
                                                            name="star"></ion-icon>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--top__score--star__number">
                                                        <span>4.8</span>
                                                    </div>
                                                </div>
                                                <span
                                                    class="firstProduct__info--top__score--review">
                                                    (
                                                    <span
                                                        class="firstProduct__info--top__score--review__number">39</span>
                                                    )
                                                </span>
                                                <div class="sep">
                                                    <ion-icon
                                                        name="ellipse"></ion-icon>
                                                </div>
                                                <div
                                                    class="firstProduct__info--top__score--booked">
                                                    <span
                                                        firstProduct__info--top__score--booked__number>800+
                                                        Đã được đặt </span>
                                                </div>
                                            </div>
                                            <div class="tagging__wrap">
                                                <div class="tagging__box">
                                                    <div class="tagging__tag">
                                                        <span
                                                            class="tagging__tag--text">Hướng
                                                            dẫn tiếng Việt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="firstProduct__info--bottom">
                                            <div
                                                class="firstProduct__info--bottom__content">
                                                <div
                                                    class="firstProduct__info--bottom__content--box">
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__price">
                                                        <span>đ 500,000</span>
                                                    </div>
                                                    <div
                                                        class="firstProduct__info--bottom__content--box__underline">
                                                        <span>đ 540,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
    <?php wc_get_template('cart/cart.php'); ?>

       
<?php get_footer();?>