    function useVoucher() {
      var useButton = document.getElementById('useButton');
      if (!useButton.classList.contains('used')) {
        // Perform any additional logic here (e.g., update server, show confirmation)
       
        useButton.innerText = 'Đã Lưu';
        useButton.classList.add('used');
      }
    }