<?php
require_once('../controller/authController.php');
$authController = new AuthController();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = $authController->loginUser($username, $password);
    echo $message;

    if ($message === "Đăng nhập thành công!") {
        header("Location: ../main.php");
        exit(); // Kết thúc việc thực thi kịch bản sau khi chuyển hướng
    }
}
?>