<?php
$conn = mysqli_connect("localhost", "root", "", "pengaduan");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>