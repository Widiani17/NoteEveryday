<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noteever_12";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Jakarta'); // Set zona waktu
?>