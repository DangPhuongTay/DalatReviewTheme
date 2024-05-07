const btnfiltermb = document.querySelector('.total__filter--btns');
const btnfilter = document.querySelector('.total__filter--btn');
const tourBody = document.querySelector('body');
// const primaryDropdownHidden = document.querySelector('.primary__dropdown--content');
const ListSlide = document.querySelector('.detailHotelMobile__slides--show__item');
const slides = document.querySelectorAll('.detailHotelMobile__slides--show__item img');
// ////////////////////////////////////


function primaryDropdown() {
  tourBody.classList.toggle('active');
};
function firstQuestion() {
  tourBody.classList.toggle('tourfirstQuestion');
  console.log(1)
};


function btnReviewTour(){
  tourBody.classList.add('listTourReview')
  tourBody.classList.add('tourBlur')  
}
btnfilter.addEventListener('click', ()=>{
  tourBody.classList.toggle('filterBox');
  console.log(1);
})
btnfiltermb.addEventListener('click', ()=>{
  tourBody.classList.toggle('filterBox');
  console.log(1);
})

// //////////////////////////////////

closeDetailHotelRate.addEventListener('click', ()=>{
  detailHotelBody.classList.remove('listDetailHotelRate')
  detailHotelBody.classList.remove('listDetailHotelRate2')
  detailHotelBody.classList.remove('listDetailHotelRate3')
})
closeDetailHotelBlur.addEventListener('click', ()=>{
  detailHotelBody.classList.remove('listDetailHotelRate')
  detailHotelBody.classList.remove('listDetailHotelRate2')
  detailHotelBody.classList.remove('listDetailHotelRate3')
  detailHotelBody.classList.remove('listDetailHotelPrice')
  detailHotelBody.classList.remove('listDetailHotelPrice2')
  detailHotelBody.classList.remove('listDetailHotelSlides')
  detailHotelBody.classList.remove('listDetailHotelSevice')
  detailHotelBody.classList.remove('listDetailHotelSevice2')
  detailHotelBody.classList.remove('MapCarForm')
  detailHotelBody.classList.remove('detailHotelBlur')
})



let touchStartX = 0;
let touchEndX = 0;
const length = slides.length;

const handleTouchStart = (event) => {
  touchStartX = event.touches[0].clientX;
};

const handleTouchMove = (event) => {
  touchEndX = event.touches[0].clientX;
};

const handleTouchEnd = () => {
  const deltaX = touchEndX - touchStartX;
  
  const threshold = 50; 
  
  if (Math.abs(deltaX) > threshold) {
      if (deltaX > 0) {
          current = (current === 0) ? length - 1 : current - 1;
      }
      else {
          current = (current === length - 1) ? 0 : current + 1;
      }
      
      updateSlider();
  }
};

ListSlide.addEventListener('touchstart', handleTouchStart);
ListSlide.addEventListener('touchmove', handleTouchMove);
ListSlide.addEventListener('touchend', handleTouchEnd);

const updateSlider = () => {
  let width = slides[0].offsetWidth;
  ListSlide.style.transform = `translateX(${width * -current}px)`; // Move by the width of the viewport
};

updateSlider();

const changeSlideAutomatically = () => {
  current = (current === length - 1) ? 0 : current + 1;
  
  updateSlider();
};

setInterval(changeSlideAutomatically, 2000);


if (window.location.hash === "#") {
  // Chuyển hướng trang về trang mặc định, chẳng hạn "/"
  window.location.href = "/";
}
else if (document.referrer !== "") {
  // Chuyển hướng trang hiện tại về trang nguồn
  window.location.href = document.referrer;
} else {
  // Nếu không có trang nguồn, thực hiện hành động khác, chẳng hạn chuyển về trang chính
  window.location.href = "/";
}