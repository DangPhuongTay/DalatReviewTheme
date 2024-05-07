let slideIndex = parseInt(location.hash.slice(1)) || 1;

const imghotels = document.querySelectorAll('.image_empty .mySlides');

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  updateHash();
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(n);
  slideIndex = n;
  updateHash();
}

function updateHash() {
  location.hash = '#' + slideIndex;
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
  window.location.replace(initialProductPage);
  img = 0;
  headerBody.classList.remove('slider__detail--tour');
  headerBody.classList.remove('listDetailHotelSlides');
  headerBody.classList.remove('detailHotelBlur');
}
function showImage(index) {
  slideIndex = index;
  showSlides(slideIndex);
  updateHash();
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
