const urlindex = window.location.href;
let img = location.hash.slice(1);
let slideIndex = img;
const imghotels = document.querySelectorAll('.image_empty .mySlides');
document.addEventListener('keydown', function(event) {
  if (event.key === "Escape" || event.key === "Esc") {

    closeSlides();
}

  else if (event.key === "ArrowLeft") {
     
    plusSlides(-1);
  }

  else if (event.key === "ArrowRight") {
   
    plusSlides(+1);
  }
});
document.addEventListener("DOMContentLoaded", function() {
  // Lấy URL của trang hiển thị sản phẩm ban đầu
  var initialProductPage = urlindex ;

  // Lắng nghe sự kiện khi nhấn nút trở về trên trình duyệt
  window.onpopstate = function(event) {
    // Kiểm tra xem trang hiện tại có phải là các trang sản phẩm đã xem trước đó không
    if (urlindex !== initialProductPage) {
      // Nếu không phải, chuyển hướng về trang sản phẩm ban đầu
      urlindex = initialProductPage;
    }
  };
});
// Chọn ảnh hoặc phần tử muốn ẩn khi lướt trên thiết bị di động
var imageToHide = document.querySelector('.image_empty'); // Thay 'imageId' bằng id của ảnh hoặc phần tử bạn muốn ẩn
imageToHide.style.padding = '0px';
// Xử lý sự kiện khi lướt trên thiết bị di động
window.addEventListener('touchmove', function(event) {
    // Kiểm tra nếu người dùng đang lướt xuống
    var distant = 500;
   var pixel =  event.touches[0].clientY - startY 
        console.log(pixel);
        imageToHide.style.marginTop = pixel+'px';
    if(pixel > distant  || pixel < -distant){
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
  img++
  if(img > imghotels.length){
    img = 1;
    location.hash = '#'+img;
  }
  location.hash = '#'+img;
}

// Thumbnail image controls
function currentSlide(n) {
  console.log(slideIndex)
    showSlides(slideIndex - n);
    if(slideIndex < 1){
      showSlides(slideIndex);
      slideIndex = imghotels.length;
      location.hash = '#'+slideIndex;
      console.log(slideIndex)
    }else{
      location.hash = '#'+slideIndex;
      showSlides(slideIndex - n);
      slideIndex= slideIndex - n;
      console.log(slideIndex)
    }
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";
}

function closeSlides() {
  location.hash = '';
  img = 0;
  headerBody.classList.remove('slider__detail--tour');
  headerBody.classList.remove('listDetailHotelSlides');
  headerBody.classList.remove('detailHotelBlur');
}

function showImage(index) {
  slideIndex = index;
  location.hash = '#' + slideIndex;
  img = slideIndex;
  detailHotelBody.classList.add('listDetailHotelSlides');
  detailHotelBody.classList.add('detailHotelBlur');
  console.log(slideIndex);
  showSlides(slideIndex);
}

const tourImages = document.querySelectorAll('.detail__tour--img .detail__tour--slide');
tourImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    showImage(index+1); 
  });
});
