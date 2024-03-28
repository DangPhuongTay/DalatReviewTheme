const openMapCarFormBtn = document.querySelector('.detail__car--info__map');
const closeInfoCarFormBlur = document.querySelector('.header__background--blur__fullview');
const closeInfoCarFormBtn = document.querySelector('.detail__car--info__header--icon');
const detailCarBody = document.querySelector('body');


function openInfoCarFormBtn(){
    detailCarBody.classList.add('InfoCarForm');
}
openMapCarFormBtn.addEventListener('click',()=>{
    detailCarBody.classList.add('MapCarForm');
})
closeInfoCarFormBtn.addEventListener('click',()=>{
    detailCarBody.classList.remove('InfoCarForm');
})
function closeMapCarFormBtn(){
    detailCarBody.classList.remove('MapCarForm');
}

closeInfoCarFormBlur.addEventListener('click',()=>{
    detailCarBody.classList.remove('InfoCarForm');
    detailCarBody.classList.remove('MapCarForm');
})
function openMapsCarFormBtn(){
    detailCarBody.classList.add('MapCarForm');
}