<!-- main.php -->

<?php
require_once('controller/productcontroller.php');    
$productcontroller = new ProductController();
$productcontroller->index();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form đăng ký
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gọi hàm đăng ký từ AuthController
    require_once('controller/authController.php');
    $authController = new AuthController();
    $message = $authController->registerUser($username, $password);
    echo $message;
}
?>
