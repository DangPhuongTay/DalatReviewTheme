<?php
/**
 * Template Name: TemplateDetailHotel
 * Display Only Detail Hotel template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>

<div class="slide__img--box">
        <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
        <div class="container__slides">
    
          <!-- Full-width images with number text -->
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide1.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide2.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide3.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide4.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide5.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%">
          </div>
      
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          <!-- Thumbnail images -->
          <div class="container__slide--number">
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide1.jpg" style="width:100%" onclick="currentSlide(1)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide2.jpg" style="width:100%" onclick="currentSlide(2)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide3.jpg" style="width:100%" onclick="currentSlide(3)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide4.jpg" style="width:100%" onclick="currentSlide(4)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide5.jpg" style="width:100%" onclick="currentSlide(5)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
          </div>
        </div>
      </div>
      <div class="secondDropDown">
        <div class="hotel__fitter">
            <div class="hotel__fitter--wrapper">
                <div class="hotel__fitter--search">
                    <p>Địa điểm</p>
                    <input type="search" placeholder="Khám phá những điểm gần đây" class="hotel__search">
                    <div class="hotel__fitter--location">
                        <div>
                            <section class="hotel__destination--wrapper">
                                <span>Vị trí của tôi</span>
                                <div class="hotel__destination--group">
                                    <span class="hotel__destination--group__item">
                                        Khám phá những điểm gần đây
                                    </span>
                                </div>
                            </section>
                            <section class="hotel__destination--wrapper">
                                <span>Tên điểm đến hot</span>
                                <div class="hotel__destination--group">
                                    <span class="hotel__destination--group__item">Hồng Kông</span>
                                    <span class="hotel__destination--group__item">Tân Gia Ba</span>
                                    <span class="hotel__destination--group__item">Tokyo</span>
                                    <span class="hotel__destination--group__item">Đài Bắc</span>
                                </div>
                            </section>
                            
                        </div>
                    </div>
                </div>
                <div class="hotel__fitter--search">
                    <p>Ngày nhận / trả phòng</p>
                    <input type="date" placeholder="Chọn ngày" class="hotel__search">
                </div>
                <div class="hotel__fitter--search room">
                    <p>Số khách & phòng</p>
                    <input type="search" placeholder="Chọn phòng" class="hotel__search">
                    <div class="hotel__fitter--room">
                        <div class="hotel__fitter--room__inner">
                            <div class="hotel__fitter--room__content">
                                <section class="hotel__fitter--room__item">
                                    <b>Phòng</b>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                    </div>
                                </section>
                                <section class="hotel__fitter--room__item">
                                    <b>Người lớn</b>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                    </div>
                                </section>
                                <section class="hotel__fitter--room__item not--child">
                                    <b>Trẻ em</b>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="hotel__fitter--btn firstBtn">
                        Tìm kiếm
                    </div>
                </a>
            </div>
        </div>
    

        <div class="hotel__fitter--blur"></div>
        <div class="hotel__fitter--blur__2"></div>
        </div>
    <div class="detailHotel__banner">
        <div class="detailHotel__top--link">
            <ion-icon name="chevron-back-outline"></ion-icon>
            <a href="hotel">Tìm thêm khách sạn tại Đà Lạt</a>
        </div>
        <div class="detailHotelMobile__slides">
            <div class="detailHotelMobile__slides--show">
                <div class="detailHotelMobile__slides--show__item" onclick="btnDetailHotelSlides(   )">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel2.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel3.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel5.jpg" alt="">
                </div>
            </div>
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
                <input type="text" placeholder="Xem địa chỉ">
                <input type="submit" value="XÁC NHẬN" onclick="closeMapCarFormBtn()">
            </div>
        </div>
    </div>
    <section class="detailHotel">
        
        <div class="detailHotel__img" onclick="btnDetailHotelSlides()">
            <div class="detailHotel__img--left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel1.jpg" alt="">
            </div>
            <div class="detailHotel__img--right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel3.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel5.jpg" alt="">
            </div>
        </div>
        <div class="detailHotel__info">
            <div class="detailHotel__info--wapper">
                <div class="detailHotel__info--wapper__left">
                    <h1>Rose Milano Villa</h1>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <div class="detailHotel__info--wapper__right">
                    <p class="detailHotel__info--wapper__right--name">
                        <span class="detailHotel__info--wapper__right--1">đ</span>
                        <span class="detailHotel__info--wapper__right--price">20XXXXX</span>
                        <span class="detailHotel__info--wapper__right--unit">Mỗi đêm</span>
                    </p>
                    <p class="detailHotel__info--wapper__right--tip">Đăng nhập để hưởng giá thành viên Đà Lạt Review</p>
                    <a href="#detailHotel__selectRoom" class="detailHotel__info--wapper__btn firstBtn">Chọn phòng</a>
                </div>
                <div class="fourProductList__wrapper--info__review list__wrapper">
                    <div class="fourProductList__wrapper--info__score">
                        <span>4.4</span>
                        <span class="slash">/</span>
                        <span>5</span>
                    </div>
                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                    <div class="fourProductList__wrapper--info__count" onclick="btnDetailHotelRate()">47 Bình luận</div>
                </div>
            </div>
            <div class="detailHotel__info--summary">
                <div class="detailHotelMobile__info--summary sevice">
                    <div class="detailHotel__list--body__facility--content__item--content--subitem">
                        <ion-icon name="wifi-outline"></ion-icon>
                        <span>WiFi miễn phí</span>
                    </div>
                    <div class="detailHotel__list--body__facility--content__item--content--subitem">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <span>Dịch vụ giặt ủi</span>
                    </div>
                    <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                </div>
                <div class="detailHotel__info--summary__left" onclick="btnDetailHotelRate()">
                    <div class="detailHotel__info--summary__left--top">
                        <div class="detailHotel__info--summary__left--top__rating">
                            <span>4.3</span>
                            <span>/5</span>
                        </div>
                        <div class="detailHotel__info--summary__left--top__score">
                            <span>Rất tốt</span>
                            <span>12 Bình luận</span>
                        </div>
                    </div>
                    <div class="detailHotel__info--summary__left--bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                        <div class="detailHotel__info--summary__left--bot__decs">
                            <div class="detailHotel__info--summary__left--bot__decs--name">Tien Dat</div>
                            <div class="detailHotel__info--summary__left--bot__decs--content">Khách sạn sạch đẹp, phòng
                                tiện nghi đầy đủ, dịch vụ tốt và nhân viên thân thiện. Sạc điện thoại mình bị hư đã được
                                ks hỗ trợ cho mượn cái thay thế.
                                Tuy nhiên, mình có chút không thoải mái về vấn đề cách âm. Nếu cải thiện được vấn đề này
                                sẽ rất tốt.
                                Mình dự định sẽ quay lại đặt phòng trong kỳ nghỉ tới.</div>
                        </div>
                    </div>
                </div>
                <div class="detailHotel__info--summary__right" onclick="openMapsCarFormBtn()">
                    <div class="detailHotel__info--summary__right--address">
                        <span>16 Trạng Trình(P.9)</span>
                        <div class="detailHotel__info--summary__right--location">
                            <ion-icon name="train-outline"></ion-icon>
                            <p>Ga Đà Lạt, 1.1km</p>
                        </div>
                    </div>
                    <div class="detailHotel__info--summary__right--map">
                        <span>Xem bản đồ</span>
                        <ion-icon name="location-sharp"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="detailHotel__list">
                <div class="detailHotel__list--header">
                    <div class="header__list--header__title" id="detailHotel__selectRoom">
                        <h2>Chọn phòng của bạn</h2>
                    </div>
                </div>
                <div class="detailHotel__list--body">
                    <p class="detailHotel__list--body__desc">Khám phá những lựa chọn tuyệt vời nhất. Mức giá hiển thị là
                        mức giá cho mỗi phòng mỗi đêm bao gồm thuế phí</p>
                    <p class="detailHotel__list--body__fitter">Lọc để tìm các lựa chọn phù hợp:</p>
                    <div class="detailHotel__list--body__checkbox">
                        <div class="detailHotel__list--body__checkbox--group">
                            <input type="checkbox" id="checkbox--group">
                            <label class="detailHotel__list--body__checkbox--lable" for="checkbox--group">
                                <ion-icon name="gift-outline"></ion-icon>
                                <p>Ưu đãi của khách sạn(8)</p>
                            </label>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__select">
                        <div class="detail__list--body__select--rom">
                            <div class="primary__dropdown">
                                <div class="primary__dropdown--button detail__list--body__select--rom__container">
                                    <span>2 loại phòng</span>
                                    <div class="primary__dropdown--icon">
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="detail__list--body__select--rom__item">
                                    <ul class=" primary__dropdown--content__list" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="primary__dropdown--content__list--item" href="#">Phòng Deluxe  (Từ ₫ 20XXXXX)</a></li>
                                    <li><a class="primary__dropdown--content__list--item" href="#">Phòng Đôi  (Từ ₫ 20XXXXX)</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="detail__list--body--select__tip">
                            Có <b>4</b> mức giá cho loại phòng này
                        </div>
                    </div>
                    <div class="detailHotel__list--body__list--wrapper">
                        <div class="detailHotel__list--body__list--wrapper__icon">
                            <ion-icon name="close-outline"></ion-icon>
                        </div>
                       
                        <div class="detailHotel__list--body__list--wrapper__container--box">
                            <nav>
                                <a href="#detailHotel__room">Phòng Deluxe</a>
                                <a href="#detailHotel__include">Bao gồm</a>
                                <a href="#detailHotel__prices">Giá chi tiết</a>
                                <a href="#detailHotel__location">Chính sách chỗ lưu trú</a>
                            </nav>
                            <div class="detailHotel__list--body__list--wrapper__container">
                                <div class="header__list--header__title" id="detailHotel__room">
                                    <h2>Phòng Deluxe</h2>
                                </div>
                                <div class="detailHotel__list--body__list--wrappper__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detailHotel1.avif" alt="">
                                </div>
                                <div class="detailHotel__rate--content__list">
                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                        <ion-icon name="cafe-outline"></ion-icon>
                                        <span>Bữa sáng miễn phí</span>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                        <ion-icon name="ban-outline"></ion-icon>
                                        <span>Không hoàn tiền</span>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--left__popular">
                                    <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                        <ion-icon name="bar-chart-outline"></ion-icon>
                                        <p>25.0 m²</p>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                        <ion-icon name="albums-outline"></ion-icon>
                                        <p>Tầm nhìn hướng sân trong</p>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--left__facility--text">
                                    Tiện ích Phòng
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--left__facility">
                                    <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <p>Không hút thuốc</p>
                                    </div> 
                                    <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <p>Quạt trần</p>
                                    </div> 
                                    <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <p>TV</p>
                                    </div> 
                                    <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <p>Dịch vụ dọn phòng</p>
                                    </div> 
                                </div>
                                <div class="header__list--header__title" id="detailHotel__include">
                                    <h2>Bao gồm</h2>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                    <ion-icon name="car-sport-outline"></ion-icon>
                                    <span>Đỗ xe miễn phí</span>
                                </div>
                                <div class="header__list--header__title" id="detailHotel__prices">
                                    <h2>Giá chi tiết</h2>
                                </div>
                                <div class="detailHotel__price--item__top">
                                    <div class="detailHotel__lable--section">
                                        <span>1 phòng x 1 đêm</span>
                                    </div>
                                    <span class="detailHotel__value--section">
                                        đ<b>615</b>
                                    </span>
                                </div>
                                <div class="detailHotel__price--item__top">
                                    <div class="detailHotel__lable--section">
                                        <span>Thuế và phí</span>
                                    </div>
                                    <span class="detailHotel__value--section">
                                        đ<b>615</b>
                                    </span>
                                </div>
                                <div class="detailHotel__price">
                                    <div class="detailHotel__price--item__top">
                                        <span>Thanh toán online</span>
                                        <p>
                                            <i>Tổng</i>
                                            <b>₫ 529,901</b>
                                        </p>
                                    </div>
                                    <div class="detailHotel__price--tip">
                                        <span>Đã bao gồm thuế</span>
                                    </div>
                                </div>
                                <div class="header__list--header__title" id="detailHotel__location">
                                    <h2>Chính sách chỗ lưu trú</h2>
                                </div>
                                <div class="detailHotel__policy--section">
                                    <div class="detailHotel__policy--section__title">Xác nhận tức thời</div>
                                    <div class="detailHotel__policy--section__content">Nhận xác nhận đặt phòng chỉ trong vài phút</div>
                                </div>
                                <div class="detailHotel__policy--section">
                                    <div class="detailHotel__policy--section__title">Không hoàn tiền</div>
                                    <div class="detailHotel__policy--section__content">Sau khi xác nhận, đơn hàng của bạn không thể huỷ hoặc sửa đổi</div>
                                </div>
                            </div>
                        </div>

                        <div class="detailHotel__footer">
                            <div class="detailHotel__footer--price">
                                <div class="detailHotel__footer--price__info">
                                    <div class="detailHotel__footer--price__info--desc">đ <b>20XXXXX</b></div>
                                    <div class="detailHotel__footer--price__info--unit">Mỗi đêm</div>
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                </div>
                                <a class="firstBtn">Đặt</a>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__list">
                        <div class="detailHotel__list--body__list--wrap">
                            <div class="detailHotel__list--body__list--wrap__name">Phòng Deluxe</div>
                            <div class="detailHotel__list--body__list--wrap__item">
                                <div class="detailHotel__list--body__list--wrap__item--left" onclick="btnDetailHotelRoom()">
                                    <div class="detailHotel__list--body__list--wrap__item--left__img" onclick="btnDetailHotelSlides()">
                                        <div class="detailHotel__list--body__list--wrap__item--left__img--main">
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__1">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detailHotel1.avif" alt="">
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__2">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detailHotel.avif" alt="">
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__3">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__img--count">
                                            <span> <ion-icon name="images-outline"></ion-icon> </span> 36
                                        </div>
                                    </div>
                                    
                                    <div class="detailHotel__list--body__list--wrap__item--left__popular">
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--name">
                                            <p>Phòng Deluxe</p>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--platform__wrap">
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="bar-chart-outline"></ion-icon>
                                                <p>25.0 m²</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="albums-outline"></ion-icon>
                                                <p>Tầm nhìn hướng sân trong</p>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--price">
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--price__amount">
                                                Từ <div class="detailHotel__list--body__list--wrap__item--left__popular--price__format">
                                                    đ <b>20XXXX</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--left__action">
                                        <div class="detailHotel__list--body__list--wrap__item--left__action--arrow__down">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>

                                    <div class="detailHotel__list--body__list--wrap__item--left__facility">
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Không hút thuốc</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Quạt trần</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>TV</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Dịch vụ dọn phòng</p>
                                        </div> 
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--left__poptip">
                                        <p>Xem thêm tiện nghi</p>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--right">
                                    <div class="detailHotel__list--body__list--wrap__item--right__header">
                                        <div>Đề xuất cho bạn</div>
                                        <div>Giá</div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body" onclick="btnDetailHotelPrice()">
                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                                    <span>1 giường queen</span>
                                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                                        <ion-icon name="car-sport-outline"></ion-icon>
                                                        <span>Đỗ xe miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                                        <ion-icon name="cafe-outline"></ion-icon>
                                                        <span>Bữa sáng miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                                        <ion-icon name="ban-outline"></ion-icon>
                                                        <span>Không hoàn tiền</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                            đ <b>20XXXXX</b>
                                                        </div>
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--tip">
                                                            Giá 1 đêm đã bao gồm thuế
                                                        </div>
                                                    </div>
                                                    <a href="checkout" class="firstBtn">Đặt</a>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--tip">
                                                    Đăng nhập để hưởng giá thành viên Klook
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body" onclick="btnDetailHotelPrice2()">
                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                                    <span>1 giường queen</span>
                                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                                        <ion-icon name="car-sport-outline"></ion-icon>
                                                        <span>Đỗ xe miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                                        <ion-icon name="cafe-outline"></ion-icon>
                                                        <span>Bữa sáng miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                                        <ion-icon name="ban-outline"></ion-icon>
                                                        <span>Không hoàn tiền</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                            đ <b>20XXXXX</b>
                                                        </div>
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--tip">
                                                            Giá 1 đêm đã bao gồm thuế
                                                        </div>
                                                    </div>
                                                    <a href="checkout" class="firstBtn">Đặt</a>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--tip">
                                                    Đăng nhập để hưởng giá thành viên Klook
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__list--wrap">
                            <div class="detailHotel__list--body__list--wrap__name">Phòng Deluxe</div>
                            <div class="detailHotel__list--body__list--wrap__item">
                                <div class="detailHotel__list--body__list--wrap__item--left" onclick="btnDetailHotelRoom()">
                                    <div class="detailHotel__list--body__list--wrap__item--left__img slides">
                                        <div class="detailHotel__list--body__list--wrap__item--left__img--main">
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__1">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detailHotel1.avif" alt="">
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__2">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detailHotel.avif" alt="">
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__img--main__3">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotel2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__img--count">
                                            <span> <ion-icon name="images-outline"></ion-icon> </span> 36
                                        </div>
                                    </div>
                                    
                                    <div class="detailHotel__list--body__list--wrap__item--left__popular">
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--name">
                                            <p>Phòng Deluxe</p>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--platform__wrap">
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="bar-chart-outline"></ion-icon>
                                                <p>25.0 m²</p>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--platform">
                                                <ion-icon name="albums-outline"></ion-icon>
                                                <p>Tầm nhìn hướng sân trong</p>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__list--wrap__item--left__popular--price">
                                            <div class="detailHotel__list--body__list--wrap__item--left__popular--price__amount">
                                                Từ <div class="detailHotel__list--body__list--wrap__item--left__popular--price__format">
                                                    đ <b>20XXXX</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--left__action">
                                        <div class="detailHotel__list--body__list--wrap__item--left__action--arrow__down">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>

                                    <div class="detailHotel__list--body__list--wrap__item--left__facility">
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Không hút thuốc</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Quạt trần</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>TV</p>
                                        </div> 
                                        <div class="detailHotel__list--body__list--wrap__item--left__facility--platform">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                            <p>Dịch vụ dọn phòng</p>
                                        </div> 
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--left__poptip">
                                        <p>Xem thêm tiện nghi</p>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__list--wrap__item--right">
                                    <div class="detailHotel__list--body__list--wrap__item--right__header">
                                        <div>Đề xuất cho bạn</div>
                                        <div>Giá</div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body" onclick="btnDetailHotelPrice()">
                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                                    <span>1 giường queen</span>
                                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                                        <ion-icon name="car-sport-outline"></ion-icon>
                                                        <span>Đỗ xe miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                                        <ion-icon name="cafe-outline"></ion-icon>
                                                        <span>Bữa sáng miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                                        <ion-icon name="ban-outline"></ion-icon>
                                                        <span>Không hoàn tiền</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                            đ <b>20XXXXX</b>
                                                        </div>
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--tip">
                                                            Giá 1 đêm đã bao gồm thuế
                                                        </div>
                                                    </div>
                                                    <a href="checkout" class="firstBtn">Đặt</a>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--tip">
                                                    Đăng nhập để hưởng giá thành viên Klook
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__list--wrap__item--right__body" onclick="btnDetailHotelPrice2()">
                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info">
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__left">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--name">
                                                    <span>1 giường queen</span>
                                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-primary">
                                                        <ion-icon name="car-sport-outline"></ion-icon>
                                                        <span>Đỗ xe miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card text-info">
                                                        <ion-icon name="cafe-outline"></ion-icon>
                                                        <span>Bữa sáng miễn phí</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__left--rate__card">
                                                        <ion-icon name="ban-outline"></ion-icon>
                                                        <span>Không hoàn tiền</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detailHotel__list--body__list--wrap__item--right__body--info__right">
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price">
                                                    <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part">
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--desc">
                                                            đ <b>20XXXXX</b>
                                                        </div>
                                                        <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--price__part--tip">
                                                            Giá 1 đêm đã bao gồm thuế
                                                        </div>
                                                    </div>
                                                    <a href="checkout" class="firstBtn">Đặt</a>
                                                </div>
                                                <div class="detailHotel__list--body__list--wrap__item--right__body--info__right--tip">
                                                    Đăng nhập để hưởng giá thành viên Klook
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__backgroup--blur"></div>
                    <div class="detailHotel__list--body__reviews--wrap">
                        <div class="detailHotel__list--body__reviews--wrap__icon">
                            <ion-icon name="close-outline"></ion-icon>
                        </div>
                        <div class="detailHotel__list--body__reviews">
                            <div class="detailHotel__list--header">
                                <div class="header__list--header__title">
                                    <h2>Đánh giá</h2>
                                </div>
                            </div>
                            <div class="detailHotel__list--body__reviews--content">
                                <div class="detailHotel__list--body__reviews--content__overview ">
                                    <div class="detailHotel__list--body__reviews--content__overview--info">
                                        <div class="detailHotel__list--body__reviews--content__overview--info__score">
                                            <span>5.0</span>
                                            <span>/5</span>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__overview--info__fomart">
                                            <p>Tuyệt vời</p>
                                            <span>1 Bình luận</span>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__overview--category">
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                            <div>Vị trí</div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                            <div>Vị trí</div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                            <div>Vị trí</div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                            <div>Vị trí</div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                    <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                                </div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="detailHotel__list--body__reviews--content__swiper">
                                    <div class="detailHotel__list--body__reviews--content__swiper--item">
                                        <div class="detailHotel__list--body__reviews--content__swiper--items">Tất cả</div>
                                        <div class="detailHotel__list--body__reviews--content__swiper--items">Có hình ảnh</div>
                                        <div class="detailHotel__list--body__reviews--content__swiper--items">4.5+</div>
                                        <div class="detailHotel__list--body__reviews--content__swiper--items">3.0+</div>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__reviews--content__item">
                                    <div class="detailHotel__list--body__reviews--content__item--content">
                                        <div class="detailHotel__list--body__reviews--content__item--content__header">
                                            <div class="detailHotel__list--body__reviews--content__item--content__header--user">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                                <span>TienDat</span>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__item--content__header--review">Đánh giá ngày: 18/8/2019</div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__item--content__score">
                                            <p class="detailHotel__list--body__reviews--content__item--content__score--max">
                                                <span>5.0</span>
                                                <span>/5</span>
                                            </p>
                                            <span>Tuyệt vời</span>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__item--content__text">
                                            Good Hotel. I will comeback when go to Dalat. Everything was perfect. Room is new, clean and with very friendly staff. Will be back again.
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__item--from">
                                        <img src="https://res.klook.com/image/upload/Frame_910_hnuyax.png" alt="">
                                        <span>du khách</span>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__reviews--content__item">
                                    <div class="detailHotel__list--body__reviews--content__item--content">
                                        <div class="detailHotel__list--body__reviews--content__item--content__header">
                                            <div class="detailHotel__list--body__reviews--content__item--content__header--user">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                                <span>TienDat</span>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__item--content__header--review">Đánh giá ngày: 18/8/2019</div>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__item--content__score">
                                            <p class="detailHotel__list--body__reviews--content__item--content__score--max">
                                                <span>5.0</span>
                                                <span>/5</span>
                                            </p>
                                            <span>Tuyệt vời</span>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__item--content__text">
                                            Good Hotel. I will comeback when go to Dalat. Everything was perfect. Room is new, clean and with very friendly staff. Will be back again.
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__item--from">
                                        <img src="https://res.klook.com/image/upload/Frame_910_hnuyax.png" alt="">
                                        <span>du khách</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__reviews">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Đánh giá</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__reviews--content">
                            <div class="detailHotel__list--body__reviews--content__overview">
                                <a class="detailHotel__list--body__reviews--content__overview--link" onclick="btnDetailHotelRate()">Đọc tất cả đánh giá</a>
                                <div class="detailHotel__list--body__reviews--content__overview--info">
                                    <div class="detailHotel__list--body__reviews--content__overview--info__score">
                                        <span>5.0</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__overview--info__fomart">
                                        <p>Tuyệt vời</p>
                                        <span>1 Bình luận</span>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__reviews--content__overview--category">
                                    <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                        <div>Vị trí</div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                        <div>Vị trí</div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                        <div>Vị trí</div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__overview--category__item">
                                        <div>Vị trí</div>
                                        <div class="detailHotel__list--body__reviews--content__overview--category__item--progress">
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content">
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--runway"></div>
                                                <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__content--progress"></div>
                                            </div>
                                            <div class="detailHotel__list--body__reviews--content__overview--category__item--progress__end">5.0</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="detailHotel__list--body__reviews--content__swiper">
                                <div class="detailHotel__list--body__reviews--content__swiper--item">
                                    <div class="detailHotel__list--body__reviews--content__swiper--items">Tất cả</div>
                                    <div class="detailHotel__list--body__reviews--content__swiper--items">Có hình ảnh</div>
                                    <div class="detailHotel__list--body__reviews--content__swiper--items">4.5+</div>
                                    <div class="detailHotel__list--body__reviews--content__swiper--items">3.0+</div>
                                </div>
                            </div>
                            <div class="detailHotel__list--body__reviews--content__item" onclick="btnDetailHotelRate()">
                                <div class="detailHotel__list--body__reviews--content__item--content">
                                    <div class="detailHotel__list--body__reviews--content__item--content__header">
                                        <div class="detailHotel__list--body__reviews--content__item--content__header--user">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                            <span>TienDat</span>
                                        </div>
                                        <div class="detailHotel__list--body__reviews--content__item--content__header--review">Đánh giá ngày: 18/8/2019</div>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__item--content__score">
                                        <p class="detailHotel__list--body__reviews--content__item--content__score--max">
                                            <span>5.0</span>
                                            <span>/5</span>
                                        </p>
                                        <span>Tuyệt vời</span>
                                    </div>
                                    <div class="detailHotel__list--body__reviews--content__item--content__text">
                                        Good Hotel. I will comeback when go to Dalat. Everything was perfect. Room is new, clean and with very friendly staff. Will be back again.
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__reviews--content__item--from">
                                    <img src="https://res.klook.com/image/upload/Frame_910_hnuyax.png" alt="">
                                    <span>du khách</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__detail">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Điểm tham quan gần đó</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__detail--content">
                            <div class="detailHotel__list--body__detail--content__wrap">
                                <div class="detailHotel__list--body__detail--content__item">
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Chùa Thiên Vương</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">200m</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Ha Dong Flower Village</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">800m</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Câu lạc bộ golf Dalat Palace</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">1.5km</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Gasoline tree Ta Nung</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">11.6km</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Tượng phật vàng</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">300m</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Vườn Ánh Sáng Lumiere</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">1.3km</div>
                                    </div>
                                    <div class="detailHotel__list--body__detail--content__item--wrap">
                                        <div class="detailHotel__list--body__detail--content__item--wrap__left">Cathedral of Da Lat Diocese</div>
                                        <div class="detailHotel__list--body__detail--content__item--wrap__distance">3.3km</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__detail--content__footer" onclick="openMapsCarFormBtn()">
                            <span>Xem bản đồ</span>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detailHotel__list--body__facility">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Dịch vụ và cơ sở vật chất</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__facility--content">
                            <div class="detailHotel__list--body__facility--content__item">
                                <div class="detailHotel__list--body__facility--content__item--title">Tiện nghi phổ biến nhất</div>
                                <div class="detailHotel__list--body__facility--content__item--content boder__bottom">
                                    <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                        <ion-icon name="wifi-outline"></ion-icon>
                                        <span>WiFi miễn phí</span>
                                    </div>
                                </div>
                            </div>
                            <div class="detailHotel__list--body__facility--content__item">
                                <div class="detailHotel__list--body__facility--content__item--title">Dịch vụ dọn dẹp</div>
                                <div class="detailHotel__list--body__facility--content__item--content">
                                    <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <span>Dịch vụ giặt ủi</span>
                                    </div>
                                    <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        <span>Dịch vụ giặt ủi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailHotel__list--footer sevice">
                            <button class="detailHotel__list--footer__btn "><span>Xem tất cả các tiện nghi</span></button>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__policies">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Chính sách chỗ lưu trú</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__policies--content">
                            <div class="detailHotel__list--body__policies--content__check">
                                <div class="detailHotel__list--body__policies--content__check--title">Chính sách nhận phòng</div>
                                <div class="detailHotel__list--body__policies--content__check--content">
                                    <div class="detailHotel__list--body__policies--content__check--content__instruction">
                                        <div>
                                            <ion-icon name="time-outline"></ion-icon>
                                            <span>Giờ nhận phòng <b>12:00 PM ~ 4:00 PM</b> </span>
                                        </div>
                                        <div>
                                            <ion-icon name="time-outline"></ion-icon>
                                            <span>Giờ trả phòng  <b>12:00 PM</b> </span>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__policies--content__check--content__desc">
                                        Lưu ý: Chính sách nhận phòng khác nhau tùy theo chỗ lưu trú. Vui lòng kiểm tra cẩn thận trước khi đặt phòng
                                    </div>
                                    <div class="detailHotel__list--body__policies--content__check--content__contentList">
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Nơi lưu trú này không có quầy tiếp tân.</span>
                                        </div>  
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Khách chịu trách nhiệm nhận phòng phải từ 18 tuổi trở lên</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Có thể thu phí thêm người với mức phí khác nhau, tùy chính sách riêng</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Có thể cần giấy tờ tùy thân hợp pháp có ảnh và cần đặt cọc bằng thẻ tín dụng, thẻ ghi nợ hoặc tiền mặt (cho các chi phí phát sinh - nếu có) khi làm thủ tục nhận phòng</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Tùy thuộc vào tình hình thực tế khi nhận phòng mà các yêu cầu đặc biệt có được đáp ứng hay không và có thể thu phụ phí. Không đảm bảo đáp ứng mọi yêu cầu đặc biệt</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Nơi lưu trú này nhận thanh toán bằng tiền mặt</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                            <span>Chào đón người thuê dài hạn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id="dots"></span><span id="more">
                            <div class="detailHotel__list--body__policies--content__fee">
                                <div class="detailHotel__list--body__policies--content__fee--title">Các phí khác</div>
                                <div class="detailHotel__list--body__policies--content__fee--content">
                                    <div class="detailHotel__list--body__policies--content__fee--content__contentList">
                                        <div class="detailHotel__list--body__policies--content__fee--content__contentList--item">
                                            <span>Phí giặt ủi: 5 VNĐ mỗi đêm</span>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__fee--content__contentList--item">
                                            <span>Danh sách trên có thể không đầy đủ. Phí và đặt cọc có thể không bao gồm thuế và có thể thay đổi.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detailHotel__list--body__policies--content__dining">
                                <div class="detailHotel__list--body__policies--content__dining--title">Đồ ăn & thức uống</div>
                                <div class="detailHotel__list--body__policies--content__dining--content">
                                    <div class="detailHotel__list--body__policies--content__dining--content__contentList">
                                        <div class="detailHotel__list--body__policies--content__dining--content__contentList--item">
                                            <span>Hãy tận dụng sự tiện lợi của dịch vụ phòng 24 giờ tại Biệt thự này. Khách có thể dùng bữa sáng đầy đủ miễn phí hàng ngày từ 7:00 đến 9:30.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__policies--footer" onclick="myFunction()" id="readMore">
                            <span >Xem tất cả chính sách</span>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                    </span>
                    </div>
                    <div class="detailHotelMobile__list--body__service--container">
                        <div class="detailHotelMobile__list--body__service--body">
                            <nav>
                                <a href="#detailHotelMobile__facility">Dịch vụ và cơ sở vật chất</a>
                                <a href="#detailHotelMobile__policies">Chính sách chỗ lưu trú</a>
                                <a href="#detailHotelMobile__description">Mô tả</a>
                            </nav>
                            <div class="detailHotelMobile__list--body__service--body__content">
                                <div class="detailHotel__list--body__facility">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title" id="detailHotelMobile__facility">
                                            <h2>Dịch vụ và cơ sở vật chất</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__facility--content">
                                        <div class="detailHotel__list--body__facility--content__item">
                                            <div class="detailHotel__list--body__facility--content__item--title">Tiện nghi phổ biến nhất</div>
                                            <div class="detailHotel__list--body__facility--content__item--content boder__bottom">
                                                <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                                    <ion-icon name="wifi-outline"></ion-icon>
                                                    <span>WiFi miễn phí</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__facility--content__item">
                                            <div class="detailHotel__list--body__facility--content__item--title">Dịch vụ dọn dẹp</div>
                                            <div class="detailHotel__list--body__facility--content__item--content">
                                                <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                    <span>Dịch vụ giặt ủi</span>
                                                </div>
                                                <div class="detailHotel__list--body__facility--content__item--content--subitem">
                                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                                    <span>Dịch vụ giặt ủi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--footer">
                                        <button class="detailHotel__list--footer__btn"><span>Xem tất cả các tiện nghi</span></button>
                                    </div>
                                </div>
                                <div class="detailHotel__list--body__policies">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title"  id="detailHotelMobile__policies">
                                            <h2>Chính sách chỗ lưu trú</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__policies--content">
                                        <div class="detailHotel__list--body__policies--content__check">
                                            <div class="detailHotel__list--body__policies--content__check--title">Chính sách nhận phòng</div>
                                            <div class="detailHotel__list--body__policies--content__check--content">
                                                <div class="detailHotel__list--body__policies--content__check--content__instruction">
                                                    <div>
                                                        <ion-icon name="time-outline"></ion-icon>
                                                        <span>Giờ nhận phòng <b>12:00 PM ~ 4:00 PM</b> </span>
                                                    </div>
                                                    <div>
                                                        <ion-icon name="time-outline"></ion-icon>
                                                        <span>Giờ trả phòng  <b>12:00 PM</b> </span>
                                                    </div>
                                                </div>
                                                <div class="detailHotel__list--body__policies--content__check--content__desc">
                                                    Lưu ý: Chính sách nhận phòng khác nhau tùy theo chỗ lưu trú. Vui lòng kiểm tra cẩn thận trước khi đặt phòng
                                                </div>
                                                <div class="detailHotel__list--body__policies--content__check--content__contentList">
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Nơi lưu trú này không có quầy tiếp tân.</span>
                                                    </div>  
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Khách chịu trách nhiệm nhận phòng phải từ 18 tuổi trở lên</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Có thể thu phí thêm người với mức phí khác nhau, tùy chính sách riêng</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Có thể cần giấy tờ tùy thân hợp pháp có ảnh và cần đặt cọc bằng thẻ tín dụng, thẻ ghi nợ hoặc tiền mặt (cho các chi phí phát sinh - nếu có) khi làm thủ tục nhận phòng</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Tùy thuộc vào tình hình thực tế khi nhận phòng mà các yêu cầu đặc biệt có được đáp ứng hay không và có thể thu phụ phí. Không đảm bảo đáp ứng mọi yêu cầu đặc biệt</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Nơi lưu trú này nhận thanh toán bằng tiền mặt</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__check--content__contentList--item">
                                                        <span>Chào đón người thuê dài hạn</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span id="dots"></span><span id="more">
                                        <div class="detailHotel__list--body__policies--content__fee">
                                            <div class="detailHotel__list--body__policies--content__fee--title">Các phí khác</div>
                                            <div class="detailHotel__list--body__policies--content__fee--content">
                                                <div class="detailHotel__list--body__policies--content__fee--content__contentList">
                                                    <div class="detailHotel__list--body__policies--content__fee--content__contentList--item">
                                                        <span>Phí giặt ủi: 5 VNĐ mỗi đêm</span>
                                                    </div>
                                                    <div class="detailHotel__list--body__policies--content__fee--content__contentList--item">
                                                        <span>Danh sách trên có thể không đầy đủ. Phí và đặt cọc có thể không bao gồm thuế và có thể thay đổi.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detailHotel__list--body__policies--content__dining">
                                            <div class="detailHotel__list--body__policies--content__dining--title">Đồ ăn & thức uống</div>
                                            <div class="detailHotel__list--body__policies--content__dining--content">
                                                <div class="detailHotel__list--body__policies--content__dining--content__contentList">
                                                    <div class="detailHotel__list--body__policies--content__dining--content__contentList--item">
                                                        <span>Hãy tận dụng sự tiện lợi của dịch vụ phòng 24 giờ tại Biệt thự này. Khách có thể dùng bữa sáng đầy đủ miễn phí hàng ngày từ 7:00 đến 9:30.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__policies--footer" onclick="myFunction()" id="readMore">
                                        <span >Xem tất cả chính sách</span>
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                </span>
                                </div>
                                <div class="detailHotel__list--body__description">
                                    <div class="detailHotel__list--header">
                                        <div class="header__list--header__title"  id="detailHotelMobile__description">
                                            <h2>Mô tả</h2>
                                        </div>
                                    </div>
                                    <div class="detailHotel__list--body__description--text">
                                        Rose Milano Villa ở Đà Lạt, cách Tượng phật vàng và Làng thêu XQ 5 phút lái xe. Biệt thự này cách Chợ Đà Lạt 2,4 mi (3,8 km) và cách Đại học Đà Lạt 0,9 mi (1,4 km).
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="detailHotelMobie__footer">
                                <div class="firstBtn">Chọn phòng</div>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__description">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Mô tả</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__description--text">
                            Rose Milano Villa ở Đà Lạt, cách Tượng phật vàng và Làng thêu XQ 5 phút lái xe. Biệt thự này cách Chợ Đà Lạt 2,4 mi (3,8 km) và cách Đại học Đà Lạt 0,9 mi (1,4 km).
                        </div>
                    </div>
                    <div class="detailHotel__list--body__similar">
                        <div class="detailHotel__list--header">
                            <div class="header__list--header__title">
                                <h2>Chỗ lưu trú gần đó</h2>
                            </div>
                        </div>
                        <div class="detailHotel__list--body__similar--content">
                            <div class="fourProductList__wrapper">
                                <div class="fourProductList__wrapper--item">
                                    <a href="">
                                        <div class="fourProductList__wrapper--img">
                                            <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                                        </div>
                                        <div class="fourProductList__wrapper--main">
                                            <div class="fourProductList__wrapper--info">
                                                <div class="fourProductList__wrapper--info__title">
                                                    <span>Dalat Wonder Resort</span>
                                                    <span class="fourProductList__wrapper--stars">
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                    </span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__review">
                                                    <div class="fourProductList__wrapper--info__score">
                                                        <span>4.4</span>
                                                        <span class="slash">/</span>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                                    <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                                </div>
                                                <div class="fourProductList__wrapper--info__ellipsis">
                                                    <ion-icon name="location-outline"></ion-icon>
                                                    <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__tag">
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Phòng Gym</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Lễ tân 24/24</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Trung tâm thành phố</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fourProductList__wrapper--price">
                                                <div class="fourProductList__wrapper--price__info">
                                                    <span>đ</span>
                                                    <span>1,444,527</span>
                                                </div>
                                                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="fourProductList__wrapper--item">
                                    <a href="">
                                        <div class="fourProductList__wrapper--img">
                                            <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                                        </div>
                                        <div class="fourProductList__wrapper--main">
                                            <div class="fourProductList__wrapper--info">
                                                <div class="fourProductList__wrapper--info__title">
                                                    <span>Dalat Wonder Resort</span>
                                                    <span class="fourProductList__wrapper--stars">
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                    </span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__review">
                                                    <div class="fourProductList__wrapper--info__score">
                                                        <span>4.4</span>
                                                        <span class="slash">/</span>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                                    <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                                </div>
                                                <div class="fourProductList__wrapper--info__ellipsis">
                                                    <ion-icon name="location-outline"></ion-icon>
                                                    <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__tag">
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Phòng Gym</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Lễ tân 24/24</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Trung tâm thành phố</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fourProductList__wrapper--price">
                                                <div class="fourProductList__wrapper--price__info">
                                                    <span>đ</span>
                                                    <span>1,444,527</span>
                                                </div>
                                                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="fourProductList__wrapper--item">
                                    <a href="">
                                        <div class="fourProductList__wrapper--img">
                                            <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                                        </div>
                                        <div class="fourProductList__wrapper--main">
                                            <div class="fourProductList__wrapper--info">
                                                <div class="fourProductList__wrapper--info__title">
                                                    <span>Dalat Wonder Resort</span>
                                                    <span class="fourProductList__wrapper--stars">
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                    </span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__review">
                                                    <div class="fourProductList__wrapper--info__score">
                                                        <span>4.4</span>
                                                        <span class="slash">/</span>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                                    <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                                </div>
                                                <div class="fourProductList__wrapper--info__ellipsis">
                                                    <ion-icon name="location-outline"></ion-icon>
                                                    <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__tag">
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Phòng Gym</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Lễ tân 24/24</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Trung tâm thành phố</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fourProductList__wrapper--price">
                                                <div class="fourProductList__wrapper--price__info">
                                                    <span>đ</span>
                                                    <span>1,444,527</span>
                                                </div>
                                                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="fourProductList__wrapper--item">
                                    <a href="">
                                        <div class="fourProductList__wrapper--img">
                                            <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                                        </div>
                                        <div class="fourProductList__wrapper--main">
                                            <div class="fourProductList__wrapper--info">
                                                <div class="fourProductList__wrapper--info__title">
                                                    <span>Dalat Wonder Resort</span>
                                                    <span class="fourProductList__wrapper--stars">
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                        <ion-icon name="star" class="icon__star"></ion-icon>
                                                    </span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__review">
                                                    <div class="fourProductList__wrapper--info__score">
                                                        <span>4.4</span>
                                                        <span class="slash">/</span>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                                    <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                                </div>
                                                <div class="fourProductList__wrapper--info__ellipsis">
                                                    <ion-icon name="location-outline"></ion-icon>
                                                    <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                                </div>
                                                <div class="fourProductList__wrapper--info__tag">
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Phòng Gym</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Lễ tân 24/24</span>
                                                    </div>
                                                    <div class="fourProductList__wrapper--info__card--tag">
                                                        <span>Trung tâm thành phố</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fourProductList__wrapper--price">
                                                <div class="fourProductList__wrapper--price__info">
                                                    <span>đ</span>
                                                    <span>1,444,527</span>
                                                </div>
                                                <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailHotel__list--body__link">
                        <div class="detailHotel__list--body__link--inner">
                            <span class="detailHotel__list--body__link--inner__item">
                                <a href="http://localhost/wordpress">Trang chủ</a>
                            </span>
                            <span class="detailHotel__list--body__link--inner__divider">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </span>
                            <span class="detailHotel__list--body__link--inner__item">
                                <a href="hotel">Khách sạn</a>
                            </span>
                            <span class="detailHotel__list--body__link--inner__divider">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </span>
                            <span class="detailHotel__list--body__link--inner__item">
                                <a class="last__link" href="#">Rose Milano Villa</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="detailHotel__list--footer">
                    <div class="firstTag__internal--wrap">
                        <h2 class="firstTag__internal--title">Khám phá thêm trên Đà Lạt Review !</h2>

                        <!-- module-banner -->
                        <div class="firstTag__internal--content">
                            <h3 class="firstTag__internal--header">
                                Trải nghiệm tuyệt vời tại Đà Lạt
                            </h3>
                            <ul class="firstTag__internal--wrapper">
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Puppy Farm</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Cáp treo Đà Lạt</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Tour săn mây</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Đồi cỏ mây</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Quảng trường</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Tour săn mây</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="firstTag__internal--content">
                            <h3 class="firstTag__internal--header">
                                Giao thông ở Đà Lạt
                            </h3>
                            <ul class="firstTag__internal--wrapper">
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Dịch vụ đưa đón Sân bay Liên Khương</a>
                                </li>
                            </ul>
                        </div>
                        <div class="firstTag__internal--content">
                            <h3 class="firstTag__internal--header">
                                Khám phá những trải nghiệm tại địa phương
                            </h3>
                            <ul class="firstTag__internal--wrapper">
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Tour săn mây</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Tour Đà Lạt</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Xe máy Đà Lạt</a>
                                </li>
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion">Vượt thác Đà Lạt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="firstTag__internal--content">
                            <h3 class="firstTag__internal--header">
                                Xu hướng nổi 
                            </h3>
                            <ul class="firstTag__internal--wrapper">
                                <li class="firstTag__internal--unit">
                                    <a href="" class="firstTag__unit--suggestion" >Tour săn mây Đà Lạt</a>
                                    <a href="" class="firstTag__unit--suggestion" >Dạo quanh Đà Lạt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="home__contact--banner">
                        <div class="home__contact--banner__container">
                        <div class="home__contact--banner__container--list">
                            <div class="home__contact--banner__container--content">
                                <div class="home__contact--banner__container--content__info">
                                    <p>Để lại thông tin liên hệ của bạn để được tư vấn thêm</p>
                                    <span>Hệ thống tư vấn trực tuyến của Đà Lạt Review tất tần tật giúp bạn tìm ra các trải nghiệm du lịch Đà Lạt phù hợp với bản thân.</span>
                                </div>
                                <form action="#">
                                    <input type="text" placeholder="Nhập tên của bạn">
                                    <input type="text" placeholder="Nhập sđt hoặc email">
                                </form>
                                <button><span>Gửi ngay</span> <ion-icon name="paper-plane"></ion-icon></button>
                            </div>
                            <div class="home__contact--banner__container--list__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner-img-1.png" alt="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner.png" alt="">
                            </div>
                           
                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/detailHotel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/secondDropdown.js"></script>
<?php get_footer();?>