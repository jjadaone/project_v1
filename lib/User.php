<?php
class User {
    public $db = null;

    public function __construct(Database $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function login($user, $pass) {
        // $username = $this->db->real_escape_string($user);
        // $password = $this->db->real_escape_string($pass);

        $result = $this->db->con->query("
            SELECT * FROM users WHERE username='$user' AND password='$pass'
        ");

        $resultArray = array();

        while ($userInfo = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $userInfo;
        }

        return $resultArray;

    }

    public function register($data) {
        $first_name = $this->db->con->real_escape_string($data['first_name']);
        $last_name = $this->db->con->real_escape_string($data['last_name']);
        $username = $this->db->con->real_escape_string($data['username']);
        $password = $this->db->con->real_escape_string($data['password']);
        $email = $this->db->con->real_escape_string($data['email']);
        $birthdate = $this->db->con->real_escape_string($data['birthdate']);
        $gender = $this->db->con->real_escape_string($data['gender']);

        $result = $this->db->con->query("
            INSERT INTO users(first_name, last_name, username, password, email, birthdate, gender) 
            VALUES ('$first_name', '$last_name', '$username', '$password', '$email', '$birthdate', '$gender')
        ");

        if ($result) return true;
    }

}


?>
















































<!-- public function addProduct($query) {
        $result = $this->db->con->query($query);
        
        if ($result) {
            echo 'Product created successfully.';

        } else {
            echo 'Error creating the product.';
        }
    } -->