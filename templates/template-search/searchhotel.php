<form action="<?php echo home_url(); ?>" id="search-form" method="get">
<div class="hotel__fitter">
            <div class="hotel__fitter--wrapper">
                <div class="hotel__fitter--search">
                    <p>Địa điểm</p>
                    <input class="hotel__search" type="text" name="s" id="s" value="Hotel" onblur="if(this.value=='')this.value='Hotel'"
                    onfocus="if(this.value=='Hotel')this.value=''" />
                </div>
                <div class="hotel__fitter--search">
                    <p>Ngày nhận / trả phòng</p>
                    <input type="date" placeholder="Chọn ngày" class="hotel__search">
                </div>
                <div class="hotel__fitter--search room">
                    <p>Số khách & phòng</p>
                    <input type="search" placeholder="Chọn phòng" class="hotel__search">
                    <!-- <div class="hotel__fitter--room">
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
                    </div> -->
                </div>
                <a href="#">
                    <button type="submit" class="hotel__fitter--btn firstBtn">
                        Tìm kiếm
                    </button>
                </a>
            </div>
</form>