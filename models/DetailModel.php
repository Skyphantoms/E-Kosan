<?php 

require_once 'config/koneksi.php';

class DetailModel{
    static function read(){
        global $conn;
        $query= "SELECT * from db_detailkos";
        $result = mysqli_query($conn, $query);
        $data = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $data[] = $row;
            }
        }
        return $data;
    }
     
    static function create($namakos,$gambar,$alamat){
        global $conn;
        $query = "insert into db_detailkos (nama_kos, gambar_kos, alamat) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $namakos, $gambar, $alamat);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function update($id,$namakos,$gambar,$alamat){
        global $conn;
        $stmt = $conn->prepare("update db_detailkos set nama_kos=?, gambar_kos=?, alamat=? WHERE kos_id=".$id);
        $stmt->bind_param("sss", $namakos, $gambar, $alamat);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function delete($id){
        global $conn;
        $query = "delete from db_detailkos where kos_id=".$id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
      }

      static function detail($id){
        global $conn;
        $query = "select * from db_detailkos WHERE kos_id=".$id;
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


