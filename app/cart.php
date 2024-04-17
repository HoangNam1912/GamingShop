<?php
// Kiểm tra xem cartId đã được truyền từ URL chưa
if(isset($_GET['cartId'])) {
    $cartId = $_GET['cartId'];
    require_once('controller/cartController.php');   
    // Khởi tạo một đối tượng CartController với cartId
    $cartcontroller = new CartController($cartId);

    // Gọi phương thức viewCart để hiển thị giỏ hàng
    $cartcontroller->viewCart($cartId);
} else {
    echo "Cart ID is missing from URL.";
}
?>
