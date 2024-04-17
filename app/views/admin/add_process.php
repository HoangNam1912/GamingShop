<?php
require_once('../../controller/admincontroller.php');

$productController = new admincontroller();

if (isset($productController)) {
    if (isset($_POST['addProduct'])) {
        $productData = [
            'product_name' => $_POST['product_name'],        
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'image' => $_POST['image']
        ];
        $message = $productController->addNewProduct($productData);
        if ($message === "Thêm sản phẩm thành công!") {
            // Chuyển hướng về trang danh sách sản phẩm
            header("Location: ../../danhsachsanpham.php");
            exit(); // Đảm bảo không có mã HTML hoặc mã PHP nào được thực thi sau header()
        } else {
            echo $message;
        }
    }
} else {
    echo "Lỗi: Biến authController không tồn tại hoặc rỗng!";
}
?>
