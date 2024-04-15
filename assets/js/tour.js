const btnfiltermb = document.querySelector('.total__filter--btns');
const btnfilter = document.querySelector('.total__filter--btn');
const tourBody = document.querySelector('body');
// const primaryDropdownHidden = document.querySelector('.primary__dropdown--content');

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