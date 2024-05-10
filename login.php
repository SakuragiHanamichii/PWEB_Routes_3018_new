<?php

require ('conection.php');

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pweb pr menggila";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get user input
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Sanitize user input
  $username = $con->real_escape_string($username);
  $password = $con->real_escape_string($password);

  // Query the database for the user
  $sql = "SELECT * FROM login_user WHERE username='$username' AND password='$password'";
  $result = $con->query($sql);

  // Check if the user exists
  if ($result->num_rows > 0) {
    // User exists, log them in
    session_start();
    $_SESSION['username'] = $username;
    header('Location: profile.php');
  } else {
    // User does not exist, show an error message
    echo "Invalid username or password";
  }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container1">
        <form id="form" action="" method = 'POST'>
            <div class="input-control1">
                <h1 id="username">Username</h1>
                <input type="text" name="route" value="index" style="display: none;">
                <input id="username" name="username" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control2">
                <h2 id="password">password</h2>
                <input id="password"name="password" type="password" required>
                <div class="error"></div>
            </div>
            <a href="profile.php"> <button id="loginp">LogIn</button></a>
            </div>
            <div class="register">
                <p>Already registered? <a href="register.php">Register</a></p>
            </div>
            <div class="judul">
                <h3 id="title">Sign In</h3>
                <h4 id="ikuti">Masuk untuk melnjutkan proses</h4>
            </div>
        </form>
    </div>
</body>
</html>