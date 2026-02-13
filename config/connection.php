<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_samarinda";

//buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
