const btnHotelLocation = document.querySelector('.hotel__left--content.location');
const btnHotelFitter = document.querySelector('.hotel__left--content.fitter');
const btnHotelMobileLocation = document.querySelector('.hotelMobile__header--filter__item.location');
const btnHotelMobileFitter = document.querySelector('.hotelMobile__header--filter__item.fitter');
const btnHotelMobileRange = document.querySelector('.hotelMobile__header--filter__item.range');
const closeHotelMobileLocation = document.querySelector('.hotelMobile__fitter--box__header ion-icon');
const closeHotelMobileFitter = document.querySelector('.hotelMobile__fitter--box__header.fitter ion-icon');
const closeHotelBlur = document.querySelector('.hotel__backgroup--blur');



const hotelBody = document.querySelector('body');
// btnHotelLocation.addEventListener('click', ()=>{
//     hotelBody.classList.add('listHotelMobileLocation')
//     hotelBody.classList.add('hotelBlur')
    
// })
// btnHotelFitter.addEventListener('click', ()=>{
//     hotelBody.classList.add('listHotelMobileFitter')
//     hotelBody.classList.add('hotelBlur')
// })

// btnHotelMobileLocation.addEventListener('click', ()=>{
//     hotelBody.classList.add('listHotelMobileLocation')
// })
closeHotelMobileLocation.addEventListener('click', ()=>{
    hotelBody.classList.remove('listHotelMobileLocation')
    hotelBody.classList.remove('hotelBlur')
})
closeHotelMobileFitter.addEventListener('click', ()=>{
    hotelBody.classList.remove('listHotelMobileFitter')
    hotelBody.classList.remove('hotelBlur')
})
// btnHotelMobileFitter.addEventListener('click', ()=>{
//     hotelBody.classList.add('listHotelMobileFitter')
    
// })
btnHotelMobileRange.addEventListener('click', ()=>{
    hotelBody.classList.add('listHotelMobileRange')
    hotelBody.classList.add('hotelBlur')
})
closeHotelBlur.addEventListener('click', ()=>{
    hotelBody.classList.remove('listHotelMobileRange')
    hotelBody.classList.remove('listHotelMobileLocation')
    hotelBody.classList.remove('hotelBlur')
    hotelBody.classList.remove('listHotelMobileFitter')
    
})
