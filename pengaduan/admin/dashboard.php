<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}

include '../config/koneksi.php';

// ==================
// FIX STATUS (WAJIB SAMA SEMUA)
// pending | proses | selesai
// ==================

// STATISTIK
$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan"))['total'];

$pending = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE LOWER(status)='pending'"))['total'];

$proses = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE LOWER(status)='proses'"))['total'];

$selesai = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE LOWER(status)='selesai'"))['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .stat-card {
            border-radius: 15px;
            padding: 20px;
            color: white;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">👨‍💻 Admin Panel</span>
        <div>
            <a href="../index.php" class="btn btn-light btn-sm">Home</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- STATISTIK -->
    <div class="row">
        <div class="col-md-3">
            <div class="stat-card bg-primary">
                <h5>Total</h5>
                <h3><?= $total ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card bg-secondary">
                <h5>Pending</h5>
                <h3><?= $pending ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card bg-warning text-dark">
                <h5>Diproses</h5>
                <h3><?= $proses ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card bg-success">
                <h5>Selesai</h5>
                <h3><?= $selesai ?></h3>
            </div>
        </div>
    </div>

    <!-- DATA -->
    <div class="card p-3 shadow-sm">
        <h4>📋 Data Pengaduan</h4>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Bukti</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id DESC");

                while ($d = mysqli_fetch_array($data)) {
                    $status = strtolower($d['status']);
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['judul']; ?></td>
                        <td><?= $d['isi']; ?></td>

                        <td>
                            <?php if ($d['bukti']) { ?>
                                <img src="../upload/<?= $d['bukti']; ?>" width="80">
                            <?php } ?>
                        </td>

                        <!-- STATUS -->
                        <td class="text-center">
                            <?php if ($status == 'pending') { ?>
                                <span class="badge bg-secondary">Pending</span>
                            <?php } elseif ($status == 'proses') { ?>
                                <span class="badge bg-warning text-dark">Diproses</span>
                            <?php } else { ?>
                                <span class="badge bg-success">Selesai</span>
                            <?php } ?>
                        </td>

                        <!-- AKSI -->
                        <td class="text-center">

                            <!-- PROSES -->
                            <?php if ($status == 'pending') { ?>
                                <a href="proses.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">Proses</a>
                            <?php } ?>

                            <!-- SELESAI -->
                            <?php if ($status == 'proses') { ?>
                                <a href="selesai.php?id=<?= $d['id']; ?>" class="btn btn-success btn-sm">Selesai</a>
                            <?php } ?>

                            <!-- HAPUS -->
                            <a href="hapus.php?id=<?= $d['id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin hapus?')">
                               Hapus
                            </a>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</div>

</body>
</html>