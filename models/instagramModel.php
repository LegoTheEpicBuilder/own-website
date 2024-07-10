
<?php
/*
class InstagramModel {
    private $mysqli;

    //connecting to database
    public function __construct() {
        $this->mysqli = new mysqli("localhost", "root", "", "instagram");
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    //adding a new user to the database
    public function AddAccount($account) {
        $sql = "INSERT INTO accounts (username, password) VALUES (?, ?)";

        $username = $account->getUsername();
        $password = $account->getPassword();

        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        $stmt->execute();
        $stmt->close();
    }
    
}
    */
?>
