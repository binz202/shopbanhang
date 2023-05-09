<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Kiểm tra tính hợp lệ của dữ liệu (ví dụ: có thể thêm kiểm tra email hợp lệ, mật khẩu phức tạp hơn, vv.)

// Mã hóa mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Thêm thông tin tài khoản vào cơ sở dữ liệu
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
