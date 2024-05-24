<?php 
include 'conection.php'; // Include script koneksi database

$id = $_POST['id']; // Dapatkan id dari URL

if (isset($id)) {
    $query = "DELETE FROM transaksi WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id); // 'i' berarti tipe data integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data atau Data tidak ditemukan.";
    }
    $stmt->close();
    $con->close();
    header("Location: routes.php?route=index"); // Alihkan kembali ke halaman utama
} else {
    echo "ID tidak ditemukan.";
}

?>