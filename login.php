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
        <form id="form" action="routes.php">
            <div class="input-control1">
                <h1 id="email">Email</h1>
                <input type="text" name="route" value="index" style="display: none;">
                <input id="email" name="email" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control2">
                <h2 id="password">password</h2>
                <input id="password"name="password" type="password" required>
                <div class="error"></div>
            </div>
            <a href="profile.php"> <button id="loginp">LogIn</button></a>
            </div>
            <div class="judul">
                <h3 id="title">Sign In</h3>
                <h4 id="ikuti">Masuk untuk melnjutkan proses</h4>
            </div>
        </form>
    </div>
</body>
</html>