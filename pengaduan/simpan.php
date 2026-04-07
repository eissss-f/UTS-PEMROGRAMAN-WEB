<?php
include 'config/koneksi.php';

$nama = $_POST['nama'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$bukti = $_FILES['bukti']['name'];
$tmp = $_FILES['bukti']['tmp_name'];

if ($bukti != '') {
    move_uploaded_file($tmp, "upload/".$bukti);
}

mysqli_query($conn, "INSERT INTO pengaduan (nama, judul, isi, bukti, status)
VALUES ('$nama','$judul','$isi','$bukti','pending')");

header("location:user/form.php?status=sukses");
?>