<?php
class Order {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function addOrder($data) {
        
        $address = $data['address'];
        $city = $data['city'];
        $zipcode = $data['zipcode'];
        $order_status = $data['order_status'];
        $created_at = $data['created_at'];
        $updated_at = $data['updated_at'];

        $result = $this->db->con->query("
            insert into 
            orders (address, city,  zipcode, order_status,created_at, updated_at) 
            values ('$address', '$city', '$zipcode', '$order_status', '$created_at', '$updated_at')
        ");

        if ($result) echo 'success order';
        else echo 'fail order';

    }


}


?>

