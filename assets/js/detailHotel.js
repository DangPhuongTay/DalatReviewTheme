const btnDetailHotelSevice = document.querySelector('.detailHotelMobile__info--summary.sevice');
const btnDetailHotelSevice2 = document.querySelector('.detailHotel__list--footer.sevice');
const btnDetailHotelTypeRoom = document.querySelector('.detail__list--body__select--rom');
// const closeDetailHotelPrice = document.querySelector('.detailHotel__list--body__list--wrapper__icon ion-icon');
const closeDetailHotelRate = document.querySelector('.detailHotel__list--body__reviews--wrap__icon ion-icon');
const closeDetailHotelBlur = document.querySelector('.detailHotel__backgroup--blur');
const ListSlide = document.querySelector('.detailHotelMobile__slides--show__item');
const slides = document.querySelectorAll('.detailHotelMobile__slides--show__item img');

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
function btnDetailHotelSlides() {
    detailHotelBody.classList.add('listDetailHotelSlides');
    detailHotelBody.classList.add('detailHotelBlur');
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
