<?php
require "koneksi.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $Nama = $_POST["nama"];
    $Jenis_Kelamin = $_POST["jenis"];
    $RT_RW = $_POST["rt"];
    $Usia = $_POST["usia"];
    $Tanggal_Periksa = $_POST["tanggal"];
    $Tinggi_Badan = $_POST["tinggi"];
    $Berat_Badan = $_POST["berat"];

    $sql = "INSERT INTO bayi (Nama, Jenis_Kelamin, RT_RW, Usia, Tanggal_Periksa, Tinggi_Badan, Berat_Badan) VALUES (?, ?, ?, ?, ?)";

    $row = $koneksi->execute_query($sql, [$Nama, $Jenis_Kelamin, $RT_RW, $Usia, $Tanggal_Periksa, $Tinggi_Badan, $Berat_Badan]);

    header("location: ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Bayi</title>
</head>
<body>

</body>
</html>