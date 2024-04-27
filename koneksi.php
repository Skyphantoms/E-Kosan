<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "ekosan";

$conn = mysqli_connect($serverName, $userName, $password, $dbname);

function read($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>