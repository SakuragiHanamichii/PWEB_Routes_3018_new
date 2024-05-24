
<?php
include 'conection.php';

// Check if the file upload was successful
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['invoice'])) {
    if (
        isset($_POST['pelanggan']) &&
        isset($_POST['kategori_game']) &&
        isset($_POST['tanggal_masuk']) &&
        isset($_POST['no_hp']) &&
        isset($_POST['jumlah_item']) &&
        isset($_POST['email']) &&
        isset($_POST['id_game'])
    ) {
        // Mengambil data dari form
        $pelanggan = $_POST['pelanggan'];
        $kategori_game = $_POST['kategori_game'];
        $tanggal_masuk = $_POST['tanggal_masuk'];
        $no_hp = $_POST['no_hp'];
        $jumlah_item = $_POST['jumlah_item'];
        $email = $_POST['email'];
        $id_game = $_POST['id_game'];
        $invoice = $_FILES['invoice'];

        if ($invoice['error'] === UPLOAD_ERR_OK) {
            $tmpFilePath = $invoice['tmp_name'];
            $newFileName = uniqid(). '_'. basename($invoice['name']);
            $targetFilePath = "invoice/". $newFileName;

            if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
                $invoice = $newFileName;
            } else {
                echo "Error uploading file.";
                exit();
            }
        } else {
            echo "File upload failed.";
            exit();
        }
    } else {
        echo "No file uploaded.";
        exit();
    }

    // Query untuk memasukkan data
    $sql = "INSERT INTO transaksi (pelanggan,kategori_game,tanggal_masuk,no_hp,jumlah_item,email,id_game,invoice) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssis", $pelanggan, $kategori_game, $tanggal_masuk, $no_hp, $jumlah_item, $email, $id_game, $invoice);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Data berhasilditambahkan.";
        // Tutup statement dan koneksi
        $stmt->close();
        $con->close();

        header("Location: http://localhost/ux%20web%20new/routes.php?route=index");
        exit();
    } else {
        echo "Error: ". $stmt->error;
        // Tutup statement dan koneksi
        $stmt->close();
        $con->close();
    }
}
?>