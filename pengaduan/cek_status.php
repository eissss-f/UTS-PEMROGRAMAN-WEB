<?php
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .glass {
            background: rgba(255,255,255,0.25);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 30px;
            color: white;
        }

        .result-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            color: #333;
            border-left: 5px solid #007bff;
            transition: 0.3s;
        }

        .result-card:hover {
            transform: translateY(-5px);
        }

        .img-bukti {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn-custom {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            border: none;
            color: white;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container mt-5 d-flex justify-content-center">
    <div class="glass col-md-7 shadow-lg">

        <h3 class="text-center mb-4">🔎 Cek Status Pengaduan</h3>

        <form method="GET">
            <div class="input-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda..." required>
                <button class="btn btn-custom">Cek</button>
            </div>
        </form>

        <?php
        if (isset($_GET['nama'])) {
            $nama = $_GET['nama'];
            $data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE nama='$nama'");

            if (mysqli_num_rows($data) == 0) {
                echo "<div class='alert alert-light text-dark'>Data tidak ditemukan 😢</div>";
            }

            while ($d = mysqli_fetch_array($data)) {

                // warna status
                if ($d['status'] == 'pending') {
                    $badge = "warning";
                } elseif ($d['status'] == 'proses') {
                    $badge = "primary";
                } else {
                    $badge = "success";
                }

                echo "
                <div class='result-card'>
                    <h5 class='fw-bold text-primary mb-3'>".$d['judul']."</h5>

                    <div class='d-flex justify-content-between align-items-start'>
                        
                        <div style='flex:1; padding-right:15px;'>
                            <p><b>👤 Nama:</b> ".$d['nama']."</p>
                            <p><b>📝 Isi:</b><br>".$d['isi']."</p>
                            <p><b>Status:</b> 
                                <span class='badge bg-$badge'>".$d['status']."</span>
                            </p>
                        </div>

                        <div>
                            ".(!empty($d['bukti']) ? "
                                <img src='upload/".$d['bukti']."' class='img-bukti'>
                            " : "")."
                        </div>

                    </div>
                </div>
                ";
            }
        }
        ?>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-light">← Kembali</a>
        </div>

    </div>
</div>

</body>
</html>