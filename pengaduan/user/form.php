<!DOCTYPE html>
<html>
<head>
    <title>Form Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-custom {
            background: #ffffff;
            border-radius: 15px;
            margin: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 30px;
            color: white;
        }

        .info-box {
            background: rgba(255,255,255,0.15);
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .btn-custom {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            border: none;
            color: white;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }

        input, textarea {
            border-radius: 10px !important;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand text-dark fw-bold">💬 Sistem Pengaduan Masyarakat Cirebon</a>

        <div class="ms-auto">
            <a href="../index.php" class="nav-link d-inline">🏠 Home</a>
            <a href="../cek_status.php" class="nav-link d-inline">🔎 Cek Status</a>
           
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5 d-flex justify-content-center">
    <div class="glass col-md-7 shadow-lg">

        <h3 class="text-center mb-3">📢 Form Pengaduan</h3>

        <p class="text-center">
            Silakan isi form di bawah ini untuk menyampaikan laporan Anda.
        </p>

        <!-- NOTIF -->
        <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses') { ?>
            <div class="alert alert-success text-center">
                🎉 Pengaduan berhasil dikirim!
            </div>
        <?php } ?>

        <!-- INFO -->
        <div class="info-box">
            <b>📝 Cara Mengisi:</b>
            <ul class="mb-0">
                <li>Isi nama dengan jelas</li>
                <li>Tuliskan judul singkat</li>
                <li>Jelaskan laporan secara detail</li>
                <li>Upload bukti (opsional)</li>
            </ul>
        </div>

        <!-- FORM (FIX DI SINI) -->
        <form action="../simpan.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nama" class="form-control mb-3" placeholder="Nama Anda" required>
            <input type="text" name="judul" class="form-control mb-3" placeholder="Judul Pengaduan" required>
            <textarea name="isi" class="form-control mb-3" placeholder="Isi laporan..." required></textarea>
            <input type="file" name="bukti" class="form-control mb-3">

            <button class="btn btn-custom w-100">🚀 Kirim Pengaduan</button>
        </form>

        <!-- INFO TAMBAHAN -->
        <div class="info-box mt-3">
            <b>ℹ️ Informasi:</b><br>
            Anda bisa mengecek status pengaduan melalui menu <b>Cek Status</b>.
        </div>

    </div>
</div>

<!-- AUTO HILANG NOTIF -->
<script>
setTimeout(() => {
    let alertBox = document.querySelector('.alert');
    if(alertBox){
        alertBox.style.display = 'none';
    }
}, 3000);
</script>

</body>
</html>