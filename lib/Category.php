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
    public function getSingleCategories($id) {
        $result = $this->db->con->query("SELECT * FROM categories WHERE category_id=$id");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function addCategories($data) {
        $category_name = $this->db->con->real_escape_string($data['category_name']);
        $category_description = $this->db->con->real_escape_string($data['category_description']);
        

        $result = $this->db->con->query("
            INSERT INTO categories(category_name, category_description) 
            VALUES ('$category_name', '$category_description')
        ");

        // if ($result) echo 'sucess';
        // else echo 'fail add';

    }

    public function updateCategories($data) {

        $category_id = $this->db->con->real_escape_string($data['category_id']);
        $category_name = $this->db->con->real_escape_string($data['category_name']);
        $category_description = $this->db->con->real_escape_string($data['category_description']);
        
        $result = $this->db->con->query("
            UPDATE categories 
            SET category_name='$category_name', category_description='$category_description' where category_id=$category_id");
    
        // if ($result) echo 'succ prod';
        // else echo 'fail prod';
    }

    public function deleteCategories($id) {
        $result = $this->db->con->query("DELETE FROM categories WHERE category_id={$id}");
        
    }


}
?>