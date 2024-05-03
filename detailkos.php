<?php

// require('koneksi.php');
// $data = read('SELECT * FROM db_detailkos');

// require 'c_detail_create.php';
// $data = read('SELECT * FROM db_detailkos');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kos - E-Kosan</title>
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
                    <li><a href="detailkos.php"><i class='bx bxs-home'></i> Detail Kos </a></li>
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
                    <h2>Detail data E-Kosan</h2>
                    <a href="detail_create.php"><button type="button" class="button3">Tambah</button></a>
                </div>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <td>Nama Kos</td>
                            <td>Gambar Kos</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <?php foreach ($data as $row) : ?>
                    <tbody>
                        <tr>
                            <td><?=$row['nama_kos']?></td>
                            <td class="gambar" ><img src="/E-KOSAN/uploads/<?=$row['gambar_kos']?>" alt=""></td>
                            <td><?=$row['alamat']?></td>
                            <td>  
                            <a href="detail_update.php?id=<?= $row['kos_id'] ?>"><button type="submit" class="button" name="submit">Edit</button></a>
                            
                            <form method="POST" action="c_detail_delete.php" onsubmit="confirmDelete(event,this);">
                                <input type="hidden" name="kos_id" value="<?= $row['kos_id']; ?>">
                                <button  class="button2" type="submit">Hapus</button>
                            </form>
                            </td>
                    <?php endforeach ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

function confirmDelete(event,form){
    event.preventDefault();  // Mencegah form dari pengiriman otomatis
    swal({
        title: "Apakah anda yakin?",
        text: "Setelah di hapus data tidak bisa di kembalikan",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal("Data telah berhasil di hapus", {
                icon: "success",
            }).then(() => {
                form.submit();
            });
        } else {
            swal("Batal melakukan penghapusan data");
        }
    });
}

</script>

</html>