<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Penyewa Kos</title>
    <link rel="stylesheet" href="/E-Kosan-github/views/style/style.css">
    <link rel="stylesheet" href="/E-Kosan-github/views/style/createupdate.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="dashboard">
<?php include "views/components/sidebar.php"?>
<div class="container">
      <h1>Update Data Penyewa Kos</h1>
        <form class="form" action="/E-Kosan-github/updateekosan/<?= $data[0]['id'] ?>" method="post">
            <hr>
            <label for="namapenyewa">Nama Penyewa: </label>
            <input type="text" name="nama" id="namapenyewa" value="<?= $data[0]['nama']?>">
            <br>
            <label for="kamar">Kamar: </label>
            <input type="number" name="kamar" id="kamar" value="<?= $data[0]['kamar']?>">
            <br>
            <label for="nomorhp">No Handphone: </label>
            <input type="number" name="no_hp" id="nomorhp" value="<?= $data[0]['nomor_hp']?>">
            <br>
            <label for="bayar">Tanggal Pembayaran: </label>
            <input type="date" name="bayar" id="bayar" value="<?= $data[0]['tanggal_pembayaran']?>">
            <br>
            <label for="periode">Periode Pembayaran : </label>
            <input type="date" name="periode" id="periode" value="<?= $data[0]['periode_pembayaran']?>">
            <br>
            <button type="submit"class="update">Update Data</button>
        </form>
      </div>

</body>
</html>