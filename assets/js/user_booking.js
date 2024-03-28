

const ListImage = document.querySelector('.user__booking--popular__slide--banner');
const imgs = document.querySelectorAll('.user__booking--popular__slide--items');
const btnLeft = document.querySelector('.user__left--btn');
const btnRight = document.querySelector('.user__right--btn');
const lenght = imgs.length;
let current = 0;

const userBookingBody = document.querySelector('body');

function btnUserBookingDropDown(){
    userBookingBody.classList.toggle('listUserBookingDropDown')
}


const handleChangeSlide = () =>{
    if(current == lenght - 1){
        current = 0;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(0px)`;
    }else{
        current ++;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(${width * -1 * current}px)`;
    }
}


btnRight.addEventListener('click',()=>{
    handleChangeSlide();
})

btnLeft.addEventListener('click',()=>{
    if(current == 0){
        current = lenght - 1;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(${width * -1 * current}px)`;
    }else{
        current --;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(${width * -1 * current}px)`;
    }
})
