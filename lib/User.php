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
    public function getUserProfile($id) {
        $result = $this->db->con->query("SELECT * FROM users WHERE user_id=$id");
    
        $resultArray = array();
    
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
    
        return $resultArray;
    }
    public function updateUser($data) {

        $user_id = $this->db->con->real_escape_string($data['user_id']);
        $first_name = $this->db->con->real_escape_string($data['first_name']);
        $last_name = $this->db->con->real_escape_string($data['last_name']);
        // $email = $this->db->con->real_escape_string($data['email']);
        $contact = $this->db->con->real_escape_string($data['contact']);
        $birthdate = $this->db->con->real_escape_string($data['birthdate']);



        $result = $this->db->con->query("
            UPDATE users
            SET first_name='$first_name', last_name='$last_name',contact = '$contact', birthdate='$birthdate' where user_id=$user_id");
    
        // if ($result) echo 'succ prod';
        // else echo 'fail prod';
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