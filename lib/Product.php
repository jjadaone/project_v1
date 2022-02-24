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

    public function addProduct($query) {
        $result = $this->db->con->query($query);
        
        if ($result) {
            echo 'Product created successfully.';

        } else {
            echo 'Error creating the product.';
        }
    }

    public function deleteProduct($id) {
        $result = $this->db->con->query("DELETE FROM products WHERE product_id={$id}");

        if ($result) {
            echo 'Deletion successful.';
        }
        
    }


}


?>
















































<!-- public function addProduct($query) {
        $result = $this->db->con->query($query);
        
        if ($result) {
            echo 'Product created successfully.';

        } else {
            echo 'Error creating the product.';
        }
    } -->