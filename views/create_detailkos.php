<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Detail Kos</title>
    <link rel="stylesheet" href="views/style/style.css">
    <link rel="stylesheet" href="views/style/createupdate.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="dashboard">
        <?php include "views/components/sidebar.php" ?>
        <div class="container">
            <h1>Tambah Data Detail Kos</h1>
            <form class="form" action="createdetail" method="post" enctype="multipart/form-data">
                <hr>
                <label for="namakos">Nama Kos: </label>
                <input type="text" name="namakos" id="namakos">
                <br>
                <label for="gambar_kos">Gambar Kos: </label>
                <input class="form-control" type="file" name="gambar_kos" id="gambar_kos">
                <br>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" id="alamat">
                <br>
                <button class="create" type="submit" name="submit">Tambah Data</button>
            </form>
        </div>
    
</body>

</html>