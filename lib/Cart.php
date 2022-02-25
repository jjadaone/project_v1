<?php
class Cart {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getCart() {
        $result = $this->db->con->query("SELECT * FROM carts");
        
        $resultArray = array();

        while ($cart = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $cart;
        }

        return $resultArray;
    }

    public function getSingleCart($user_id, $product_id) {
        $result = $this->db->con->query("
            SELECT * FROM carts WHERE product_id=$product_id AND user_id=$user_id
        ");
        
        $resultArray = array();

        while ($cart = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $cart;
        }

        return $resultArray;
    }

    public function getUserCart($user_id) {
        // $result = $this->db->con->query("SELECT * FROM carts WHERE user_id=$id");
        $result = $this->db->con->query("
            SELECT *
            FROM carts
            INNER JOIN products 
            ON carts.product_id=products.product_id
            WHERE carts.user_id=$user_id
        ");
        
        $resultArray = array();

        while ($cart = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $cart;
        }

        return $resultArray;
    }

    public function addCart($data) {
        $user_id = $data['user_id'];
        $product_id = $data['product_id'];
        $quantity = $data['cart_quantity'];
        $price = $data['price'];
        $total = $quantity * $price;
        $order_date = $data['order_date'];

        $result = $this->db->con->query("
            INSERT INTO carts(user_id, product_id, cart_quantity, total, order_date) 
            VALUES ('$user_id', '$product_id', '$quantity', '$total', '$order_date')
        ");

        if ($result) echo 'Success';
        else echo 'error';

    }

    public function updateQuantities($product_id, $quantity, $user_id) {

        // $result = $this->db->con->query("
        //     UPDATE carts SET quantity=$quantity, total=$quantity*price WHERE cart_id=$cartId
        // ");

        // $result = $this->db->con->query("
        //     UPDATE carts SET cart_quantity=$quantity, total=$quantity*price WHERE product_id=$product_id AND user_id=$user_id
        // ");
        $result = $this->db->con->query("
            UPDATE carts INNER JOIN products ON carts.product_id=products.product_id SET cart_quantity=$quantity, carts.total=$quantity*products.price WHERE carts.product_id=$product_id AND carts.user_id=$user_id
        ");

        if ($result) echo 'Quantities updated successfully.';
    }

    public function deleteCart($cart_id) {

        $result = $this->db->con->query("
            DELETE FROM carts WHERE carts.cart_id=$cart_id
        ");

        if ($result) echo 'Cart deleted successfully.';
    }



    public function isCartItemExists($user_id, $cart_id) {

        $result = $this->db->con->query("
            SELECT * FROM carts WHERE user_id=$user_id AND product_id=$cart_id
        ");

        if (mysqli_num_rows($result) > 0) return true;
        else return false;
    }

    public function clearUserCart($user_id) {

        $result = $this->db->con->query("
            DELETE FROM `carts` WHERE user_id=$user_id
        ");

        if ($result) echo 'Cart cleared.';
        else echo 'clear failed';
    }

    
    public function countCart($user_id) {

        $result = $this->db->con->query("
            SELECT SUM(cart_quantity) as sum_total FROM carts WHERE carts.user_id=$user_id
        ");

        $resultArray = array();

        while ($cart = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $cart;
        }

        return $resultArray;
    }




}


?>































