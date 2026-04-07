<?php
session_start();
include '../config/koneksi.php';

$user_id = $_SESSION['user']['id'];
$data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE user_id='$user_id'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>Status Pengaduan</h3>

    <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <th>Status</th>
            <th>Tanggal</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $row['judul']; ?></td>
            <td>
                <span class="badge bg-<?=
                    $row['status']=='pending'?'secondary':
                    ($row['status']=='proses'?'warning':'success')
                ?>">
                    <?= $row['status']; ?>
                </span>
            </td>
            <td><?= $row['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="form_pengaduan.php" class="btn btn-primary">Kembali</a>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="form_pengaduan.php">Buat Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tracking.php">Tracking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>