<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="index.php?controller=login&action=authenticate">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
</body>
</html>
