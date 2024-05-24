<?php

require_once "models/AuthModel.php";
require_once "function/function.php";

class AuthController{
  
  public function __construct()
  {
    global $url;
    session_start();
    if(isset($_SESSION['is_auth']) and $_SESSION['is_auth'] == true)
    {
      echo "<script>window.location.href = '".$url."/ekosan'</script>";
    }
  }

  static function viewlogin(){
    loadView('/login');
  }

  static function viewregister(){
      loadView('/register');
  }

  static function login(){
    global $url;
    if (empty($_POST["username"])) {
      echo "<script>alert('Kolom username tidak boleh kosong');window.location.href = '".$url."/login'</script>";
      exit(); 
    } 
    else if (empty($_POST["password"])) {
      echo "<script>alert('Kolom password tidak boleh kosong');window.location.href = '".$url."/login'</script>";
      exit();
    }
    if (strlen($_POST["password"]) < 8) {
      echo("<script>alert('Kolom password minimal input 8 karakter');window.location.href = '".$url."/login'</script>");
      exit();
    }
    $data = AuthModel::getdata($_POST["username"]);
    if ($_POST["username"] != $data[0]['username']) {
      echo("<script>alert('Kolom username salah');window.location.href = '".$url."/login'</script>");
      exit();
    }
    if ($_POST["password"] != $data[0]['password']) {
      echo("<script>alert('Kolom password salah');window.location.href = '".$url."/login'</script>");
      exit();
    }
    session_start();
    $_SESSION["username"] = $data[0]['username'];
    $_SESSION["email"] = $data[0]['email'];
    $_SESSION["user_id"] = $data[0]['user_id'];
    $_SESSION["is_auth"] = true;
    header('Location: '.$url.'/ekosan');
    exit();
  }

  static function register(){
    global $url;
    if (empty($_POST["username"])) {
      echo "<script>alert('Kolom username tidak boleh kosong');window.location.href = '".$url."/register'</script>";
      exit(); 
    } 
    else if (empty($_POST["password"])) {
      echo "<script>alert('Kolom password tidak boleh kosong');window.location.href = '".$url."/register'</script>";
      exit();
    }
    else if (empty($_POST["email"])) {
      echo "<script>alert('Kolom email tidak boleh kosong');window.location.href = '".$url."/register'</script>";
      exit();
    }
    if (strlen($_POST["password"]) < 8) {
      echo("<script>alert('Kolom password minimal input 8 karakter');window.location.href = '".$url."/register'</script>");
      exit();
    }
    $data = AuthModel::getdata($_POST["username"]);
    if ($data[0]['username'] != "") {
      echo("<script>alert('Uesrname sudah dipakai!');window.location.href = '".$url."/register'</script>");
      exit();
    }
    $result = AuthModel::register($_POST['email'], $_POST['username'], $_POST['password']);
    if($result){
      $data = AuthModel::getdata($_POST["username"]);
      session_start();
      $_SESSION["username"] = $data[0]['username'];
      $_SESSION["email"] = $data[0]['email'];
      $_SESSION["user_id"] = $data[0]['user_id'];
      $_SESSION["is_auth"] = true;
      header('Location: '.$url.'/ekosan');
      exit();
    }
    else {
      echo("<script>alert('gagal register, ulangi kembali');window.location.href = '".$url."/register'</script>");
      exit();
    }
  }

  static function logout(){
    global $url;
    session_start();
    if(!isset($_SESSION['is_auth']))
    {
      echo "<script>window.location.href = '".$url."/login'</script>";
      exit();
    }
    session_unset();
    session_destroy();
    header('Location: '.$url.'/login');
  }
}