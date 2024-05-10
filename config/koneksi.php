<?php
require_once 'env.php';

$url = $_ENV['BASEURL'];
$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

// $serverName = "localhost";
// $userName = "root";
// $password = "";
// $dbname = "ekosan";
$conn = new mysqli($host, $username, $password, $database);

// function read($query) {
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
//     return $rows;
// };
?>