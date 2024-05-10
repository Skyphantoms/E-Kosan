<?php
// session_start();
include 'config/koneksi.php'; 
$username = $_POST['username'];
$password = $_POST['password'];


if (!empty($username) && !empty($password)) {
    $sql = "SELECT user_id, username, password FROM db_akun WHERE username = ? AND  password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Mengecek apakah ada user yang sesuai
    if ($row = $result->fetch_assoc()) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: index.php"); 
            exit();
        }else{
            echo "<script> alert('Username atau Password salah!');window.location.href = 'login.php' </script> ";
        }
    $stmt->close();}
$conn->close();
// ?>
