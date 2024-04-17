<?php
require_once(__DIR__ . '/../models/cartModel.php');

class CartController {
    private $cartModel;

    public function __construct($db) {
        $this->cartModel = new CartModel($db);
    }

    public function addToCart($cartId, $productId, $quantity) {
        $result = $this->cartModel->addItemToCart($cartId, $productId, $quantity);
     
        if ($result) {
            header("Location: cart.php"); 
            exit(); 
        } else {
            // Xử lý trường hợp thất bại nếu cần
        }
    }
    
    
    public function viewCart($cartId) {

        $cartModel = new CartModel();
       
        $cartItems = $cartModel->getCartItems($cartId);
       
       require_once('views/viewcart.php');
    }
}
?>
