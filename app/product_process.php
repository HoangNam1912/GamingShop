<?php
// main.php
if(isset($_GET['productId'])) {
    $productId = $_GET['productId'];
    require_once('controller/productcontroller.php');    
    $productcontroller = new ProductController();
    $productcontroller->details($productId);
} else {
    echo "Không tìm thấy sản phẩm.";
}
?>
