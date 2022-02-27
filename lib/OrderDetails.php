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
            order_details (order_id, product_id, quantity, total_price) 
            values ('$order_id', '$product_id', '$quantity', '$total_price')
        ");

        if ($result) return true;
        else return false;
    }

    public function getOrderDetails($order_id) {
        $result = $this->db->con->query("
            SELECT product_name, price, order_details.quantity, total_price
            FROM order_details
            INNER JOIN products
            ON products.product_id = order_details.product_id
            WHERE order_details.order_id = $order_id     
        ");

        $resultArray = array();

        while ($orderDetails = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $orderDetails;
        }

        return $resultArray;
    }

    


}


?>

