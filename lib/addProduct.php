<?php
class addProduct {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function addProduct($data) {
        $product_name = $this->db->con->real_escape_string($data['product_name']);
        $category_id = $this->db->con->real_escape_string($data['category_id']);
        $price = $this->db->con->real_escape_string($data['price']);
        $quantity = $this->db->con->real_escape_string($data['quantity']);
        $description = $this->db->con->real_escape_string($data['description']);
        // $image = $this->db->con->real_escape_string($data['image']);

        $result = $this->db->con->query("
            INSERT INTO products(product_name, category_id, price, quantity, description) 
            VALUES ('$product_name', '$category_id', '$price', '$quantity', '$description')
        ");

        if ($result) return true;
    }

}

// $product_name = $_POST['product_name'];
// $category_id = $_POST['category_id'];
// $price = $_POST['price'];
// $quantity = $_POST['quantity'];
// $description = $_POST['description'];
// // $image = $_POST['image'];



?>


<!-- public function addProduct($query) {
        $result = $this->db->con->query($query);
        
        if ($result) {
            echo 'Product created successfully.';

        } else {
            echo 'Error creating the product.';
        }
    } -->