<?php
$host = "localhost";
$user = "root";
$pass = ""; // Di Laragon, biarkan kosong seperti ini ""
$db   = "db_tokoku";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>