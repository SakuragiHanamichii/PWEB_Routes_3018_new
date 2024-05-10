<?php
require 'conection.php';

function readTransaksi() {
    global $con;
    $data = array();

    $sql = 'SELECT * FROM transaksi';
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}
?>
