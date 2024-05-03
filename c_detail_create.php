<?php
require_once 'koneksi.php';  // Include the database connection file

function create($data)
    {
        global $conn;
        $nama_kos= htmlspecialchars($data['namakos']); 
        $alamat = htmlspecialchars($data['alamat']);
        $gambar = upload();

        $sql = "INSERT INTO db_detailkos(nama_kos, gambar_kos, alamat) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $nama_kos, $gambar, $alamat);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        if ($result) {
            echo "<script> alert('Data Berhasil di simpan');window.location.href = 'detailkos.php'</script>";
        }
        return $result;
    };

function upload()
    {

        $namaFile = $_FILES["gambar_kos"]["name"];
        $ukuranFile = $_FILES["gambar_kos"]["size"];
        // $error = $_FILES["gambar_kos"]["error"];
        $tmpName = $_FILES["gambar_kos"]["tmp_name"];

        //cek apakah ada gambar yang di upload
        
        // cek apakah yang diupload gambar
        $eksentensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $eksentensiGambarValid)) {
            echo "
            <script>
                alert('Upload hanya gambar, jangan file lain!')
            </script>;";
        } else if (in_array($ekstensiGambar, $eksentensiGambarValid)) {
            // cek jika ukurannya terlalu besar
            if ($ukuranFile > 10000000) {
                echo "
                <script>
                    alert('Ukuran gambar terlalu besar!')
                </script>;
        ";
            } else {
                // generate nama file baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= "." . $ekstensiGambar;
                // lolos pengecekan, gambar siap diupload
                move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru);
                return $namaFileBaru;
            }
        }
        return false;
        
    }

function update($id_kos, $data)
    {
        global $conn;
        $nama_kos= htmlspecialchars($data['namakos']); 
        $alamat = htmlspecialchars($data['alamat']);
        $gambarLama = htmlspecialchars($data['gambarLama']);

        // cek apakah user memilih gambar baru atau tidak
        if ($_FILES['gambar_kos']['name'] == "") {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $stmt = $conn->prepare("UPDATE db_detailkos set nama_kos=?, gambar_kos=?, alamat=? WHERE kos_id=" . $id_kos);
        $stmt->bind_param("sss", $nama_kos,$gambar,$alamat);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        if ($result) {
            echo "<script> alert('Data Berhasil di simpan');window.location.href = 'detailkos.php'</script>";
        }
        return $result;
    }
?>
