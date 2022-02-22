<?php
class Review {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getReviews($product_id) {

        $result = $this->db->con->query("
            SELECT * FROM reviews 
            INNER JOIN users
            ON reviews.user_id = users.user_id 
            WHERE reviews.product_id = $product_id
        ");

        $resultArray = array();

        while ($review = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $review;
        }

        return $resultArray;
    }

}


?>

