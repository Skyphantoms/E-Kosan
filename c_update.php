<?php
include 'koneksi.php'; // Menggunakan file koneksi yang sudah dibuat

// Mengambil data dari form
$id = htmlspecialchars($_GET['id']);
$nama = htmlspecialchars($_POST['namapenyewa']);
$kamar = htmlspecialchars($_POST['kamar']);
$nomor_hp = htmlspecialchars($_POST['nomorhp']);
$tanggal_pembayaran = htmlspecialchars($_POST['bayar']);
$periode_pembayaran = htmlspecialchars($_POST['periode']);

if (empty($nama)) {
    echo "<script> alert('Nama tidak boleh kosong');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
if (empty($kamar)) {
    echo "<script> alert('Kamar tidak boleh kosong');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
if (empty($nomor_hp)) {
    echo "<script> alert('Nomor hp tidak boleh kosong');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
if (empty($tanggal_pembayaran)) {
    echo "<script> alert('Tanggal pembayaran tidak  boleh kosong');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
if (empty($periode_pembayaran)) {
    echo "<script> alert('Periode pembayaran tidak boleh kosong');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}

if (strlen($nama) > 50) {
    echo "<script> alert('Character di kolom nama tidak boleh lebih dari 50');window.location.href = 'update.php?id=".$_GET['id']."';</script>";
    exit();
}
if (!is_numeric($kamar)) {
    echo "<script> alert('kamar harus berupa angka');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
if (strlen($nomor_hp)>13) {
    echo "<script> alert('Nomor Hp tidak boleh lebih dari 13 character');window.location.href = 'update.php?id=".$_GET['id']."'</script>";
    exit();
}
// Query untuk memasukkan data
$sql = "UPDATE db_ekosan SET nama=?, kamar=?, nomor_hp=?, tanggal_pembayaran=?, periode_pembayaran=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siissi", $nama, $kamar, $nomor_hp, $tanggal_pembayaran, $periode_pembayaran, $id);

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
