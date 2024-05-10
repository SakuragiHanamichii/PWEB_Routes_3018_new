<?php
require_once('connection.php'); // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('register_model.php'); // Include the model file

    // Extract data from the form
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Create an instance of RegisterModel
    $registerModel = new RegisterModel();

    // Call the registerUser method
    $registrationResult = $registerModel->registerUser($full_name, $username, $password);

    // Redirect based on registration result
    if ($registrationResult === true) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Registration failed";
    }
}

// Include the view file
require_once('register_view.php');
?>
