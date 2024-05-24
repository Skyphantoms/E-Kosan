<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penyewa Kos</title>
    <link rel="stylesheet" href="views/style/style.css">
    <link rel="stylesheet" href="views/style/createupdate.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="dashboard">
        <?php include "views/components/sidebar.php" ?>
        <div class="container">
            <h1>Tambah Data Penyewa Kos</h1>
            <form class="form" action="createekosan" method="post">
                <hr>
                <label for="namapenyewa">Nama Penyewa: </label>
                <input type="text" name="nama" id="namapenyewa">
                <br>
                <label for="kamar">Kamar: </label>
                <input type="number" name="kamar" id="kamar">
                <br>
                <label for="nomorhp">No Handphone: </label>
                <input type="number" name="no_hp" id="nomorhp">
                <br>
                <label for="bayar">Tanggal Pembayaran: </label>
                <input type="date" name="bayar" id="bayar">
                <br>
                <label for="periode">Periode Pembayaran : </label>
                <input type="date" name="periode" id="periode">
                <br>
                <button class="create" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
</body>

</html>