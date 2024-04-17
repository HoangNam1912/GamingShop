<?php

require_once('database.php');
class CartModel extends database {
  
    public function addItemToCart($cartId, $productId, $quantity) {
        $query = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, :quantity)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':cart_id', $cartId);
        $stmt->bindParam(':product_id', $productId);
        $stmt->bindParam(':quantity', $quantity);
        return $stmt->execute();
    }

    public function getCartItems($cartId) {
    $sql = "SELECT ci.quantity, p.product_name, p.image, p.price
            FROM Cart_Items ci
            INNER JOIN Products p ON ci.product_id = p.product_id
            WHERE ci.cart_id = :cart_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':cart_id', $cartId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    
}
?>
