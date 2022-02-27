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
        $image = $data['image'];
        // echo $image;
        $quantity = $this->db->con->real_escape_string($data['quantity']);
        $description = $this->db->con->real_escape_string($data['description']);
        

        $result = $this->db->con->query("
            INSERT INTO products(product_name, category_id, price, quantity, description, image) 
            VALUES ('$product_name', '$category_id', '$price', '$quantity', '$description','$image')
        ");

        // if ($result) echo 'sucess';
        // else echo 'fail add';

    }
    public function updateProduct($data) {

        $product_id = $this->db->con->real_escape_string($data['product_id']);
        $product_name = $this->db->con->real_escape_string($data['product_name']);
        $category_id = $this->db->con->real_escape_string($data['category_id']);
        $price = $this->db->con->real_escape_string($data['price']);
        $image = $data['image'];
        $quantity = $this->db->con->real_escape_string($data['quantity']);
        $description = $this->db->con->real_escape_string($data['description']);


        $result = $this->db->con->query("
            UPDATE products 
            SET product_name='$product_name', category_id='$category_id', price = '$price', quantity = '$quantity', description='$description', image='$image' where product_id=$product_id");
    
        // if ($result) echo 'succ prod';
        // else echo 'fail prod';
    }

    public function deleteProduct($id) {
        $result = $this->db->con->query("DELETE FROM products WHERE product_id={$id}");
        
    }

    public function decreaseQuantity($product_id, $order_quantity) {
        $result = $this->db->con->query("
            UPDATE products
            SET quantity = quantity - $order_quantity 
            WHERE product_id = $product_id
        ");

        if ($result) echo 'success quantity decrease';
        else echo 'fail decrease';
    }

    public function increaseQuantity($product_id, $order_quantity) {
        $result = $this->db->con->query("
            UPDATE products
            SET quantity = quantity + $order_quantity 
            WHERE product_id = $product_id
        ");

        if ($result) echo 'success quantity increase';
        else echo 'fail increase';
    }


}


?>