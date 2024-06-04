const btnLeft = document.querySelector('.blog__container--new__header--leftBtn');
const btnRight = document.querySelector('.blog__container--new__header--rightBtn');
const slide = document.querySelector('.blog__container--new__header--slide');
const imgs = document.querySelectorAll('.blog__container--new__header--topic');
let current = 0;
const length = imgs.length;

btnLeft.addEventListener('click', () => {
    if (current === 0) {
        current = length - 1;
    } else {
        current--;
    }
    let width = imgs[0].offsetWidth;
    slide.style.transform = `translateX(${width * -1 * current}px)`;
    if (current < length - 1) {
        btnRight.style.display = 'block';
    }
});

btnRight.addEventListener('click', () => {
    if (current === length - 1) {
        current = 0;
    } else {
        current++;
    }
    let width = imgs[0].offsetWidth;
    slide.style.transform = `translateX(${width * -1 * current}px)`;
    if (current === length - 1) {
        btnRight.style.display = 'none';
    }
    btnLeft.style.left = '3px'; // Khi click vào nút right, di chuyển nút left về vị trí ban đầu
});