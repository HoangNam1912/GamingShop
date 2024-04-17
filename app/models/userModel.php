<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addUser($username, $password) {
        if (empty($username)) {
            return false; // Hoặc có thể throw một exception
        }
    
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
    
    public function getUserByUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->conn->prepare($query); // Sử dụng thuộc tính conn một cách trực tiếp
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
