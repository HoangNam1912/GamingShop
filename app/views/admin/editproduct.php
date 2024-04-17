<?php

if(isset($_GET['productId'])) {
    $productId = $_GET['productId'];
    require_once('../../controller/admincontroller.php');    
    $productcontroller = new admincontroller();
    $productcontroller->details($productId);
} else {
    echo "Không tìm thấy sản phẩm.";
}
?>


