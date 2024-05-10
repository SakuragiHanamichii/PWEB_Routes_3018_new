<?php
session_start(); // Start session
require_once('login_model.php'); // Include the model file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create an instance of LoginModel
    $loginModel = new LoginModel();

    // Attempt to authenticate the user
    $loginResult = $loginModel->authenticateUser($username, $password);

    if ($loginResult === true) {
        // User authenticated, redirect to profile page
        header('Location: profile.php');
        exit();
    } else {
        // Authentication failed, show an error message
        $error = "Invalid username or password";
    }
}

// Include the view file
require_once('login_view.php');
?>
