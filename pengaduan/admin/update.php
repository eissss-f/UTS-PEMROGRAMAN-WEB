<?php
include 'config/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "UPDATE pengaduan SET status='proses' WHERE id='$id'");

header("location:dashboard.php");
?>