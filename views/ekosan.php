<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - E-Kosan</title>
    <link rel="stylesheet" href="views/style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="dashboard">
        <?php include "views/components/sidebar.php"?>
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
                    
                    <tbody>
                        <?php for ($x=0; $x < count($data); $x++) {?>
                        <tr>
                            <td><?=$x+1?></td>
                            <td><?=$data[$x]['nama']?></td>
                            <td><?=$data[$x]['kamar']?></td>
                            <td><?=$data[$x]['nomor_hp']?></td>
                            <td><?=$data[$x]['tanggal_pembayaran']?></td>
                            <td><?=$data[$x]['periode_pembayaran']?></td>
                            <td>
                            <a href="ekosanupdate/<?= $data[$x]['id'] ?>"><button type="submit" class="button">Edit</button></a>
                            <a href="deleteekosan/<?= $data[$x]['id'] ?>" onclick="return confirm('Anda yakin menghapus item ini?');"><button type="submit" class="button2">Hapus</button></a>
                            </td>
                        </tr>
                        <?php } ?>
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