<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "pweb pr menggila";

$con = mysqli_connect($serverName, $userName, $password, $dbname);

// if (!$con) {
//     die("Connection failed: ". mysqli_connect_error());
// }

function read($query){
    global $con;
    $result = mysqli_query($con,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// $sql = "SELECT * FROM transaksi";
// $result = mysqli_query($con, $sql);
?>