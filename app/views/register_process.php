<?php

require_once('../controller/authController.php');
$authController = new AuthController();
// Kiểm tra xem biến $authController đã tồn tại và không rỗng
if (isset($authController)) {
    // Sử dụng các biến đã được truyền từ main.php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = $authController->registerUser($username, $password);
        echo $message;
    }
} else {
    echo "Lỗi: Biến authController không tồn tại hoặc rỗng!";
}
?>