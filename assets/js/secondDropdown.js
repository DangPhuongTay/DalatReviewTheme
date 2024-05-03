const btnHotelSearch = document.querySelector('.hotel__fitter--search');
const btnHotelRoom = document.querySelector('.hotel__fitter--search.room');
const btnHotelRoomMobile = document.querySelector('.hotel__fitter--search.roomMobile');
const btnHotelDateMobile = document.querySelector('.hotelMobile__fitter--date');
const btnHotelSearchMobile = document.querySelector('.hotelMobile__fitter--location');
const closeHotelFitterBlur = document.querySelector('.hotel__fitter--blur');
const closeHotelFitterBlur2 = document.querySelector('.hotel__fitter--blur__2');


const secondDropDownBody = document.querySelector('body');

btnHotelSearch.addEventListener('click', ()=>{
    secondDropDownBody.classList.add('listHotelSearch')
})
btnHotelRoom.addEventListener('click', ()=>{
    secondDropDownBody.classList.add('listHotelRoom')
})
// btnHotelRoomMobile.addEventListener('click', ()=>{
//     secondDropDownBody.classList.add('listHotelRoomMoblie')
//     secondDropDownBody.classList.add('hotelFitterBlur')
// })
// btnHotelDateMobile.addEventListener('click', ()=>{
//     secondDropDownBody.classList.add('listHotelDateMoblie')
//     secondDropDownBody.classList.add('hotelFitterBlur2')
// })
btnHotelSearchMobile.addEventListener('click', ()=>{
    secondDropDownBody.classList.add('listHotelSearchMoblie')
    secondDropDownBody.classList.add('hotelFitterBlur')
})
closeHotelFitterBlur.addEventListener('click', ()=>{
    secondDropDownBody.classList.remove('listHotelSearch')
    secondDropDownBody.classList.remove('listHotelRoom')
    secondDropDownBody.classList.remove('listHotelRoomMoblie')
    secondDropDownBody.classList.remove('listHotelSearchMoblie')
    secondDropDownBody.classList.remove('hotelFitterBlur')
})
closeHotelFitterBlur2.addEventListener('click', ()=>{
    secondDropDownBody.classList.remove('listHotelDateMoblie')
    secondDropDownBody.classList.remove('hotelFitterBlur2')
})

