<?php
require_once('database.php');

class ProductModel extends database
{



    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getProductById($productId)
    {
        $sql = "SELECT * FROM products WHERE product_id = :productId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':productId', $productId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProduct($productData)
    {
        $sql = "INSERT INTO products (product_name, description,price, image) 
                VALUES ( :product_name, :description, :price, :image)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(':product_name', $productData['product_name']);
        $stmt->bindValue(':description', $productData['description']);
        $stmt->bindValue(':price', $productData['price']);
        $stmt->bindValue(':image', $productData['image']);

        return $stmt->execute();
    }

    public function deleteProduct($productId)
    {
        $sql = "DELETE FROM products WHERE product_id = :productId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':productId', $productId);
        return $stmt->execute();
    }
    public function updateProduct($productId, $productData)
{
    $sql = "UPDATE products SET product_name = :product_name, description = :description, price = :price, image = :image WHERE product_id = :productId";
    $stmt = $this->conn->prepare($sql);

    $stmt->bindValue(':product_name', $productData['product_name']);
    $stmt->bindValue(':description', $productData['description']);
    $stmt->bindValue(':price', $productData['price']);
    $stmt->bindValue(':image', $productData['image']);
    $stmt->bindValue(':productId', $productId);

    return $stmt->execute();
}


    
}
