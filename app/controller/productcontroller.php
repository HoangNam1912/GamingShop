<?php
require_once('models/productmodel.php');


class ProductController {
    public function index() {
        // Tạo một đối tượng ProductModel
        $productModel = new ProductModel();
        
        // Gọi phương thức getAllProducts() từ ProductModel để lấy danh sách sản phẩm
        $products = $productModel->getAllProducts();

        // Truyền biến $products vào view
        require_once('views/product_list.php');
       
    }

    // productcontroller.php
    public function details($productId)
    {
        // Tạo một đối tượng ProductModel
        $productModel = new ProductModel();

        // Lấy thông tin của sản phẩm dựa vào $productId
        $productdetails = $productModel->getProductById($productId);

        // Truyền biến $productdetails vào view
        require_once('views/product_details.php');
    }
    
}



?>
