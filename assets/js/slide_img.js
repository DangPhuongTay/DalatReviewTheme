
const btnimg1 = document.querySelector('.img1');
const btnimg2 = document.querySelector('.img2');

let img = location.hash.slice(1);
let slideIndex = img;


// btnimg1.addEventListener('click', ()=>{
//   slideIndex = 1;
//   location.hash = '#'+slideIndex;
//   img = slideIndex;
//   detailHotelBody.classList.add('listDetailHotelSlides')
//   detailHotelBody.classList.add('detailHotelBlur')
//   console.log(slideIndex);
//   showSlides(slideIndex);
// })
// btnimg2.addEventListener('click', ()=>{
//   slideIndex = 2;
//   location.hash = '#'+slideIndex;
//   img = slideIndex;
//   detailHotelBody.classList.add('listDetailHotelSlides')
//   detailHotelBody.classList.add('detailHotelBlur')
//   console.log(slideIndex);
//   showSlides(slideIndex);
// })
// btnimg3.addEventListener('click', ()=>{
//   slideIndex = 3;
//   location.hash = '#'+slideIndex;
//   img = slideIndex;
//   detailHotelBody.classList.add('listDetailHotelSlides')
//   detailHotelBody.classList.add('detailHotelBlur')
//   console.log(slideIndex);
//   showSlides(slideIndex);
// })
// btnimg4.addEventListener('click', ()=>{
//   slideIndex = 4;
//   location.hash = '#'+slideIndex;
//   img = slideIndex;
//   detailHotelBody.classList.add('listDetailHotelSlides')
//   detailHotelBody.classList.add('detailHotelBlur')
//   console.log(slideIndex);
//   showSlides(slideIndex);
// })
// btnimg5.addEventListener('click', ()=>{
//   slideIndex = 5;
//   location.hash = '#'+slideIndex;
//   img = slideIndex;
//   detailHotelBody.classList.add('listDetailHotelSlides')
//   detailHotelBody.classList.add('detailHotelBlur')
//   console.log(slideIndex);
//   showSlides(slideIndex);
// })

const imghotels = document.querySelectorAll('.image_empty .mySlides');

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  img++
  if(img > imghotels.length){
    img = 1;
    location.hash = '#'+img;
  }
  location.hash = '#'+img;
  console.log(img);
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
  // dots[slideIndex-1].className += " active";
  // captionText.innerHTML = dots[slideIndex-1].alt;
}
function closeSlides() {
  location.hash = '';
  img = 0;
  headerBody.classList.remove('slider__detail--tour');
  headerBody.classList.remove('listDetailHotelSlides');
}
