const btnDetailLiveShowPoppup = document.querySelector('.detail__liveshow--content__right--item');
const closeDetailLiveShowBlur = document.querySelector('.detail__liveshow--blur ');
const closeDetailClosePopup = document.querySelector('.popup__close ion-icon');

const detailDetailLiveShowBody = document.querySelector('body');


btnDetailLiveShowPoppup.addEventListener('click', ()=>{
    detailDetailLiveShowBody.classList.add('listDetailLiveShowPopup')
    detailDetailLiveShowBody.classList.add('detailLiveShowBlur')  
})
closeDetailClosePopup.addEventListener('click', ()=>{
    detailDetailLiveShowBody.classList.remove('listDetailLiveShowPopup')
})
closeDetailLiveShowBlur.addEventListener('click', ()=>{
    detailDetailLiveShowBody.classList.remove('listDetailLiveShowPopup')
    detailDetailLiveShowBody.classList.remove('detailLiveShowBlur')  
})