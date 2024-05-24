<?php
require_once "models/DetailModel.php";
require_once "function/function.php";

class DetailController{

    public function __construct()
    {
      global $url;
      session_start();
      if(!isset($_SESSION['is_auth']))
      {
        echo "<script>window.location.href = '".$url."/login'</script>";
        exit();
      }
    }



    public function index()
    {
        $data = DetailModel::read();
        loadView('detailkos', $data);
    }

    public function formcreate()
    {
        loadView('create_detailkos');
    }

    public function create()
    {
        global $url;
        if ($_FILES['gambar_kos']['name'] != '') {
            $extension = substr($_FILES['gambar_kos']['name'], strlen($_FILES['gambar_kos']['name']) - 4, strlen($_FILES['gambar_kos']['name']));
            $file = md5($_FILES['gambar_kos']['name']) . time() . $extension;
            $result = move_uploaded_file($_FILES['gambar_kos']['tmp_name'], 'uploads/' . $file);
            if (!$result) {
                echo ("<script>alert('Gagal upload gambar');window.location.href = '/E-Kosan-github/detailcreate/" . "'</script>");
                exit();
            }
            $data = DetailModel::create($_POST["namakos"], $file, $_POST["alamat"]);
        } else {
            $data = DetailModel::create($_POST["namakos"], null, $_POST["alamat"]);
        }
        header("Location:" . $url . "/detailkos");
    }


    public function formupdate($id)
    {
        $data = DetailModel::detail($id);
        loadView('update_detailkos', $data);
    }

    public function update($id)
    {
        global $url;

        if ($_FILES['gambar_kos']['name'] != '') {
            $extension = substr($_FILES['gambar_kos']['name'], strlen($_FILES['gambar_kos']['name']) - 4, strlen($_FILES['gambar_kos']['name']));
            $file = md5($_FILES['gambar_kos']['name']) . time() . $extension;
            $data = DetailModel::detail($id);
            if ($data[0]['gambar_kos'] != null) {
                if (file_exists('uploads/' . $data[0]['gambar_kos'])) {
                    unlink('uploads/' . $data[0]['gambar_kos']);
                }
            }
            $result = move_uploaded_file($_FILES['gambar_kos']['tmp_name'], 'uploads/' . $file);
            if (!$result) {
                echo ("<script>alert('Gagal upload gambar');window.location.href = '/E-Kosan-github/detailupdate/" . $id . "'</script>");
                exit();
            }
            $data = DetailModel::update($id, $_POST["nama_kos"], $file, $_POST["alamat"]);
        } else {
            $data = DetailModel::update($id, $_POST["nama_kos"], $_POST["gambarLama"], $_POST["alamat"]);
        }
        header("Location:" . $url . "/detailkos");
    }


    public function delete($id)
    {
        global $url;
        $data = DetailModel::detail($id);
        if (file_exists('uploads/' . $data[0]['gambar_kos'])) {
            unlink('uploads/' . $data[0]['gambar_kos']);
        }
        $data = DetailModel::delete($id);
        header("Location:" . $url . "/detailkos");
    }
}