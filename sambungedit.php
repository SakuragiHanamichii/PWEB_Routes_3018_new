<?php 

require 'conection.php'; // Sertakan file koneksi.php
if (
    isset($_POST['id']) &&
    isset($_POST['pelanggan']) &&
    isset($_POST['kategori_game']) &&
    isset($_POST['tanggal_masuk']) &&
    isset($_POST['status4']) &&
    isset($_POST['no_hp'])
    isset($_POST['jumlah_item'])
    isset($_POST['email'])
){

    $id = $_POST['id'];
    $pelanggan = $_POST['pelanggan'];
    $kategori_game = $_POST['kategori_game'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $status4 = $_POST['status4'];
    $no_hp = $_POST['no_hp'];
    $jumlah_item = $_POST['jumlah_item'];
    $email = $_POST['email'];

    $query = "UPDATE transaksi SET id='$id', pelanggan='$pelanggan', kategori_game='$kategori_game', tanggal_masuk='$tanggal_masuk', status4= '$status4', no_hp= '$no_hp', jumlah_item= '$jumlah_item', email= '$email' Status= '$Status'  WHERE id='$id'";

    if ($con->query($query) === TRUE) {
        echo "Data Berhasil Diperbaharui";
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }
} else {
    echo "Semua data harus disertakan";
}

$con->close();
?>