

const tourBody = document.querySelector('body');
// const primaryDropdownHidden = document.querySelector('.primary__dropdown--content');

function primaryDropdown() {
  tourBody.classList.toggle('active');
};
function firstQuestion() {
  tourBody.classList.toggle('tourfirstQuestion');
  console.log(1)
};
$(".firstQuestion__content--list__item").click(function(e) {
  e.stopPropagation();
});

function btnReviewTour(){
  tourBody.classList.add('listTourReview')
  tourBody.classList.add('tourBlur')  
}
