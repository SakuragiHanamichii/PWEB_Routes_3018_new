<?php
include_once 'create_transaksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="transaksi.css">
</head>
<body>
  <div class="container">
  <form class="" action='create_transaksi.php?route=create' method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control4"  name="email" id="email">
        </div>
        <div class="col-md-12">
            <label for="inputPelanggan" class="form-label">Pelanggan</label>
            <input type="text" class="form-control1" name="pelanggan"id="pelanggan">
          </div>
        <div class="col-13">
          <label for="inputID" class="form-label">ID</label>
          <input type="text" class="form-control2" id="id_game"  name="id_game"placeholder="80600000 ex.">
        </div>
        <div class="col-md-7">
            <label for="inputGame" class="form-label">Choose Game</label>
            <select id="inputGame" class="form-select" name="kategori_game" id="kategori_game">
              <option selected>Choose...</option>
                <option value="1">PUBG</option>
                <option value="2">Mobile Legend</option>
                <option value="3">AOV</option>
                <option value="4">Free Fire</option>
                <option value="5">COD Mobile</option>
                <option value="6">COC Gem</option>
                <option value="7">Honor of Kings</option>
                <option value="8">Genshin Impact</option>
                <option value="9">Honkai Starrail</option>
                <option value="10">Honkai Impact 3rd</option>
            </select>
          </div>
        <div class="col-md-4">
            <label for="inputItem" class="form-label">Jumlah Item</label>
            <select id="jumlah_item" name="jumlah_item" class="form-select">
              <option value="">Choose...</option>
              <option value="1">40 Diamond</option>
              <option value="2">120 Diamond</option>
              <option value="3">500 Diamond</option>
              <option value="4">2100 Diamond</option>
            </select>
        </div>
        <div class="foto">
          <input type="file" id="invoice" class="invoice" name="invoice">
        </div>
        <div class="col-md-2">
<label for="inputNohp" class="form-label">NO.Handphone</label>
          <input type="text" class="form-control3" name="no_hp" id="no_hp">
        </div>
        <div class="dating">
          <label for="party">Choose your preferred party date:</label><br>
          <input type="date" id="tanggal_masuk" name="tanggal_masuk" min="2024-01-01" max="2030-12-31" required />
          <span class="validity"></span>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check jika data anda benar!
            </label>
          </div>
        </div>
        <div class="col-12">
                <button class="button" type="submit" name="submit" value="sumbit">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</body>
</html>