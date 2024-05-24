<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kos - E-Kosan</title>
    <link rel="stylesheet" href="views/style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="dashboard">
        <?php include "views/components/sidebar.php" ?>
        <div class="details">
            <h1><i class='bx bxs-dashboard'></i> Dashboard</h1>
            <p>Selamat Datang Admin <strong>E-Kosan</strong></p>
            <div class="border-details">
                <div class="top-table">
                    <h2>Detail data E-Kosan</h2>
                    <a href="detailcreate"><button type="button" class="button3">Tambah</button></a>
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
                    <tbody>
                        <?php for ($x = 0; $x < count($data); $x++) { ?>
                            <tr>
                                <td><?= $data[$x]['nama_kos'] ?></td>
                                <td class="gambar"><img src="/E-Kosan-github/uploads/<?= $data[$x]['gambar_kos'] ?>" alt=""></td>
                                <td><?= $data[$x]['alamat'] ?></td>
                                <td>
                                    <a href="detailupdate/<?= $data[$x]['kos_id']?>">
                                        <button type="submit" class="button" name="submit">Edit</button>
                                    </a>
                                    <a href="deletedetail/<?= $data[$x]['kos_id'] ?>"
                                        onclick="return confirm('Anda yakin menghapus item ini?');">
                                        <button type="submit" class="button2">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>