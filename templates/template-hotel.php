<?php
/**
 * Template Name: TemplateHotel
 * Display Only Hotel template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
    get_header();?>
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
    
        <div class="hotelMobile__fitter">
            <div class="hotelMobile__fitter--wraper">
                <div class="hotelMobile__fitter--date">
                    Chọn ngày
                </div>
                <div class="hotelMobile__fitter--date__wrap">
                    <div class="hotel__fitter--search">
                        <p>Ngày nhận / trả phòng</p>
                        <input type="date" placeholder="Chọn ngày" class="hotel__search">
                    </div>
                    <div class="hotel__fitter--search roomMobile">
                        <p>Số khách & phòng</p>
                        <input type="search" placeholder="Chọn phòng" class="hotel__search">
                        <div class="hotel__fitter--room">
                            <div class="hotel__fitter--room__inner">
                                <div class="hotel__fitter--room__header">
                                    <span>Số khách & phòng</span>
                                </div>
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
                                    <section class="hotel__fitter--room__item">
                                        <b>Trẻ em</b>
                                        <div class="number-input">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                        </div>
                                    </section>
                                </div>
                                <div class="hotel__fitter--room__fotter">
                                    <button class="firstBtn">
                                        Xác nhận
                                      </button>
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
                <span>|</span>
                <div class="hotelMobile__fitter--location">
                    <ion-icon name="search-outline"></ion-icon>
                    Khám phá những điểm gần đây
                    <div class="hotelMobile__fitter--location__wrap">
                        <div class="hotel__fitter--location__header">
                            <span>Điểm đến</span>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel__fitter--blur"></div>
        <div class="hotel__fitter--blur__2"></div>
    </div>
    <div class="hotelMobile__fitter--iner">
        <div class="hotelMobile__header--filter">
            <div class="hotelMobile__header--filter__item location">
                <span>Khu vực</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item fitter">
                <span>Bộ lọc</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item range">
                <span>Sắp xếp</span>
                <ion-icon name="caret-down-outline"></ion-icon>
            </div>
            <div class="hotelMobile__header--filter__item">
                <span>Bản đồ</span>
                <ion-icon name="map-outline"></ion-icon>
            </div>
        </div>
    </div>
    <div class="hotel__backgroup--blur"></div>
    <div class="hotelMobile__fitter--box">
        <div class="hotelMobile__fitter--box__header">
            <ion-icon name="close-outline"></ion-icon>
            <span>Bộ lọc</span>
        </div>
        <div class="hotelMobile__fitter--box__body">
            <div class="hotelMobile__fitter--box__body--left">
                <a href="#hotelMobile__fitter--box__body--left__target" id="hotelMobile__fitter--box__body--left__target" class="hotelMobile__fitter--box__body--left__target">Địa danh</a>
                <a href="#hotelMobile__fitter--box__body--left__target--1" id="hotelMobile__fitter--box__body--left__target--1" class="hotelMobile__fitter--box__body--left__target">Khu vực</a>
            </div>
            <div class="hotelMobile__fitter--box__body--right">
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p class="hotelMobile__fitter--box__body--right__title">
                        Địa danh
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Biệt thự hằng nga</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Hồ Xuân Hương</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 1</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 2</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Biệt thự hằng nga</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Dinh 3</span>
                        </div>
                    </div>
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p class="hotelMobile__fitter--box__body--right__title">
                        Khu vực
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tho chau</span>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="hotelMobile__fitter--box__footer">
            <button>Xoá</button>
            <button class="firstBtn">Xem kết quả</button>
        </div>
    </div>
    <div class="hotelMobile__fitter--box__1">
        <div class="hotelMobile__fitter--box__header fitter">
            <ion-icon name="close-outline"></ion-icon>
            <span>Bộ lọc</span>
        </div>
        <div class="hotelMobile__fitter--box__body">
            <div class="hotelMobile__fitter--box__body--left">
                <a href="#hotelMobile__fitter--box__body--right__title--rate" class="hotelMobile__fitter--box__body--left__target">Đánh giá sao</a>
                <a href="#hotelMobile__fitter--box__body--right__title--point" class="hotelMobile__fitter--box__body--left__target">Điểm đánh giá</a>
                <a href="#hotelMobile__fitter--box__body--right__title--endow" class="hotelMobile__fitter--box__body--left__target">Ưu đãi & nổi bật</a>
                <a href="#hotelMobile__fitter--box__body--right__title--hotel" class="hotelMobile__fitter--box__body--left__target">Loại chỗ nghỉ</a>
                <a href="#hotelMobile__fitter--box__body--right__title--local" class="hotelMobile__fitter--box__body--left__target">Chuỗi/Thương hiệu</a>
                <a href="#hotelMobile__fitter--box__body--right__title--stay" class="hotelMobile__fitter--box__body--left__target">Chính sách chỗ lưu trú</a>
            </div>
            <div class="hotelMobile__fitter--box__body--right">
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--rate" class="hotelMobile__fitter--box__body--right__title">
                        Đánh giá sao
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>5</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>4</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p>3</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content hotel__left--star">
                            <p><2</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--point" class="hotelMobile__fitter--box__body--right__title">
                        Điểm đánh giá
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tuyệt vời(4.5+)</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Rất tốt(4+)</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Tốt(3.5+)</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--endow" class="hotelMobile__fitter--box__body--right__title">
                        Ưu đãi & nổi bật
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Trung tâm thành phố</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--hotel" class="hotelMobile__fitter--box__body--right__title">
                        Loại chỗ nghỉ
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Khách sạn</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Resort</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Homestay</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Nhà khách</span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <p id="hotelMobile__fitter--box__body--right__title--local" class="hotelMobile__fitter--box__body--right__title">
                        Chuỗi/Thương hiệu
                    </p>
                    <div class="hotelMobile__fitter--box--right__container">
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Swiss-BelResort</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>Mercure</span>
                        </div>
                        <div class="hotelMobile__fitter--box__body--right__content">
                            <span>OYO Rooms </span>
                        </div>
                    </div>
                    
                </div>
                <div class="hotelMobile__fitter--box__body--right__section">
                    <div id="hotelMobile__fitter--box__body--right__title--stay" class="hotelMobile__fitter--box__body--right__title">
                        Chính sách chỗ lưu trú
                        <p class="hotelMobile__fitter--box__body--right__title--text">Chính sách chỗ lưu trú</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Hồ bơi</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Đón và trả khách trạm tàu hoả/xe buýt, sân bay miễn phí</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Restaurant</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>CLB Nightclub</span>
                            </div>
                        </div>
                        <p class="hotelMobile__fitter--box__body--right__title--text">Tiện ích Phòng</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bồn tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Phòng tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Máy sấy</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bàn ủi & cầu là</span>
                            </div>
                        </div>
                        <p class="hotelMobile__fitter--box__body--right__title--text">Tiện nghi phòng</p>
                        <div class="hotelMobile__fitter--box--right__container">
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Có thể sử dụng xe lăn</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Phòng tắm</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Tiện nghi phòng trong nhà</span>
                            </div>
                            <div class="hotelMobile__fitter--box__body--right__content">
                                <span>Bồn cầu có tay vịn</span>
                            </div>
                        </div>
                    </div>

                    
                    
                </div>
                
            </div>
        </div>
        <div class="hotelMobile__fitter--box__footer">
            <button>Xoá</button>
            <button class="firstBtn">Xem kết quả</button>
        </div>
    </div>
    <div class="section">
        <div class="hotel__body">
            <div class="hotel__body--left">
                <div class="hotel__left--map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d243.94747235251486!2d108.44151669696855!3d11.963452602828777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1706154505980!5m2!1svi!2s" width="300" height="117" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="hotel__left--section">
                    <div class="hotel__left--item">
                        <p class="hotel__left--item__title">Đánh giá sao</p>
                        <div class="hotel__left--star">
                            <p>5</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p>4</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p>3</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                        <div class="hotel__left--star">
                            <p><2</p>
                            <ion-icon name="star" class="icon__star"></ion-icon>
                        </div>
                    </div>
                    <div class="hotel__left--item">
                        <p class="hotel__left--item__title">Điểm đánh giá</p>
                        <div class="hotel__left--star">
                            <p>4.5+</p>
                        </div>
                        <div class="hotel__left--star">
                            <p>4+</p>
                        </div>
                        <div class="hotel__left--star">
                            <p>3.5+</p>
                        </div>
                    </div>
                    <div class="hotel__left--content location">
                        <div class="hotel__left--content__title">
                            <p class="hotel__left--item__title">Khu Vực</p>
                        </div>
                        <div class="hotel__left--content__logo">
                            <ion-icon name="chevron-forward-sharp"></ion-icon>
                        </div>
                    </div>
                    <div class="hotel__left--content fitter">
                        <div class="hotel__left--content__title">
                            <p class="hotel__left--item__title">Chính sách chỗ lưu trú</p>
                        </div>
                        <div class="hotel__left--content__logo">
                            <ion-icon name="chevron-forward-sharp"></ion-icon>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="hotel__body--right">
                <div class="hotel__right--fitter">
                    <div class="hotel__right--fitter__tag">
                        <a href="#" id="hotel__right--fitter__title"  class="hotel__right--fitter__title">Đề cử </a>
                    </div>
                    <div class="hotel__right--fitter__tag">
                        <a href="#" id="hotel__right--fitter__title--1"  class="hotel__right--fitter__title">Độ phổ biến (Cao đến Thấp)</a>
                    </div>
                    <div class="hotel__right--fitter__tag">
                        <a href="#" id="hotel__right--fitter__title--2"  class="hotel__right--fitter__title">Điểm đánh giá (Cao đến Thấp)</a>
                    </div>
                    <div class="hotel__right--fitter__tag">
                        <a href="#" id="hotel__right--fitter__title--3" class="hotel__right--fitter__title">Khoảng cách (Gần đến Xa) </a>
                    </div>
                </div>
                        <?php get_template_part('templates/template-hotel/archive', 'hotel'); ?>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hotel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/secondDropdown.js"></script>
</body>
</html>