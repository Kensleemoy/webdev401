<?php 

class Dao {
    var $connection;
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $db = "heroku_4657552c4f92f45";
    private $user = "b56559b74c1386";
    private $pass = "6af506e4";

    function construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function getConnection () {
        return $this->connection;    
    }

    public function auth($username, $password) {
        $query ="SELECT * FROM user WHERE username='$username' AND password='$password';";
        $result = $this->connection->query($query);

        if($result && $result->num_rows > 0) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $row = $result->fetch_assoc();
            return true;
        } else {
            return false;
        }
    }

    $this->connection->close();
}

function addUser($name, $username, $password) {
    $query = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password');";
    $result = $this->connection->query($query);
    $this->connection->close();
}
?>
