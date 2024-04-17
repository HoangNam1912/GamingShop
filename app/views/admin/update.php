<?php
require_once('../../controller/admincontroller.php');
$adminController = new admincontroller();

// Kiểm tra xem dữ liệu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $productId = $_POST['productId'];
    $productData = array(
        'product_name' => $_POST['product_name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    );

    // Gọi hàm sửa sản phẩm từ controller
    $result = $adminController->editProduct($productId, $productData);

    // Hiển thị kết quả
    if ($result) {
        // Chuyển hướng về trang danh sách sản phẩm
        header("Location: views/danhsachsanpham.php");
        exit();
    }
}
?>
