

const tourBody = document.querySelector('body');
// const primaryDropdownHidden = document.querySelector('.primary__dropdown--content');

function primaryDropdown() {
  tourBody.classList.toggle('active');
};
function firstQuestion() {
  tourBody.classList.toggle('tourfirstQuestion');
  console.log(1)
};
$(".firstQuestion__content--list__item").click(function(e) {
  e.stopPropagation();
});

// window.primaryDropdown = function() {
//     document.getElementById("primaryDropdownHidden").classList.toggle("show");
//   };

// window.onclick = function(event) {
//   if (!event.target.matches('.primary__dropdown--button')) {
//     var dropdowns = document.getElementsByClassName("primary__dropdown--content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// };
