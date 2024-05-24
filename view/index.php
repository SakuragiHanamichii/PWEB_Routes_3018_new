<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <div class="topbar">
        <div class="navlink">
            <a href="#home">Home</a>
            <a href="#games">Games</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#news">News</a>
        </div>
        <div class="logo">
            <h1 id="name">RaulGG.Store</h1>
        </div>
        <div class="gambar1">
            <img src="circle.png" alt="">
        </div>
    </div>
<div class="tombol">
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo  '<a href="logout.php" class="logout_login">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>';

    } else {
        echo   '<a href="register.php" class="dropdown-item has-icon">
        <i class="fas fa-user-plus"></i> Buat Akun
      </a>';
      echo   '<a href="login.php" class="logout_login">
      <i class="fas fa-user-plus"></i> Login
    </a>';
    }
    ?>
</div>
    <div class="container">
        <div class="gambar">
            <img src="game.png" alt="">
        </div>
    </div>
    <div class="deskripsi">
        <h2 id="tulisan">Topup & Get a New <br>Experience in Gaming</h2>
        <h3 id="halo">Hello, Gamers!</h3>
        <h4 id="kami">Kami menyediakan jutaan cara untuk membantu <br>players menjadi pemenang sejati</h4>
    </div>
</body>
</html>