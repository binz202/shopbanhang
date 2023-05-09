function showContent() {
    var hiddenContent = document.querySelector('#hidden-content');
    hiddenContent.classList.toggle('hidden'); // Chuyển đổi lớp 'hidden'
  }
//   window.onload = function() {
//     alert("Xin chào! Chúng tôi chào mừng bạn đến với cửa hàng của chúng tôi.");
// };
window.addEventListener('DOMContentLoaded', function() {
  var notificationDiv = document.getElementById('notificationDiv');
  var closeBtn = document.getElementById('closeBtn');
  
  // Hiển thị hộp thông báo ngay khi trang web đã được tải lại
  notificationDiv.classList.remove('hidden');
  
  // Xử lý sự kiện click vào nút close
  closeBtn.addEventListener('click', function() {
    notificationDiv.classList.add('hidden');
  });
});