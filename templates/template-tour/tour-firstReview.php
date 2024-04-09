<?php global $product; ?>
<?php global $rating_html; ?>

<div class="firstReview">
    <div class="firstReview__header">
        <h2 class="tour__Title">
            Mọi người nói gì về Tour & Trải nghiệm ở Đà Lạt
        </h2>
    </div>
    <div class="firstReview__card">
        <div class="firstReview__card">
            <!-- <div class="firstReview__card--item ">
                <div class="scoreStar">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <div class="firstReview__for">
                    <span>Đánh giá cho: </span>
                    <a href="/detail_tour">Đi Xe Trượt Thác Datanla New Alpine
                        Tại
                        Đà Lạt</a>
                </div>
                <div class="firstReview__time">
                    <span>Người dùng</span>
                    Đăng 229 ngày trước
                </div>
                <div class="firstReview__content">
                    Đặt hàng qua Đà Lạt Review tiết kiệm được chi
                    phí vì có chương trình giảm giá. mọi người nhớ
                    đổi ra vé giấy rồi hãy vào xếp hàng để lên xe
                    trượt nhé.
                </div> -->
                <div class="firstReview__card--item">
                    <?php
                    $args = array('post_type' => $product);
                    $comments = get_comments($args);
                    wp_list_comments(array('callback' => 'woocommerce_comments'), $comments);
                    ?>
                </div>
        </div>
        <!-- <div class="firstReview__card--item ">
                            <div class="scoreStar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="firstReview__for">
                                <span>Đánh giá cho: </span>
                                <a href="detail-tour">Trải Nghiệm Đu Dây High Rope Course
                                    Đà Lạt</a>
                            </div>
                            <div class="firstReview__time">
                                <span>Người dùng</span>
                                Đăng 20 ngày trước
                            </div>
                            <div class="firstReview__content">
                                Đường trượt mới rất đã, cảm giác an toàn hơn.
                                Trải nghiệm high rope cũng rất tuyệt.
                            </div>
                        </div> -->
    </div>
    <!-- nextBtn -->
    <!-- <div class="nextBtn">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div> -->
</div>

</div>