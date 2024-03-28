const formatNumberVnd = document.getElementsByClassName('numberVnd');

const VND = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
  });
// Lặp và gán sự kiện
  for (var i = 0; i < formatNumberVnd.length; i++){
    formatNumberVnd[i].innerHTML = VND.format(formatNumberVnd[i].innerHTML);
  }
