<?php 
class Database {
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'clout_chasing_clothing';

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Failed to connect to database...";
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    public function closeConnection() {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}



?>