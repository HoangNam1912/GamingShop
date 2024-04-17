<?php

require_once(__DIR__ . '/../models/productmodel.php');

class admincontroller
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        // Tạo một đối tượng ProductModel
        $productModel = new ProductModel();
        // Gọi phương thức getAllProducts() từ ProductModel để lấy danh sách sản phẩm
        $products = $productModel->getAllProducts();

        // Truyền biến $products vào view
        require_once('views/admin/danhsachsanpham.php');
    }
    public function addNewProduct($productData)
    {
        $result = $this->productModel->addProduct($productData);

        if ($result) {
            return "Thêm sản phẩm thành công!";
        } else {
            return "Có lỗi xảy ra khi thêm sản phẩm.";
        }

        require_once('views/admin/addsanpham.php');
    }
    public function deleteProduct($productId)
    {
        $result = $this->productModel->deleteProduct($productId);

        if ($result) {
            echo "Xóa sản phẩm thành công!";
        } else {
            echo "Có lỗi xảy ra khi xóa sản phẩm.";
        }
    }

    public function details($productId)
{
    // Tạo một đối tượng ProductModel
    $productModel = new ProductModel();

    // Lấy thông tin của sản phẩm dựa vào $productId
    $productdetails = $productModel->getProductById($productId);

    // Truyền biến $productdetails vào view
    require_once('../../views/admin/updateproduct.php');
}

    public function editProduct($productId, $productData)
{
    $result = $this->productModel->updateProduct($productId, $productData);

    if ($result) {
        // Chuyển hướng về trang danh sách sản phẩm
        header("Location: ../../danhsachsanpham.php");
        exit();
    } else {
        echo "Có lỗi xảy ra khi sửa sản phẩm.";
    }
}


}
