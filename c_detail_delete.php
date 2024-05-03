<?php

include 'koneksi.php'; // Include script koneksi database

$id = $_POST['kos_id']; // Dapatkan id dari URL

if (isset($id)) {
    $query = "DELETE FROM db_detailkos WHERE kos_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id); // 'i' berarti tipe data integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data atau Data tidak ditemukan.";
    }
    $stmt->close();
    $conn->close();
    header("Location: detailkos.php"); // Alihkan kembali ke halaman utama
} else {
    echo "ID tidak ditemukan.";
}
?>
