<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kosan</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="dashboard">
    <div class="sidebar">
        <h2>E-Kosan
            <i class='bx bxs-home-smile'></i>
        </h2>
        <ul>
            <li><a href="#">Dashboard <i class='bx bxs-dashboard'></i></a></li>
            <li><a href="#">Detail Kos <i class='bx bxs-home' ></i></a></li>
            <li><a href="#">Form Tambah Kos <i class='bx bxs-spreadsheet'></i></a></li>
        </ul>
    <div class="logout-section">
    <a href="#" class="logout-button">Logout</a>
    </div>
    </div>
    <div class="main-content">
        <h1>Dashboard<i class='bx bxs-dashboard'></i>
        </h1>
        <p>Selamat Datang Admin <strong>E-Kosan</strong></p>
        <div class="dashboard-content">
            <h2 class="deskripsi-table">Data Penyewa Kos</h2>
            <table class="table-set">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Penyewa</th>
                        <th>kamar</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Periode Pembayaran Selanjutnya</th>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Faiq Razaan</td>
                        <td>13</td>
                        <td>04 Mei 2024</td>
                        <td>04 Mei 2025</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Ainol Yakin</td>
                        <td>02</td>
                        <td>12 Maret 2024</td>
                        <td>12 Juni 2024</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Ahmad Faris</td>
                        <td>09</td>
                        <td>29 februari 2024</td>
                        <td>29 Juli 2024</td>
                    </tr>
                </tbody>
            </table>
            <div class="button-group">
                <button type="button" class="btn-create" id="create-btn">Create</button>
                <button type="button" class="btn-update" id="update-btn">Update</button>
                <button type="button" class="btn-delete " id="delete-btn">Delete</button>
            </div>        
        </div>
    </div>
</div>

</body>
</html>
