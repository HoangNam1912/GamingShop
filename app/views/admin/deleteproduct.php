<?php
require_once('../../controller/admincontroller.php');

// Kiểm tra xem có dữ liệu productId được gửi không
if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Tạo đối tượng admincontroller và gọi phương thức xóa sản phẩm
    $adminController = new admincontroller();
    $adminController->deleteProduct($productId);
} else {
    // Nếu không có dữ liệu productId, in ra thông báo lỗi
    echo "Không có ID sản phẩm được cung cấp.";
}
?>
