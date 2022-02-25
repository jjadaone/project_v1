<?php
class Order {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getOrders() {
        $result = $this->db->con->query("
            SELECT orders.order_id, orders.total_price, users.first_name, users.last_name, address, city, zipcode, order_status, created_at
            FROM orders
            INNER JOIN users
            ON users.user_id = orders.user_id
        ");

        while ($order = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $order;
        }

        return $resultArray;
    }

    public function addOrder($data) {
        
        $user_id = $data['user_id'];
        $address = $data['address'];
        $city = $data['city'];
        $zipcode = $data['zipcode'];
        $order_status = $data['order_status'];
        $created_at = $data['created_at'];
        $updated_at = $data['updated_at'];

        // print_r($data);

        $result = $this->db->con->query("
            insert into 
            orders (user_id, address, city,  zipcode, order_status, created_at, updated_at) 
            values ('$user_id', '$address', '$city', '$zipcode', '$order_status', '$created_at', '$updated_at')
        ");

        if ($result) return true;
        else return false;
    }

    public function updateOrder($data) {

        $total = $data['total'];
        $order_id = $data['order_id'];
        
        $result = $this->db->con->query("
            UPDATE orders set total_price = $total WHERE order_id = $order_id
        ");

        if ($result) echo 'success update ';
        else echo 'fail update';

    }

    


}


?>

