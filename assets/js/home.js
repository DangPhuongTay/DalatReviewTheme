const ListImage = document.querySelector('.home__slider--list__images');

const imgs = document.querySelectorAll('.home__slider--item__image p');

const btnLeft = document.querySelector('.home__slider--btn__left');
const btnRight = document.querySelector('.home__slider--btn__right');
const lenght = imgs.length;

let current = 0;


const handleChangeSlide = () =>{
    if(current == lenght - 3){
        current = 0;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(0px)`;
    }else{
        current ++;
        let width = imgs[0].offsetWidth;
        ListImage.style.transform = `translateX(${width * -1 * current}px)`;
    }
}

setInterval(handleChangeSlide,4000);

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




document.addEventListener('DOMContentLoaded', function() {
    const list_banner = document.querySelector('.home__sale--banner__container--list__item--wrapper');
    const listItems = document.querySelectorAll('.home__sale--banner__container--list__item');
    let currentIndex = 0;
    const itemWidth = listItems[0].offsetWidth;

    function moveSlideLeft() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = listItems.length - 1;
        }
        const newPosition = -currentIndex * itemWidth;
        list_banner.style.transition = 'transform 0.5s ease'; 
        list_banner.style.transform = `translateX(${newPosition}px)`;
    }

    function moveSlideRight() {
        currentIndex++;
        if (currentIndex >= listItems.length) {
            currentIndex = 0;
        }
        const newPosition = -currentIndex * itemWidth;
        list_banner.style.transition = 'transform 0.5s ease'; 
        list_banner.style.transform = `translateX(${newPosition}px)`;
    }

    document.getElementById('left_btn').addEventListener('click', moveSlideLeft);
    document.getElementById('right_btn').addEventListener('click', moveSlideRight);
});
