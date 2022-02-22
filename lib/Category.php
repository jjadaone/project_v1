<?php
class Category {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getCategories() {
        $result = $this->db->con->query("
            SELECT * FROM categories
        ");

        $resultArray = array();

        while ($category = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $category;
        }

        return $resultArray;
    }



}


?>































