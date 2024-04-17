<?php
require_once(__DIR__ . '/../models/userModel.php');
require_once(__DIR__ . '/../models/Database.php');


class AuthController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function registerUser($username, $password) {
        // Kiểm tra xem tên người dùng đã tồn tại chưa
        $userModel = new UserModel($this->db);
        if ($userModel->getUserByUsername($username)) {
            return "Tên người dùng đã tồn tại!";
        }

        // Mã hóa mật khẩu trước khi lưu vào database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Thêm người dùng mới vào database
        if ($userModel->addUser($username, $hashedPassword)) {
            return "Đăng ký thành công!";
        } else {
            return "Đăng ký không thành công!";
        }

        require_once('views/register.php');
    }

    public function loginUser($username, $password) {
        // Lấy thông tin người dùng từ database
        $userModel = new UserModel($this->db);
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Đăng nhập thành công
            session_start();
            $_SESSION['username'] = $username;
            return "Đăng nhập thành công!";
        } else {
            // Đăng nhập không thành công
            return "Tên người dùng hoặc mật khẩu không chính xác!";
        }
    }
}
?>
