<?php
class LoginModel {
    private $con;

    public function __construct() {
        require('connection.php'); // Include the database connection
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pweb pr menggila";

        $this->con = new mysqli($servername, $username, $password, $dbname);

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function authenticateUser($username, $password) {
        // Sanitize user input
        $username = $this->con->real_escape_string($username);
        $password = $this->con->real_escape_string($password);

        // Query the database for the user
        $sql = "SELECT * FROM login_user WHERE username='$username' AND password='$password'";
        $result = $this->con->query($sql);

        // Check if the user exists
        if ($result->num_rows > 0) {
            // User exists, log them in
            session_start();
            $_SESSION['username'] = $username;
            return true;
        } else {
            // User does not exist
            return false;
        }
    }
}
?>
