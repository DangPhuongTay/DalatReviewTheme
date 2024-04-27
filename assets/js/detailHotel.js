const btnDetailHotelSevice = document.querySelector('.detailHotelMobile__info--summary.sevice');
const btnDetailHotelSevice2 = document.querySelector('.detailHotel__list--footer.sevice');
const btnDetailHotelTypeRoom = document.querySelector('.detail__list--body__select--rom');
// const closeDetailHotelPrice = document.querySelector('.detailHotel__list--body__list--wrapper__icon ion-icon');
const closeDetailHotelRate = document.querySelector('.detailHotel__list--body__reviews--wrap__icon ion-icon');
const closeDetailHotelBlur = document.querySelector('.detailHotel__backgroup--blur');
const ListSlide = document.querySelector('.detailHotelMobile__slides--show__item');
const slides = document.querySelectorAll('.detailHotelMobile__slides--show__item img');
const lenght = slides.length;
let current = 0;

const detailHotelBody = document.querySelector('body');

function btnDetailHotelRate(){
    detailHotelBody.classList.add('listDetailHotelRate')
    detailHotelBody.classList.add('detailHotelBlur')  
}
function btnDetailHotelPrice(){
    detailHotelBody.classList.add('listDetailHotelPrice')
    detailHotelBody.classList.add('detailHotelBlur')
}
function btnDetailHotelPrice2(){
    detailHotelBody.classList.add('listDetailHotelPrice2')
    detailHotelBody.classList.add('detailHotelBlur')
}
function btnDetailHotelSlides(){
    detailHotelBody.classList.add('listDetailHotelSlides')
    detailHotelBody.classList.add('detailHotelBlur')
}
btnDetailHotelSevice.addEventListener('click', ()=>{
    detailHotelBody.classList.add('listDetailHotelSevice')
    detailHotelBody.classList.add('detailHotelBlur')
})
btnDetailHotelSevice2.addEventListener('click', ()=>{
    detailHotelBody.classList.add('listDetailHotelSevice2')
    detailHotelBody.classList.add('detailHotelBlur')
})
function btnDetailHotelRoom(){
    detailHotelBody.classList.toggle('listDetailHotelRoom')
}
btnDetailHotelTypeRoom.addEventListener('click', ()=>{
    detailHotelBody.classList.toggle('listDetailHotelTypeRoom')
})
// closeDetailHotelPrice.addEventListener('click', ()=>{
//   detailHotelBody.classList.remove('listDetailHotelPrice')
//   detailHotelBody.classList.remove('listDetailHotelPrice2')

// })
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




  const handleChangeSlide = () =>{
    if(current == lenght - 1){
        current = 0;
        let width = slides[0].offsetWidth;
        ListSlide.style.transform = `translateX(0px)`;
    }else{
        current ++;
        let width = slides[0].offsetWidth;
        ListSlide.style.transform = `translateX(${width * -1 * current}px)`;
    }
}

setInterval(handleChangeSlide,2000);
