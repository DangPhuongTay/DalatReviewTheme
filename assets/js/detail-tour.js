const slider_detail_tour_open = document.querySelector('.detail__tour--img');
const mobile_detail_tour_lost_option = document.querySelector('.detail__tour--content__left--option__item--info__close');
const mobile_detail_tour_lost_sale = document.querySelector('.detail__tour--content__left--sale__info--close');
const sale_detail_tour_open = document.querySelector('.detail__tour--content__left--sale');
const checkout_detail_tour_open_mb = document.querySelector('.detail__tour--content__right--btn');
const checkout_detail_tour_open_pc = document.querySelector('.detail__tour--content__right--btn__pc');
const slider_detail_tour_close = document.querySelector('.header__background--blur__fullview');
const option_detail_tour_open = document.querySelector('.detail__tour--content__left--option__list');

var initialProductPage = window.location.href;

document.addEventListener("DOMContentLoaded", function() {

    alert("URL của trang hiện tại: " + currentURL);
    // window.onpopstate = function(event) {
    //     // Kiểm tra xem trang hiện tại có phải là các trang sản phẩm đã xem trước đó không
    //     if (window.location.href !== initialProductPage) {
    //         // Nếu không phải, chuyển hướng về trang sản phẩm ban đầu
    //         window.location.href = initialProductPage;
    //     }
    // };
});




// slider_detail_tour_open.addEventListener('click',()=>{
//     headerBody.classList.add('slider__detail--tour');
//   })
option_detail_tour_open.addEventListener('click',()=>{
    headerBody.classList.add('option__detail--tour');
})
sale_detail_tour_open.addEventListener('click',()=>{
    headerBody.classList.add('sale__detail--tour');
})
checkout_detail_tour_open_mb.addEventListener('click',()=>{
    headerBody.classList.add('option__detail--tour');
})
checkout_detail_tour_open_pc.addEventListener('click',()=>{
    headerBody.classList.add('option__detail--tour');
})
slider_detail_tour_close.addEventListener('click',()=>{
    headerBody.classList.remove('slider__detail--tour');
    headerBody.classList.remove('option__detail--tour');
    headerBody.classList.remove('sale__detail--tour');
})
mobile_detail_tour_lost_option.addEventListener('click',()=>{
    headerBody.classList.remove('option__detail--tour');
})
mobile_detail_tour_lost_sale.addEventListener('click',()=>{
    headerBody.classList.remove('sale__detail--tour');
})


