
const userBody = document.querySelector('body');
document.addEventListener("DOMContentLoaded", function() {
    // Lấy ra tất cả các div có class 'user__content--option__btn'
    var options = document.querySelectorAll('.user__content--option__btn');

    // Thêm sự kiện click cho từng thẻ div
    for (var i = 0; i < options.length; i++) {
        options[i].addEventListener('click', function() {
            activate(this.dataset.target);
        });
    }
});

function activate(contentClassName) {
    // Lấy ra tất cả các div có class 'user__content--option__btn'
    var options = document.querySelectorAll('.user__content--option__btn');

    // Lặp qua tất cả các div và loại bỏ lớp 'user__option--active' nếu có
    for (var i = 0; i < options.length; i++) {
        options[i].classList.remove('user__option--active');
    }

    // Thêm lớp 'user__option--active' cho div được chọn
    var viewBanner = document.querySelector('.' + contentClassName);
   
    if (viewBanner) {

        // Ẩn hiện nội dung tất cả
        var contents = document.querySelectorAll('.user__content--body');
        for (var j = 0; j < contents.length; j++) {
            contents[j].style.display = 'none';
        }

        // Hiển thị nội dung của lớp tương ứng với div được chọn
        viewBanner.style.display = 'block';
    } else {
        console.error('Không tìm thấy phần tử có class: ' + contentClassName);
    }
}

function btnUserNotify(){
    userBody.classList.toggle('listUserNotify')
}

