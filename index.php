<?php

require('koneksi.php');
$data = read('SELECT * FROM db_ekosan');

// var_dump($jadwal)

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kosan</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <div>
                <h2><i class='bx bxs-home-smile'></i>E-Kosan</h2>
                <ul>
                    <li><a href="index.php"><i class='bx bxs-dashboard'></i> Dashboard </a></li>
                    <li><a href="#"><i class='bx bxs-home'></i> Detail Kos </a></li>
                    <li><a href="#"><i class='bx bxs-spreadsheet'></i> Form Tambah Kos </a></li>
                </ul>
            </div>
            <div class="logout-section">
                <a href="login.php" class="logout-button">Logout</a>
            </div>
        </div>
        <div class="details">
            <h1><i class='bx bxs-dashboard'></i> Dashboard</h1>
            <p>Selamat Datang Admin <strong>E-Kosan</strong></p>
            <div class="border-details">
                <div class="top-table">
                    <h2>Data Penyewa E-Kosan</h2>
                    <a href="create.php"><button type="button" class="button3">Tambah</button></a>
                </div>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <td>Nama Penyewa</td>
                            <td>Kamar</td>
                            <td>No Handphone</td>
                            <td>Tanggal Pembayaran</td>
                            <td>Periode Pembayaran</td>
                        </tr>
                    </thead>
                    <?php foreach ($data as $row) : ?>
                    <tbody>
                        <tr>
                            <td><?=$row['nama']?></td>
                            <td><?=$row['kamar']?></td>
                            <td><?=$row['nomor_hp']?></td>
                            <td><?=$row['tanggal_pembayaran']?></td>
                            <td><?=$row['periode_pembayaran']?></td>
                            <td>
                             <a href="update.php"><button type="button" class="button">Edit</button></a>
                             <a href="c_delete.php?id=<?=$row['id']?>"><button type="button" class="button2">Delete</button></a>
                            </td>
                    <?php endforeach ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>