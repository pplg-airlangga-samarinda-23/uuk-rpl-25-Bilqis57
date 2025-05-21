<?php 
require "koneksi.php";

$sql ="SELECT * FROM bayi";

$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Bayi</title>
</head>
<style>
    table, th, td{
        border: 1px solid black;
    }
</style>
<body>
    <a href="databayi_tambah.php">Tambah Data Bayi</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Jenis Kelamin </th>
                <th>RT/RW</th>
                <th>Usia</th>
                <th>Tanggal Periksa</th>
                <th>Tinggi Badan(cm)</th>
                <th>Berat Badan(kg)</th>
            </tr>
        </thead>
            <?php
            $no = 1;
            foreach($rows as $data): 
            ?>

            <tr> 
                <td><?=$no; ?></td>
                <td><?=$data["Nama"]; ?></td>
                <td><?=$data["Jenis_Kelamin"]; ?></td>
                <td><?=$data["RT.RW"]; ?></td>
                <td><?=$data["Usia"]; ?></td>
                <td><?=$data["Tanggal_Periksa"]; ?></td>
                 <td><?=$data["Tinggi_Badan"]; ?></td>
                  <td><?=$data["Berat_Badan"]; ?></td>
                <td>
                    <a href="edit_data_bayi.php?id=<?=$data['id']?>">Edit</a>
                    <a href="hapus_data_bayi.php?id=<?=$data['id']?>">Hapus</a>
                </td>
            </tr>
            
            <?php
            $no +=1;
            endforeach;
            ?>
            <?php foreach ($rows as $data) : ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>