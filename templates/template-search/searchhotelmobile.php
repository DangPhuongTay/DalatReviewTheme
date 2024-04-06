<form action="<?php echo home_url(); ?>" id="search-form" method="get">
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
                            <input class="hotel__search" name="s" id="s" value="hotel" onblur="if(this.value=='')this.value='hotel'"
                            onfocus="if(this.value=='hotel')this.value=''" />
                            <input type="hidden" value="submit" />
                            <!-- <div class="hotel__fitter--location">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
</form>