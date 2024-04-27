<?php
include 'koneksi.php'; // Menggunakan file koneksi yang sudah dibuat

// Mengambil data dari form
$nama = $_POST['namapenyewa'];
$kamar = $_POST['kamar'];
$nomor_hp = $_POST['nomorhp'];
$tanggal_pembayaran = $_POST['bayar'];
$periode_pembayaran = $_POST['periode'];

// Query untuk memasukkan data
$sql = "INSERT INTO db_ekosan (nama, kamar, nomor_hp, tanggal_pembayaran, periode_pembayaran) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiss", $nama, $kamar, $nomor_hp, $tanggal_pembayaran, $periode_pembayaran);

// Eksekusi query
if ($stmt->execute()) {
    echo "Data berhasil ditambahkan.";
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();

    // Alihkan ke halaman index.php setelah data berhasil ditambahkan
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
