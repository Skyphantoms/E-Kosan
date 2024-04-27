
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/createupdate.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="dashhboard">
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
</div>
<div class="container">
      <h1>Update Data Penyewa Kos</h1>
        <form class="form" action="c_update.php" method="post">
            <hr>
            <label for="namapenyewa">Nama Penyewa: </label>
            <input type="text" name="namapenyewa" id="namapenyewa" value="">
            <br>
            <label for="kamar">Kamar: </label>
            <input type="number" name="kamar" id="kamar" value="">
            <br>
            <label for="nomorhp">No Handphone: </label>
            <input type="number" name="nomorhp" id="nomorhp" value="">
            <br>
            <label for="bayar">Tanggal Pembayaran: </label>
            <input type="date" name="bayar" id="bayar" value="">
            <br>
            <label for="periode">Periode Pembayaran : </label>
            <input type="date" name="periode" id="periode" value="">
            <br>
            <button type="submit"class="update">Update Data</button>
        </form>
      </div>

</body>
</html>