<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Detail Kos</title>
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
                    <li><a href="detailkos.php"><i class='bx bxs-home'></i> Detail Kos </a></li>
                    <li><a href="#"><i class='bx bxs-spreadsheet'></i> Form Tambah Kos </a></li>
                </ul>
            </div>
            <div class="logout-section">
                <a href="login.php" class="logout-button">Logout</a>
            </div>
        </div>
</div>
    <div class="container">
    <h1>Tambah Data Detail Kos</h1>
      <form class="form" action="detail_create.php" method="post" enctype="multipart/form-data">
        <hr>
          <label for="namakos">Nama Kos: </label>
          <input type="text" name="namakos" id="namakos">
          <br>
          <label for="gambar_kos">Gambar Kos: </label>
          <input  class="form-control" type="file" name="gambar_kos" id="gambar_kos">
          <br>
          <label for="alamat">Alamat: </label>
          <input type="text" name="alamat" id="alamat">
          <br>
          <button class="create" type="submit" name="submit" >Tambah Data</button>
      </form>
    </div>

</body>
</html>