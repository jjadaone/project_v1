<?php
class Product {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    

    public function getProducts($category_id=null) {
       
        if ($category_id == null) {
            $result = $this->db->con->query("SELECT * FROM products");
        } else {
            $result = $this->db->con->query("SELECT * FROM products WHERE category_id=$category_id");
        }
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getSingleProduct($id) {
        $result = $this->db->con->query("SELECT * FROM products WHERE product_id=$id");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
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

    }
    public function updateProduct($data) {
        $result = $this->db->con->query("
            UPDATE products SET product_name='$product_name', category_id='$category_id', price = '$price', quantity = '$quantity', description='$description' where id=$id");
    }

    public function deleteProduct($id) {
        $result = $this->db->con->query("DELETE FROM products WHERE product_id={$id}");
        
    }


}


?>