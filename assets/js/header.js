const headerBody = document.querySelector('body'); 
const btnLogin1 = document.querySelector('.login1');
const btnLogin2 = document.querySelector('.login2');
const btnLogout = document.querySelector('.logout');
const mobileMenuBtn = document.querySelector('.home__banner--mobile__bottom');
const loginChecker = document.querySelector('.header__top--right__item--checker');
const hamburgerBtn = document.querySelector('.header__top--left__hamburger');
const btnCloseLoginSignForm = document.querySelector('.login__signup--box__close');
const btnOpenLoginSignFormPc1 = document.querySelector('.open__login--signup__form--1');
const btnOpenLoginSignFormPc2 = document.querySelector('.open__login--signup__form--2');
const btnOpenLoginSignForm = document.querySelector('.open__login--signup__form ion-icon');
const btnTransEmailLoginSignForm = document.querySelector('#login__signup--box__container--main__btn--email');
const btnTransNumberLoginSignForm = document.querySelector('#login__signup--box__container--main__btn--numberphone');

// window.onload=function(){
//     mobileMenuBtn.addEventListener('click',mobileMenu);
// }

function mobileMenu() {
    headerBody.classList.toggle('active');
}
function openChat() {
    headerBody.classList.toggle('chatBox');
}
function closeChat() {
    headerBody.classList.remove('chatBox');
}
// mobileMenuBtn.addEventListener('click',()=>{
//     headerBody.classList.toggle('active');
// })
hamburgerBtn.addEventListener('click',()=>{
    headerBody.classList.toggle('active');
})

btnLogin2.addEventListener('click',()=>{
    headerBody.classList.add('checker');
    headerBody.classList.remove('LoginSignUpForm');
})
btnLogin1.addEventListener('click',()=>{
    headerBody.classList.add('checker');
    headerBody.classList.remove('LoginSignUpForm');
})
// btnLogout.addEventListener('click',()=>{
//     headerBody.classList.remove('checker');
//     headerBody.classList.remove('LoginSignUpForm');
// })
btnOpenLoginSignForm.addEventListener('click',()=>{
    headerBody.classList.add('LoginSignUpForm');
})
// btnOpenLoginSignFormPc1.addEventListener('click',()=>{
//     headerBody.classList.add('LoginSignUpForm');
// })
// btnOpenLoginSignFormPc2.addEventListener('click',()=>{
//     headerBody.classList.add('LoginSignUpForm');
// })
// btnCloseLoginSignForm.addEventListener('click',()=>{
//     headerBody.classList.remove('LoginSignUpForm');
// })
// btnTransEmailLoginSignForm.addEventListener('click',()=>{
//     headerBody.classList.add('TransLoginSignForm');
// })
// btnTransNumberLoginSignForm.addEventListener('click',()=>{
//     headerBody.classList.remove('TransLoginSignForm');
// })

