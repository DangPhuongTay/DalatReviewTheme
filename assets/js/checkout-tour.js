const closeCheckoutFormBtn1 = document.querySelector('#close__checkouttour--btn1');
const closeCheckoutFormBtn2 = document.querySelector('#close__checkouttour--btn2');
const closeCheckoutFormBtn3 = document.querySelector('#close__checkouttour--btn3');
const openCheckoutFormBtn = document.querySelector('#open__checkouttour--btn1');
const checkOutTourBody = document.querySelector('body');

openCheckoutFormBtn.addEventListener('click',()=>{
    checkOutTourBody.classList.add('CheckoutForm');
})
// closeCheckoutFormBtn.addEventListener('click',()=>{
//     checkOutTourBody.classList.remove('CheckoutForm');
// })
window.onload=function(){
    closeCheckoutFormBtn1.addEventListener('click',closeCheckoutForm);
    closeCheckoutFormBtn2.addEventListener('click',closeCheckoutForm);
    closeCheckoutFormBtn3.addEventListener('click',closeCheckoutForm);
}

function closeCheckoutForm() {
    checkOutTourBody.classList.remove('CheckoutForm');
}