<?php
require ('conection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the input data
    if (empty($username) || empty($full_name) || empty($password)) {
        $error = "Please fill in all the fields";
    } else {
        // Insert the data into the database
        // (assuming you have a database connection and a users table)
        $query = "INSERT INTO login_user (username, full_name, password) VALUES ('$username', '$full_name', '$password')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: login.php");
            exit();
        } else {
            $error = "Registration failed";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
       .container {
            width: 50%;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .form-group {
            margin-bottom: 20px;
        }
       .form-control {
            width: 100%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
        }
       .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
       .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if (isset($error)) {?>
            <p style="color: red;"><?php echo $error;?></p>
        <?php }?>
        <form method="post">
            <div class="form-group">
                <label for="full_name">Nama:</label>
                <input type="text" id="full_name" name="full_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div >
            <a href="login.php"><button type="submit" class="btn">Register</button></a>
            <p>Already registered? <a href="login.php">Sign In</a></p>
            </div>
        </form>
    </div>
</body>
</html>
</body>
</html>