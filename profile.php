<?php

require 'conection.php';
$data3 = read('SELECT * FROM transaksi')
// $read = 'SELECT * FROM transaksi';
// $data = mysqli_query($con,$read)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="topbar">
        <div class="navlink">
            <a href="index.php">Home</a>
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
    <div class="profileimg">
        <a href="index.php"> <img src="man.png" alt=""></a>
    </div>
    <div class="box">
        <div class="borderleft">
            <h6 id="order">Order Masuk©</h6>
        </div>
    </div>
    <div class="box2">
        <div class="borderright">
            <h5 id="done">Order Done©</h5>
        </div>
    </div>
    <div class="colom">
        <div class="border">
            <h1 id="omset">Pemasukan Bulan ini</h1>
        </div>
    </div>
    <div class="kotak">
        <div class="square">
            <h2 id="bayar">Transaksi</h2>
            <div class="btn-content">
                <button class="btn-tambah" id="btn-tambah" onclick="window.location.assign('transaksi.php')">Tambah</button>

            </div>
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Pelanggan</th>
                <th>Kategori Game</th>
                <th>Tanggal Masuk</th>
                <th>No Hp</th>
                <th>Jumlah Item</th>
                <th>Email</th>
                <th>UID</th>
                <th>invoice</th>
                <th>hapus</th>
              </tr>
            </thead>
            <?php foreach($data3 as $row):?>
            <tbody>
                <tr>
                <td><?= $row["id"]?></td>
                <td><?= $row["pelanggan"]?></td>
                <td><?= $row["kategori_game"]?></td>
                <td><?= $row["tanggal_masuk"]?></td>
                <td><?= $row["no_hp"]?></td>
                <td><?= $row["jumlah_item"]?></td>
                <td><?= $row["email"]?></td>
                <td><?= $row["id_game"]?></td>
                <td><img width="70 " class ="ukuran" src="/UX%20WEB%20NEW/invoice/<?=$row['invoice']?>"></td>
                <td>
                <form method="POST" action="deletefile.php" onsubmit="confirmDelete(event,this);">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <button  class="button2" type="submit">Hapus</button>
                </td>
                </form>
                </td>
            <?php endforeach ?>
                </tr>
            </tbody>    
        </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>

<!-- // if (mysqli_num_rows($data) > 0) {
                        //     while ($row = mysqli_fetch_assoc($data)) {
                        //         echo "<tr>";
                        //         echo "<td>". $row["id"]. "</td>";
                        //         echo "<td>". $row["pelanggan"]. "</td>";
                        //         echo "<td>". $row["kategori_game"]. "</td>";
                        //         echo "<td>". $row["tanggal_masuk"]. "</td>";
                        //         echo "<td>". $row["no_hp"]. "</td>";
                        //         echo "<td>". $row["jumlah_item"]. "</td>";
                        //         echo "<td>". $row["email"]. "</td>";
                        //         echo "<td>". $row["id_game"]. "</td>";
                        //         echo "<td><img src = '/UX%20WEB%20NEW/invoice/". $row["invoice"]. "' alt = 'invoice' width = '50px' height = '50px'</td>";
                        //         echo "</tr>";
                        //     }
                        // } else {
                        //     echo "0 results";
                        // } -->
