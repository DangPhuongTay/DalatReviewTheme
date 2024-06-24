<?php
/**
 * Template Name: TemplatePlane
 * Display Only Plane template
 * 
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 * 
 */
get_header(); ?>
     <div class="plane-form">
        <div class="plane-search-form">
            <!-- banner places  -->
            <div class="plane-search-form-places">
                <div class="plane-place">
                    <label class="plane-place-title" for="departure">Chọn điểm đi</label>
                    <div class="plane-place-input">
                        <span class="material-symbols-outlined plane-place-icon">
                            flight_takeoff
                        </span>
                        <div class="plane-place-input-wrapper">
                            <input class="plane-input" id="departure" name="departure" placeholder="Chọn điểm đi">
                        </div>
                    </div>
                </div>

                <div class="plane-place">
                    <label class="plane-place-title" for="destination">Chọn điểm đến</label>
                    <div class="plane-place-input">
                        <span class="material-symbols-outlined plane-place-icon">
                            flight_land
                        </span>
                        <div class="plane-place-input-wrapper">
                            <input class="plane-input" id="destination" name="destination" placeholder="Chọn điểm đến">
                        </div>
                    </div>
                </div>
            </div>

            <!-- banner airline -->
            <div class="plane-search-form-airline">
                <div class="plane-airline">
                    <!-- title -->
                    <label class="plane-airline-title">Chọn hãng:</label>

                    <!-- view selection -->
                    <div class="plane-airline-select">Chọn hãng</div>
                    <div class="plane-options">
                        <div class="plane-option" data-value="option1">
                            <span class="plane-option-img"><img src="VietJet_Air-Logo.png" alt="" srcset=""></span>
                            <div class="plane-option-name">
                                Vietjet
                            </div>
                        </div>
                        <div class="plane-option" data-value="option2">
                            <span class="plane-option-img"><img src="logoVNair.png" alt="" srcset=""></span>
                            <div class="plane-option-name">
                                Vietnam Airlines
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- banner date time -->
            <div class="plane-search-form-date">
                <div class="plane-date">
                    <div class="plane-date-title">
                        <label class="">Thời gian</label>
                        <label class="">
                            <span>Khứ hồi</span>
                            <input type="checkbox" id="return" name="return">
                        </label>
                    </div>
                    <div class="plane-date-input">
                        <ion-icon name="calendar-number-outline"></ion-icon>
                        <input class="plane-input" type="text" id="date" name="date" value="20/06/2024">
                    </div>
                </div>
            </div>

            <!-- banner customer -->
            <div class="plane-search-form-customer">
                <label class="plane-customer-title" for="passengers">Số khách, hạng ghế</label>
                <div class="plane-customer-input">
                    <ion-icon name="people-outline"></ion-icon>
                    <span class="plane-input" type="text" id="passengers" name="passengers" value="">
                        1 người lớn
                    </span>
                </div>
                <!-- banner customer 2 -->
                <div class="plane-search-form-customer-2 shadow">
                    <div class="plane-customer-top-wrapper">
                        <label class="plane-customer-title" for="passengers">Số khách, hạng ghế</label>
                        <div class="plane-customer-input plane-selection">
                            <ion-icon name="people-outline"></ion-icon>
                            <div class="plane-input-selected" id="passenger">Phổ thông</div>
                        </div>
                    </div>

                    <div class="plane-customer-bottom-wrapper">
                        <div class="plane-section">
                            <span class="plane-section-title">Hạng ghế</span>
                            <div class="plane-seat-classes">
                                <button class="plane-seat-class active">Phổ thông</button>
                                <button class="plane-seat-class">Phổ thông đặc biệt</button>
                                <button class="plane-seat-class">Thương gia</button>
                                <button class="plane-seat-class">Hạng nhất</button>
                            </div>
                        </div>

                        <div class="plane-section">
                            <span class="plane-section-title">Hành khách</span>
                            <div class="plane-passenger">
                                <label>Người lớn<br>≥ 12 tuổi</label>
                                <div class="counter">
                                    <button class="minus">-</button>
                                    <span class="count">1</span>
                                    <button class="plus">+</button>
                                </div>
                            </div>
                            <div class="plane-passenger">
                                <label>Trẻ em<br>2-11 tuổi</label>
                                <div class="counter">
                                    <button class="minus">-</button>
                                    <span class="count">0</span>
                                    <button class="plus">+</button>
                                </div>
                            </div>
                            <div class="plane-passenger">
                                <label>Em bé<br>≤ 24 tháng</label>
                                <div class="counter">
                                    <button class="minus">-</button>
                                    <span class="count">0</span>
                                    <button class="plus">+</button>
                                </div>
                            </div>
                        </div>
                        <button class="plane-btn-complete">Hoàn thành</button>

                    </div>

                  
                </div>
            </div>

            <!-- banner submit button -->
            <div class="plane-search-form-button">
                <button type="submit" class="plane-search-button">
                    <span>
                        <ion-icon name="search-outline"></ion-icon>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="flight-card">
    <?php get_template_part('templates/template-plane/archive', 'plane'); ?>

    </div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plane.js"></script>

<?php get_footer(); ?>