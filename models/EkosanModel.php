<?php 

require_once 'config/koneksi.php';

class EkosanModel{



    static function read(){
        global $conn;
        $query= "SELECT * from db_ekosan";
        $result = mysqli_query($conn, $query);
        $data = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $data[] = $row;
            }
        }
        return $data;
    }
     
    static function create($nama,$kamar,$nomor_hp,$tanggal_pembayaran,$periode_pembayaran){
        global $conn;
        $query = "insert into db_ekosan (nama, kamar, nomor_hp, tanggal_pembayaran, periode_pembayaran) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("siiss", $nama, $kamar, $nomor_hp, $tanggal_pembayaran, $periode_pembayaran);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function update($id,$nama, $kamar, $nomor_hp, $tanggal_pembayaran, $periode_pembayaran){
        global $conn;
        $stmt = $conn->prepare("update db_ekosan set nama=?, kamar=?, nomor_hp=?, tanggal_pembayaran=?, periode_pembayaran=? WHERE id=".$id);
        $stmt->bind_param("siiss", $nama, $kamar, $nomor_hp, $tanggal_pembayaran, $periode_pembayaran);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function delete($id){
        global $conn;
        $query = "delete from db_ekosan where id=".$id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
      }

      static function detail($id){
        global $conn;
        $query = "select * from db_ekosan WHERE id=".$id;
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_array()) {
            $data[]=$row;
          }
        }
        else { 
          $data = [];
        }
        return $data;
      }

}


