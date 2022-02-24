<?php
class OrderDetails {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function addOrderDetails($data) {
        
        $order_id = $data['order_id'];
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        $total_price = $data['total_price'];


        // print_r($data);

        $result = $this->db->con->query("
            insert into 
            orders (order_id, product_id, quantity, total_price) 
            values ('$order_id', '$product_id', '$quantity', '$total_price')
        ");

        if ($result) return true;
        else return false;
    }

    


}


?>

