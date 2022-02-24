<?php
class Order {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
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

    


}


?>

