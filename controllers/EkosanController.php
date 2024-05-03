<?php
require_once "models/EkosanModel.php";
require_once "function/function.php";

class EkosanController{
  
  public function index(){
    $data = EkosanModel::read();
    loadView('ekosan', $data);
  }

  public function formcreate(){
    loadView('ekosancreate');
  }

  public function create(){
    global $url;
    $data = EkosanModel::create($_POST["nama"],$_POST["kamar"],$_POST["no_hp"],$_POST["tanggal_pembayaran"],$_POST["periode_pembayaran"]);
    header("Location:".$url."/ekosan");
  }

  public function detail($id){
    $data = EkosanModel::detail($id);
    return $data;
  }
 
  public function formupdate($id){
    $data = EkosanModel::detail($id);
    loadView('ekosanupdate', $data);
  }

  public function update($id){
    global $url;
    $data = EkosanModel::update($id,$_POST["nama"],$_POST["kamar"],$_POST["no_hp"],$_POST["tanggal_pembayaran"],$_POST["periode_pembayaran"]);
    header("Location:".$url."/ekosan");
  }

  public function delete($id){
    global $url;
    $data = EkosanModel::delete($id);
    header("Location:".$url."/ekosan");
  }
}