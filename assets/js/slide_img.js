let slideIndex = parseInt(location.hash.slice(1)) || 1;

const imghotels = document.querySelectorAll('.image_empty .mySlides');
var imageToHide = document.querySelector('.image_empty'); // Thay 'imageId' bằng id của ảnh hoặc phần tử bạn muốn ẩn
imageToHide.style.padding = '0px';
// Xử lý sự kiện khi lướt trên thiết bị di động
window.addEventListener('touchmove', function(event) {
    // Kiểm tra nếu người dùng đang lướt xuống
    var distant = 120;
   var pixel =  event.touches[0].clientY - startY;
        console.log(pixel);
        imageToHide.style.marginTop = (pixel/2)+'px';
    if((pixel/2) > distant  || (pixel/2) < - distant){
      closeSlides();
    }

});


// Lưu vị trí ban đầu của ngón tay
var startY;
window.addEventListener('touchstart', function(event) {
    // Lấy vị trí của ngón tay khi bắt đầu lướt
    startY = event.touches[0].clientY;
});
window.addEventListener('touchend', function(event) {
  // Lấy vị trí của ngón tay khi bắt đầu lướt
  imageToHide.style.margin = '0px';
  
});
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex-=n);

}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

function closeSlides() {
  headerBody.classList.remove('slider__detail--tour');
  headerBody.classList.remove('listDetailHotelSlides');
  headerBody.classList.remove('detailHotelBlur');
}
function showImage(index) {
  slideIndex = index;
  showSlides(slideIndex);
}

const tourImages = document.querySelectorAll('.detail__tour--img .detail__tour--slide');
tourImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    showImage(index + 1);
  });
});

if (location.hash !== "") {
  window.location.href = "/";
}
window.addEventListener('popstate', function(event) {
  if (location.hash !== "") {
    window.history.back(); 
  }
});
