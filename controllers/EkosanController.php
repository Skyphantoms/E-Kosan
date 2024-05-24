<?php
require_once "models/EkosanModel.php";
require_once "function/function.php";

class EkosanController{
  
  public function __construct()
  {
    global $url;
    session_start();
    if(!isset($_SESSION['is_auth']))
    {
      echo "<script>window.location.href = '".$url."login'</script>";
      exit();
    }
  }

  public function index(){
    $data = EkosanModel::read();
    loadView('ekosan', $data);
  }

  public function formcreate(){
    loadView('createekosan');
  }

  public function create(){
    global $url;
    $data = EkosanModel::create($_POST["nama"],$_POST["kamar"],$_POST["no_hp"],$_POST["bayar"],$_POST["periode"]);
    header("Location:".$url."/ekosan");
  }

 
  public function formupdate($id){
    $data = EkosanModel::detail($id);
    loadView('updateekosan', $data);
  }

  public function update($id){
    global $url;
    $data = EkosanModel::update($id,$_POST["nama"],$_POST["kamar"],$_POST["no_hp"],$_POST["bayar"],$_POST["periode"]);
    header("Location:".$url."/ekosan");
  }

  public function delete($id){
    global $url;
    $data = EkosanModel::delete($id);
    header("Location:".$url."/ekosan");
  }
}