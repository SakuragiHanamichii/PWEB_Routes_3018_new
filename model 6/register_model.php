<?php
class RegisterModel {
    public function registerUser($full_name, $username, $password) {
        require('connection.php'); // Include the database connection

        // Validate input data
        if (empty($username) || empty($full_name) || empty($password)) {
            return false;
        }

        // Insert data into the database
        $query = "INSERT INTO login_user (username, full_name, password) VALUES ('$username', '$full_name', '$password')";
        $result = mysqli_query($con, $query);

        return $result;
    }
}
?>
