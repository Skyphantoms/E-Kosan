<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - E-Kosan</title>
    <link rel="stylesheet" href="/views/style/style.css">
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
                    <h2>Data Penyewa E-Kosan</h2>
                    <a href="ekosancreate"><button type="button" class="button3">Tambah</button></a>
                </div>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Penyewa</td>
                            <td>Kamar</td>
                            <td>No Handphone</td>
                            <td>Tanggal Pembayaran</td>
                            <td>Periode Pembayaran</td>
                        </tr>
                    </thead>
                    <?php for ($x=0; $x < count($data); $x++) ?>
                    <tbody>
                        <tr>
                            <td><?=$x+1?></td>
                            <td><?=$data[$x]['nama']?></td>
                            <td><?=$data[$x]['kamar']?></td>
                            <td><?=$data[$x]['nomor_hp']?></td>
                            <td><?=$data[$x]['tanggal_pembayaran']?></td>
                            <td><?=$data[$x]['periode_pembayaran']?></td>
                            <td>
                            <a href="ekosanupdate/<?= $data[$x]['id'] ?>"><button type="submit" class="button">Edit</button></a>
                            <a href="deleteekosan/<?= $data[$x]['id'] ?>"><button type="submit" class="button2">Hapus</button></a>
                            </td>
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